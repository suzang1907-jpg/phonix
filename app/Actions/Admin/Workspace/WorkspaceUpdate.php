<?php

namespace App\Actions\Admin\Workspace;

use App\Actions\Cache\CacheClear;
use App\Routing\Api;
use Dev\PHPActions\Action;
use App\Services\WorkspaceService;

class WorkspaceUpdate extends Action
{
    public function handle()
    {
        $meta = $this->getData('meta');
        $dmca_script = $this->getData('dmca_script');

        $workspace = WorkspaceService::getWorkspace();

        $workspace_meta = [
            'dynamic_keywords' => $meta['dynamic_keywords'] ?? false
        ];

        $workspace->update([
            'meta' => $workspace_meta,
            'dmca_script' => $dmca_script
        ]);

        Action::build(CacheClear::class)->run();

        return Api::done([
            'workspace' => $workspace->vue()
        ]);
    }
}
