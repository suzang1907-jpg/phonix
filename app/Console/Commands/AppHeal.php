<?php

namespace App\Console\Commands;

use App\Actions\Cache\CacheClear;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Dev\PHPActions\Action;

class AppHeal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:heal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'App Heal';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Truncate Cache');

        Action::build(CacheClear::class)->run();

        $this->info('Truncate Sessions');
        DB::table('sessions')->truncate();

        $this->output->success('Done');
    }
}
