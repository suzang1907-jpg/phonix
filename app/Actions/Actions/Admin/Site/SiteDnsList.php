<?php

namespace App\Actions\Admin\Site;

use App\Actions\DnsRecord\DnsRecordSync;
use Dev\PHPActions\Action;
use App\Models\Site;
use App\Routing\Admin;
use App\Services\PaginateRelation;

class SiteDnsList extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $site = Site::where('id', $id)->get()->first();

        if (empty($site->cloudflare_integration_id)) {
            return Admin::redirect('admin.dashboard.show');
        }

        Action::build(DnsRecordSync::class)->data([
            'type' => 'A',
            'site' => $site
        ])->run();

        $site->refresh();

        return [
            'dns_records' => PaginateRelation::paginate($site->dnsRecords()),
            'site' => $site,
        ];
    }
}
