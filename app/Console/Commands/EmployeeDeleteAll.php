<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class EmployeeDeleteAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:delete-all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Employee Delete All';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        
$employee = Employee::truncate();

        $this->output->success('Done');
    }
}
