<?php

namespace App\Console\Commands;

use App\Actions\Admin\Project\ProjectUpdate;
use App\Actions\Blog\BlogStore;
use App\Actions\Domain\DomainStore;
use App\Actions\Project\ProjectStore;
use App\Actions\Site\SiteStore;
use App\Constants\DomainType;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Dev\LaravelAssets\Actions\Image\ImageStore;
use Dev\PHPActions\Action;

class DevSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dev Setup';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        if (App::isProduction()) {
            $this->error('App is Production!');
            return;
        }

        if (!empty(User::count())) {
            if (!$this->output->confirm('User table not empty, proceed?', false)) {
                return;
            }

            $user = User::first();
        } else {
            $user = User::create([
                'email' => config('dev.user_mail'),
                'password' => bcrypt('12345678'),
            ]);
        }

        $project = Action::build(ProjectStore::class)->data([
            'cloudflare_api_key' => config('cloudlfare.api_key'),
            'cloudflare_api_email' => config('cloudlfare.api_email')
        ])->run()->getData('project');

        if (empty($project)) {
            $this->error('Error while storing project.');
            return;
        }

        auth()->login($user);

        $domain = Action::build(DomainStore::class)->data([
            'project_id' => $project->id,
            'domain' => config('app.domain'),
            'type' => DomainType::$primary
        ])->run()->getData('domain');

        if (empty($domain)) {
            $this->error('Error while storing domain.');
            return;
        }

        $this->info('Domain: ' . $domain->domain);
        $this->info('Origin: ' . $domain->site->origin);

        if (! empty(config('dev.sub_domain'))) {
            $subdomain = Action::build(DomainStore::class)->data([
                'project_id' => $project->id,
                'domain' => config('dev.sub_domain'),
                'type' => DomainType::$primary
            ])->run()->getData('domain');

            if (empty($subdomain)) {
                $this->error('Error while storing subdomain.');
                return;
            }
        }

        $logo = base64_encode(file_get_contents(public_path('logo.jpg')));

        $logo = Action::build(ImageStore::class)->data([
            'file' => $logo,
            'disk' => 'public',
        ])->options([
            'base64' => true
        ])->run()->getData('image');

        $project->update([
            'logo_id' => $logo->id
        ]);

        $this->info('Create Blogposts');

        for ($i = 0; $i < 20; $i++) {
            $blog = Action::build(BlogStore::class)->data([
                'title' => 'Test Blog Title ' .  $i,
                'description' => 'Test Blog Description',
                'project' => $project
            ])->run()->getData('blog');

            if (empty($blog)) {
                $this->error('Blog Not Created!');
                return;
            }
        }

        Artisan::call('location:seed  turkey', [], $this->output);

        $this->output->success('Done');
    }
}
