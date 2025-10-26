<?php

namespace App\Services;

use App\Models\Project;

class ProjectService
{
    private static Project | null $current = null;

    public static function getProject(): Project | null
    {
        return self::$current;
    }

    public static function setProject(Project | null $project)
    {
        self::$current = $project;

        if (empty(self::$current)) {
            WorkspaceService::setWorkspace(null);
        } else {
            WorkspaceService::setWorkspace(self::$current->workspace);
        }
    }
}
