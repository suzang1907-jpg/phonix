<?php

namespace App\Actions\Admin\Workspace;

use App\Actions\Cache\CacheClear;
use Dev\PHPActions\Action;

class WorkspaceCacheClear extends Action
{
    public function handle()
    {
        Action::build(CacheClear::class)->run();

        return redirect()->back();
    }
}
