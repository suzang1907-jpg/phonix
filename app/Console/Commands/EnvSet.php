<?php

namespace App\Console\Commands;

use Dev\PHPActions\Action;
use App\Actions\Env\EnvSet as ActionEnvSet;
use Illuminate\Console\Command;

class EnvSet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'env:set {key} {value}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Changes a environment variable';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $key = $this->argument('key');
        $value = $this->argument('value');

        Action::build(ActionEnvSet::class)->data([
            'key' => $key,
            'value' => $value,
        ])->run();

        $this->info('Key: ' . $key . ' updated to: ' . $value, true);
        $this->info('Updated: ' . env($key), true);
    }
}
