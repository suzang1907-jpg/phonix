<?php

namespace App\Console\Commands;

use App\Actions\Domain\DomainStore;
use App\Constants\DomainType;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;
use App\Models\Domain;
use App\Models\Site;

class DomainDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'domain:delete {domain}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Domain delete';


    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        
        $domain = $this->argument('domain');

        $domain_m = Domain::where(['id' => $domain])->first();

if (!empty($domain_m)) {
$domain_m->delete();
}

$site = Site::where(['origin' => $domain])->first();
if (! empty($site)) {
$site->delete();
}

        $this->output->success('Done.');
    }
}
