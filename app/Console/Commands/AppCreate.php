<?php

namespace App\Console\Commands;

use App\Actions\Domain\DomainStore;
use App\Actions\Project\ProjectStore;
use App\Constants\DomainType;
use App\Models\User;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;

class AppCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create {email} {password} {domain}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'App create';


    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $domain = $this->argument('domain');
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = User::create([
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $project = Action::build(ProjectStore::class)->data([
            'cloudflare_api_key' => config('cloudlfare.api_key'),
            'cloudflare_api_email' => config('cloudlfare.api_email')
        ])->run()->getData('project');

        if (empty($project)) {
            $this->error('Error while storing project.');
            return;
        }

        $domain = Action::build(DomainStore::class)->data([
            'project_id' => $project->id,
            'domain' => $domain,
            'type' => DomainType::$primary
        ])->run()->getData('domain');

        if (empty($domain)) {
            $this->error('Error while storing domain.');
            return;
        }

        $this->info('User email: ' . $email, true);
        $this->info('User password: ' . $password, true);
    }
}
