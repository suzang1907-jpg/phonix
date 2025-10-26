<?php

namespace App\Console\Commands;

use Dev\PHPActions\Action;
use App\Actions\Sitemap\SitemapStore;
use App\Actions\Sitemap\SitemapSubmit as SitemapSitemapSubmit;
use App\Models\Project;
use App\Models\User;
use App\Services\ProjectService;
use Illuminate\Console\Command;

class SitemapSubmit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:submit {project_id} {user_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sitemap submit';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Submitting sitemaps');

        $project_id = $this->argument('project_id');
        $user_id = $this->argument('user_id');

        $project = Project::where('id', $project_id)->get()->first();

        if (empty($project)) {
            $this->error('Project not found');
            return;
        }

        $user = User::where('id', $user_id)->get()->first();

        if (empty($user)) {
            $this->error('User not found');
            return;
        }


        ProjectService::setProject($project);

        $domains = ProjectService::getProject()->domains()->doesntHave('sitemap')->get();

        foreach ($domains as $domain) {
            Action::build(SitemapStore::class)->data([
                'domain' => $domain,
                'user' => $user
            ])->run();
        }

        $domains = ProjectService::getProject()->domains();

        $domains_count = $domains->count();

        $domains = $domains->get();

        $this->info('Domains: ' . $domains_count);

        $this->output->progressStart($domains_count);

        foreach ($domains as $domain) {
            $sitemap = Action::build(SitemapSitemapSubmit::class)->data([
                'sitemap' => $domain->sitemap,
                'user' => $user
            ])->run()->getData('sitemap');

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->output->success('Done.');
    }
}
