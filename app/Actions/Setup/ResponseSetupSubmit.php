<?php

namespace App\Actions\Setup;

use Dev\PHPActions\Action;
use App\Routing\Admin;

class ResponseSetupSubmit extends Action
{
    public function handle()
    {
        return Admin::redirect('admin.dashboard.show');
    }
}
