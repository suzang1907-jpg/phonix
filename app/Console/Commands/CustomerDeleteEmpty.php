<?php

namespace App\Console\Commands;

use App\Actions\Cache\CacheClear;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Dev\PHPActions\Action;
use App\Models\Customer;

class CustomerDeleteEmpty extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:delete-empty';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Customer Delete Empty';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $customers = Customer::doesntHave('articles')->get();

foreach ($customers as $customer) {
if (! empty($customer->articles()->count())) {
continue;
}
else {
$customer->delete();
}
}

        $this->output->success('Done');
    }
}
