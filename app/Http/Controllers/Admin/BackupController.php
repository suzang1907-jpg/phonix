<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Pages\Backup;

class BackupController extends AdminController
{
    protected static $entity = Backup::class;
}
