<?php

namespace App\Actions\Admin\Domain;

use App\Actions\Csv\CsvImport;
use App\Actions\Domain\DomainStore;
use App\Models\Domain;
use App\Routing\Admin;
use App\Routing\Api;
use Dev\PHPActions\Action;

class DomainImport extends Action
{
    public function handle()
    {
        $csv = Action::build(CsvImport::class)->data([
            'csv' => $this->getData('backup')
        ])->run()->getData('csv');

        if (empty($csv)) {
            return Api::error();
        }

        $ids = [];

        $key_count = $this->getData('key_count', 0);

        $current_id = 0;

        if (empty($key_count)) {
            return Api::error();
        }

        $domainData = [];

        foreach ($csv as $key => $value) {
            if ($key < $key_count) {
                array_push($ids, $value);
            } else {
                $current_id++;

                if ($ids[$current_id] == 'domain') {
                    $domainData['domain'] = $value;
                } elseif ($ids[$current_id] == 'cloudflare_zone_identifier') {
                    $domainData['cloudflare_zone_identifier'] = $value;
                }

                if ($current_id >= $key_count - 1) {
                    $this->domanStore($domainData);

                    $current_id = 0;
                    $domainData = [];
                }
            }
        }

        return Api::done([], Admin::route('admin.domain.list'));
    }

    private function domanStore($data = []): Domain | null
    {
        $domain = Action::build(DomainStore::class)->data($data)->run()->getData('domain');

        return $domain;
    }
}
