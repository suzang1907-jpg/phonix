<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class LightReset extends Command
{
    protected $signature = 'light:reset';
    protected $description = 'Clear light Cache';

    /**
     * Pure PHP recursive deletion
     */
    private function deleteDir($dirPath) {
        if (!is_dir($dirPath)) {
            return;
        }
        $files = array_diff(scandir($dirPath), array('.', '..'));
        foreach ($files as $file) {
            $path = $dirPath . DIRECTORY_SEPARATOR . $file;
            (is_dir($path)) ? $this->deleteDir($path) : unlink($path);
        }
        return rmdir($dirPath);
    }

    public function handle(): void
    {
        // Start from yesterday
        $date = Carbon::yesterday();

        // Loop for 7 days
        for ($i = 0; $i < 7; $i++) {
            $dateString = $date->format('Y-m-d');
            $basePath = storage_path("app/private/light/{$dateString}");

            if (is_dir($basePath)) {
                $this->info("Processing: {$dateString}");

                // 1. Explicitly clean specific subfolders first
                $subFolders = ['css', 'xml', 'text-html'];
                foreach ($subFolders as $sub) {
                    $fullSubPath = $basePath . DIRECTORY_SEPARATOR . $sub;
                    if (is_dir($fullSubPath)) {
                        $this->deleteDir($fullSubPath);
                        $this->line(" - Cleaned subfolder: {$sub}");
                    }
                }

                // 2. Finally, delete the parent date folder (and any stray files)
                $this->deleteDir($basePath);
                $this->line(" - Removed parent folder: {$dateString}");
            }

            $date->subDay();
        }

        $this->output->success('Cleanup Done');
    }
}