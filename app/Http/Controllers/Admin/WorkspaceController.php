<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Workspace;

class WorkspaceController extends AdminController
{
    protected static $entity = Workspace::class;
}
