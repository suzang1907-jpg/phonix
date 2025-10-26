<?php

namespace App\Console\Commands;

use App\Actions\Domain\DomainStore;
use App\Constants\DomainType;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;

class DomainCreateArticle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'domain:create-article {project_id} {domain}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Domain create article';


    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $project_id = $this->argument('project_id');
        $domain = $this->argument('domain');

        $domain = Action::build(DomainStore::class)->data([
            'project_id' => $project_id,
            'domain' => $domain,
            'type' => DomainType::$offer_list
        ])->run()->getData('domain');

        if (empty($domain)) {
            $this->error('Error while storing domain.');
            return;
        }

        $this->output->success('Done.');
    }
}
