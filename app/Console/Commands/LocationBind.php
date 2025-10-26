<?php

namespace App\Console\Commands;

use App\Models\Domain;
use App\Models\Location;
use App\Models\Project;
use App\Models\Story;
use Illuminate\Console\Command;

class LocationBind extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'location:bind {project_id} {rebind}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Binds location';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Binding locations...');

        $rebind = false;

        $rebind = $this->argument('rebind') == 'rebind';
        $project_id = $this->argument('project_id');

        $this->info('Rebind: ' . ($rebind ? 'Yes' : 'No'));

        if ($project_id == 'all') {
            $projects = Project::get();

            foreach ($projects as $project) {
                $this->syncLocation($project->id, $rebind);
            }
        } else {
            $this->syncLocation($project_id, $rebind);
        }

        $this->output->success('Done.');
    }

    private function syncLocation($project_id, $rebind)
    {
        $project = Project::where('id', $project_id)->get()->first();

        if (empty($project)) {
            $this->output->error('Project not found');
            return;
        }

        $country_id = $project?->location?->country_id;

        if (empty($country_id)) {
            $this->output->error('Country is empty');
            return;
        }

        $locations = Location::with(['country', 'city', 'district'])->get();

        $locations_data = $this->convertLocationsToData($locations);

        $this->domainsSync($locations_data, $rebind, $project);

        $this->storiesSync($locations_data, $rebind, $project);
    }

    private function convertLocationsToData($locations)
    {
        $locations_data = $locations->map(function ($location) {
            $country = $location->country?->country;
            $city = $location->city?->city;
            $district = $location->district?->district;

            return [
                'id' => $location->id,
                'country_raw' => $country,
                'city_raw' => $city,
                'district_raw' => $district,
                'country' => empty($country) ? null : strtolower(__('location.' . $country)),
                'city' => empty($city) ? null : strtolower(__('location.' . $city)),
                'district' => empty($district) ? null : strtolower(__('location.' . $district))
            ];
        });

        $locations_data = collect($locations_data)->sortBy(function ($v) {
            if (!empty($v['district'] ?? null)) {
                return strlen($v['district']);
            }

            if (!empty($v['city'] ?? null)) {
                return strlen($v['city']);
            }

            return strlen($v['country']);
        }, SORT_REGULAR, true)->all();

        return $locations_data;
    }

    private function storiesSync($locations_data, $rebind, $project)
    {
        if ($rebind) {
            $stories = Story::where('project_id', $project->id)->get();
        } else {
            $stories = Story::where('project_id', $project->id)->whereNull('location_id')->get();
        }

        $stories_count = $stories->count();

        $this->info('Stories without location: ' . $stories_count);

        if (empty($stories_count)) {
            return;
        }


        $this->output->progressStart($stories_count);

        foreach ($stories as $story) {
            $matches = false;

            foreach ($locations_data as $location_data) {
                if ($this->storyMatchesLocation($story, $location_data['district'])) {
                    $matches = true;
                    $story->update([
                        'location_id' => $location_data['id']
                    ]);
                    break;
                }
            }

            if (!$matches) {
                foreach ($locations_data as $location_data) {
                    if (empty($location_data['district'] ?? null)) {
                        if ($this->storyMatchesLocation($story, $location_data['city'])) {
                            $matches = true;
                            $story->update([
                                'location_id' => $location_data['id']
                            ]);
                            break;
                        }
                    }
                }
            }

            if (!$matches) {
                foreach ($locations_data as $location_data) {
                    if (empty($location_data['city'] ?? null)) {
                        if ($this->storyMatchesLocation($story, $location_data['country'])) {
                            $matches = true;
                            $story->update([
                                'location_id' => $location_data['id']
                            ]);
                            break;
                        }
                    }
                }
            }

            if (!$matches) {
                $story->update([
                    'location_id' => $project->location_id
                ]);
            }

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    private function storyMatchesLocation(Story $story, $location)
    {
        if (empty($location)) {
            return;
        }

        $title = strtolower($story->title);
        $description = strtolower($story->description);

        if (!empty($title)) {
            if (str_contains($title, ' ' . $location . ' ')) {
                return true;
            }
        }

        if (!empty($description)) {
            if (str_contains($description, ' ' . $location . ' ')) {
                return true;
            }
        }

        return false;
    }

    private function domainsSync($locations_data, $rebind, $project)
    {
        if ($rebind) {
            $domains = $project->domains;
        } else {
            $domains = $project->domains()->whereNull('location_id')->get();
        }

        $domains_count = $domains->count();

        $this->info('Domains without location: ' . $domains_count);

        if (empty($domains_count)) {
            return;
        }

        $this->output->progressStart($domains_count);

        foreach ($domains as $domain) {
            $matches = false;

            foreach ($locations_data as $location_data) {
                if ($this->domainMatchesLocation($domain, $location_data['district_raw'])) {
                    $matches = true;
                    $domain->update([
                        'location_id' => $location_data['id']
                    ]);
                    break;
                }
            }

            if (!$matches) {
                foreach ($locations_data as $location_data) {
                    if (empty($location_data['district_raw'] ?? null)) {
                        if ($this->domainMatchesLocation($domain, $location_data['city_raw'])) {
                            $matches = true;
                            $domain->update([
                                'location_id' => $location_data['id']
                            ]);
                            break;
                        }
                    }
                }
            }

            if (!$matches) {
                foreach ($locations_data as $location_data) {
                    if (empty($location_data['city_raw'] ?? null)) {
                        if ($this->domainMatchesLocation($domain, $location_data['country_raw'])) {
                            $matches = true;
                            $domain->update([
                                'location_id' => $location_data['id']
                            ]);
                            break;
                        }
                    }
                }
            }

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    private function domainMatchesLocation(Domain $domain, $location)
    {
        if (empty($location)) {
            return;
        }

        $d = $domain->domain;

        $d = explode('.', $d)[0];

        if (str_contains($d, '-')) {
            $ex = explode('-', $d);

            if (($ex[0] ?? '') == $location) {
                return true;
            }

            if (($ex[1] ?? '') == $location) {
                return true;
            }
        }

        if ($d == $location) {
            return true;
        }

        return false;
    }
}
