<?php

namespace App\Actions\Auth;

use Dev\PHPActions\Action;
use App\Routing\Admin;

class ResponseAuthLoginPost extends Action
{
    public function handle()
    {
        if (auth()->check()) {
            return Admin::redirect('admin.dashboard.show');
        }

        return redirect()->back();
    }
}
