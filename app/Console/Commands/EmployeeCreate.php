<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class EmployeeCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:create {id} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Employee Create';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $id = $this->argument('id');
$password = $this->argument('password');
if (empty($password)) {
$this->output->error('Password required');
return;
}
$employee = Employee::create(['id' => $id, 'password' => bcrypt($password), 'is_active' => true]);

        $this->output->success('Done');
    }
}
