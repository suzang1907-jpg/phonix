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

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $d = Carbon::now()->subHour();
        $l = Light::whereDate('created_at', '<=', $d)->where('type', 'css')->get();
        $this->info('Light Css: ' . count($l));
        foreach ($l as $light) {
            $light->delete();
        }

        $l = Light::whereDate('created_at', '<=', $d)->where('type', 'xml')->get();
        $this->info('Light XML: ' . count($l));
        foreach ($l as $light) {
            $light->delete();
        }

        $l = Light::whereDate('created_at', '<=', $d)->get();
        $this->info('Light All: ' . count($l));
        foreach ($l as $light) {
            $light->delete();
        }
        $this->output->success('Done');
    }
}
