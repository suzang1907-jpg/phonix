<?php

namespace App\Actions\Log;

use Dev\PHPActions\Action;

class LogShow extends Action
{
    public function handle()
    {
        $log_file = file_get_contents(storage_path('logs/laravel.log'));

        if (!empty($log_file)) {
            $log_file = trim($log_file);
        }

        return [
            'log_file' => $log_file,
        ];
    }
}
