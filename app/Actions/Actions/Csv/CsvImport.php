<?php

namespace App\Actions\Csv;

use Dev\PHPActions\Action;

class CsvImport extends Action
{
    public function handle()
    {
        $csv = $this->getData('csv');

        if (empty($csv)) {
            return;
        }

        $csv = str_replace('data:text/csv;base64,', '', $csv);
        $csv = str_replace(' ', '+', $csv);

        $csv = base64_decode($csv);

        if (empty($csv)) {
            return;
        }

        $csv = str_getcsv($csv);

        return [
            'csv' => $csv,
        ];
    }
}
