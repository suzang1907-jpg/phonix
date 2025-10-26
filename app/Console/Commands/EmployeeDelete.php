<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class EmployeeDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:delete {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Employee Delete';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $id = $this->argument('id');

$employee = Employee::where('id', $id)->first();

if (empty($employee)) {
$this->output->error('Employee not found');
return;
}

$employee->delete();

        $this->output->success('Done');
    }
}
