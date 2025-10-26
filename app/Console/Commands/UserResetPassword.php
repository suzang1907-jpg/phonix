<?php

namespace App\Console\Commands;

use App\Models\Light;
use App\Models\User;
use Illuminate\Console\Command;

class UserResetPassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:reset-password {user} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Reset Password';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $user = $this->argument('user');
        $password = $this->argument('password');

        if (empty($user) || empty($password)) {
            $this->output->error('Something went wrong.');
            return;
        }

        $foundUser = User::where('email', $user)->first();

        if (empty($foundUser)) {
            $foundUser = User::where('id', $user)->first();
        }

        if (empty($foundUser)) {
            $this->output->error('User not found.');
            return;
        }

        $foundUser->update([
            'password' => bcrypt($password)
        ]);

        $this->info('User updated.');

        $this->output->success('Done');
    }
}
