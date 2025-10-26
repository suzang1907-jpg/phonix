<?php

namespace App\Actions\Admin\Keyword;

use App\Actions\Keyword\KeywordStore;
use App\Actions\Csv\CsvImport;
use App\Routing\Admin;
use App\Routing\Api;
use Dev\PHPActions\Action;

class KeywordImport extends Action
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

        $keywordData = [];

        foreach ($csv as $key => $value) {
            if ($key < $key_count) {
                array_push($ids, $value);
            } else {
                $current_id++;

                if ($ids[$current_id] == 'keyword') {
                    $keywordData['keyword'] = $value;
                }

                if ($current_id >= $key_count - 1) {
                    $keyword = Action::build(KeywordStore::class)->data($keywordData)->run()->getData('keyword');

                    $current_id = 0;
                    $keywordData = [];
                }
            }
        }

        return Api::done([], Admin::route('admin.keyword.list'));
    }
}
