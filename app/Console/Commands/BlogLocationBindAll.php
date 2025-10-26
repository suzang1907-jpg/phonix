<?php

namespace App\Console\Commands;

use App\Actions\Blog\BlogContainsWord;
use App\Actions\Blog\BlogStartsWithWord;
use App\Models\Blog;
use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\Location;
use App\Models\Project;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;

class BlogLocationBindAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:location-bind-all {rebind}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Blog All Location Bind';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Binding Blog locations...');

        $rebind = false;

        $rebind = $this->argument('rebind') == 'rebind';
        $this->info('Rebind: ' . ($rebind ? 'Yes' : 'No'));

        $projects = Project::get();

        foreach ($projects as $project) {
            $this->info('Syncing for Project: ' . $project->id);
            $this->syncLocation($project, $rebind);
        }

        $this->output->success('Done');
    }

    private function syncLocation($project, $rebind)
    {
        $country_id = $project?->location?->country_id;

        if (empty($country_id)) {
            $this->output->error('Country is empty');
            return;
        }

        $country = Country::where('id', $country_id)->get()->first();

        $this->info('Country: ' . $country->country);

        $bind_last_city = config('location_' . $country->id . '_meta.bind_last.city');
        $bind_last_district = config('location_' . $country->id . '_meta.bind_last.district');

        $bind_last_cities = [];

        if (!empty($bind_last_city)) {
            $bind_last_cities = City::query();

            foreach ($bind_last_city as $v) {
                $bind_last_cities->orWhere('city', $v);
            }

            $bind_last_cities = $bind_last_cities->get();
        }

        $bind_last_districts = [];

        if (!empty($bind_last_district)) {
            $bind_last_districts = District::query();

            foreach ($bind_last_district as $v) {
                $bind_last_districts->orWhere('district', $v);
            }

            $bind_last_districts = $bind_last_districts->get();
        }

        $locations = Location::where('country_id', $country_id)->with(['country', 'city', 'district']);

        if (!empty($bind_last_cities)) {
            $locations->where(function ($query) use ($bind_last_cities) {
                foreach ($bind_last_cities as $v) {
                    $query->where('city_id', '!=', $v->id);
                }
            });
        }

        if (!empty($bind_last_districts)) {
            $locations->where(function ($query) use ($bind_last_districts) {
                foreach ($bind_last_districts as $v) {
                    $query->where('district_id', '!=', $v->id);
                }

                $query->orWhereNull('district_id');
            });
        }

        $locations = $locations->get();

        $locations_bind_last = Location::where('country_id', $country_id)->with(['country', 'city', 'district']);

        if (!empty($bind_last_cities)) {
            $locations_bind_last = $locations_bind_last->where(function ($query) use ($bind_last_cities) {
                foreach ($bind_last_cities as $v) {
                    $query->orWhere(function ($q) use ($v) {
                        $this->info('Bind Last City: ' . $v->id);
                        $q->where('city_id', $v->id)->whereNull('district_id');
                    });
                }
            });
        }

        if (!empty($bind_last_districts)) {
            $locations_bind_last = $locations_bind_last->where(function ($query) use ($bind_last_districts) {
                foreach ($bind_last_districts as $v) {
                    $this->info('Bind Last District: ' . $v->id);
                    $query->orWhere('district_id', $v->id);
                }
            });
        }

        $locations_bind_last = $locations_bind_last->get();

        $locations_data = $this->convertLocationsToData($locations);
        $locations_data_bind_last = $this->convertLocationsToData($locations_bind_last);

        $this->syncBlogs($locations_data, $locations_data_bind_last, $project, $rebind);
    }

    private function syncBlogs($locations_data, $locations_data_bind_last, $project, $rebind)
    {
        if ($rebind) {
            $blogs = Blog::where('project_id', $project->id)->with('blogContent')->get();
        } else {
            $blogs = Blog::where('project_id', $project->id)->whereNull('location_id')->with('blogContent')->get();
        }

        $blogs_count = $blogs->count();

        $this->info('Blogs to sync: ' . $blogs_count);

        if (empty($blogs_count)) {
            return;
        }

        $this->output->progressStart($blogs_count);

        foreach ($blogs as $blog) {
            if (!$this->blogsMatchesLocation($blog, $locations_data)) {
                if (!$this->blogsMatchesLocation($blog, $locations_data_bind_last)) {
                    if ($blog->location_id != $project->location_id) {
                        $blog->update([
                            'location_id' => $project->location_id
                        ]);
                    }
                }
            }

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    private function blogsMatchesLocation($blog, $locations_data)
    {
        foreach ($locations_data as $location_data) {
            if ($this->blogStartsWithWord($blog, $location_data['district'])) {
                if ($blog->location_id != $location_data['id']) {
                    $blog->update([
                        'location_id' => $location_data['id']
                    ]);
                }
                return true;
            }
        }

        foreach ($locations_data as $location_data) {
            if ($this->blogContainsWord($blog, $location_data['district'])) {
                if ($blog->location_id != $location_data['id']) {
                    $blog->update([
                        'location_id' => $location_data['id']
                    ]);
                }
                return true;
            }
        }


        foreach ($locations_data as $location_data) {
            if (empty($location_data['district'] ?? null)) {
                if ($this->blogStartsWithWord($blog, $location_data['city'])) {
                    if ($blog->location_id != $location_data['id']) {
                        $blog->update([
                            'location_id' => $location_data['id']
                        ]);
                    }
                    return true;
                }
            }
        }

        foreach ($locations_data as $location_data) {
            if (empty($location_data['district'] ?? null)) {
                if ($this->blogContainsWord($blog, $location_data['city'])) {
                    if ($blog->location_id != $location_data['id']) {
                        $blog->update([
                            'location_id' => $location_data['id']
                        ]);
                    }
                    return true;
                }
            }
        }


        foreach ($locations_data as $location_data) {
            if (empty($location_data['city'] ?? null)) {
                if ($this->blogStartsWithWord($blog, $location_data['country'])) {
                    if ($blog->location_id != $location_data['id']) {
                        $blog->update([
                            'location_id' => $location_data['id']
                        ]);
                    }
                    return true;
                }
            }
        }


        foreach ($locations_data as $location_data) {
            if (empty($location_data['city'] ?? null)) {
                if ($this->blogContainsWord($blog, $location_data['country'])) {
                    if ($blog->location_id != $location_data['id']) {
                        $blog->update([
                            'location_id' => $location_data['id']
                        ]);
                    }
                    return true;
                }
            }
        }
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

    private function blogStartsWithWord($blog, $word)
    {
        return Action::build(BlogStartsWithWord::class)->data([
            'blog' => $blog,
            'word' => $word
        ])->run()->getData('match');
    }

    private function blogContainsWord($blog, $word)
    {
        return Action::build(BlogContainsWord::class)->data([
            'blog' => $blog,
            'word' => $word
        ])->run()->getData('match');
    }
}
