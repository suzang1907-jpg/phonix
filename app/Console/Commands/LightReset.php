<?php

namespace App\Console\Commands;

use App\Models\Light;
use Illuminate\Console\Command;
use Carbon\Carbon;

class LightReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'light:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear light Cache';

    function deleteDir($dirPath) {
    if (!is_dir($dirPath)) {
        return;
    }
    $files = array_diff(scandir($dirPath), array('.', '..'));
    foreach ($files as $file) {
        (is_dir("$dirPath/$file")) ? deleteDir("$dirPath/$file") : unlink("$dirPath/$file");
    }
    return rmdir($dirPath);
}

    /**
     * Execute the console command.
     */
    public function handle(): void
    {

    $date = new DateTime();
$date->modify('-2 day');

    for ($i = 0; $i < 7; $i++) {
    $dateString = $date->format('Y-m-d');
    
    // Define your base path (adjust storage_path to your actual absolute path)
    $base_path = "/var/www/html/storage/app/private/light/" . $dateString;
    
    $sub_folders = ['css', 'xml', 'text-html'];

    foreach ($sub_folders as $folder) {
        $full_path = $base_path . '/' . $folder;
        $this->info('Deleting: ' . $full_path);
        if (file_exists($full_path)) {
            deleteDir($full_path);
        }
    }

    // Move to the previous day for the next iteration
    $date->modify('-1 day');
}
        $this->output->success('Done');
    }
}
