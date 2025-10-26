<?php

namespace App\Services;

use App\Models\Workspace;

class WorkspaceService
{
    private static Workspace | null $current = null;

    public static function getWorkspace(): Workspace | null
    {
        return self::$current;
    }

    public static function setWorkspace(Workspace | null $workspace)
    {
        self::$current = $workspace;
    }
}
