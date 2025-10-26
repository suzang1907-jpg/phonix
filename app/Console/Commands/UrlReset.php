<?php

namespace App\Console\Commands;

use App\Models\Url;
use Illuminate\Console\Command;

class UrlReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'url:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear light Cache';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Url::truncate();
        $this->output->success('Done');
    }
}
