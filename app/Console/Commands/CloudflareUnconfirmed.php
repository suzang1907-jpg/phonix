<?php

namespace App\Console\Commands;

use App\Actions\DnsRecord\DnsRecordDelete;
use App\Actions\DnsRecord\DnsRecordStore;
use App\Models\DnsRecord;
use App\Models\Domain;
use Carbon\Carbon;
use Dev\PHPActions\Action;
use Illuminate\Console\Command;

class CloudflareUnconfirmed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cloudflare:unconfirmed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cloudflare Unconfirmed';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $unconfirmed_domains = Domain::query()->whereNull('dns_record_confirmed_at')->get();

        $this->info('Unconfirmed Domains: ' . $unconfirmed_domains->count());
    }
}
