<?php

namespace App\Actions\Admin\Workspace;

use App\Actions\Cloudflare\CloudflareSync;
use Dev\PHPActions\Action;

class WorkspaceCloudflareSync extends Action
{
    public function handle()
    {
        Action::build(CloudflareSync::class)->run();
        return redirect()->back();
    }
}
