<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Project;

class ProjectController extends AdminController
{
    protected static $entity = Project::class;
}
