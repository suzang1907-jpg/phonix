<?php

namespace App\Console\Commands;

use App\Actions\Domain\DomainGetReferalDomains;
use App\Models\Domain;
use App\Scopes\DomainProjectScope;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;

class DomainBindReferalDomains extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'domain:bind-referal-domains {rebind}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Domain Bind Referal Domains';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Binding Domain referals...');

        $rebind = false;

        $rebind = $this->argument('rebind') == 'rebind';
        $this->info('Rebind: ' . ($rebind ? 'Yes' : 'No'));

        $domains = Domain::withoutGlobalScope(DomainProjectScope::class);

        if (!$rebind) {
            $domains->whereNull('referal_domains');
        }

        $domains = $domains->get();

        $this->output->progressStart($domains->count());

        foreach ($domains as $domain) {
            $domain->update([
                'referal_domains' => Action::build(DomainGetReferalDomains::class)->data(['domain_id' => $domain->id])->run()->getData('domains')?->map(function ($d) {
                    return [
                        'domain' => $d->domain,
                        'id' => $d->id,
                    ];
                })
            ]);

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->output->success('Done');
    }
}
