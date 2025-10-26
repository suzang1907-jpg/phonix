<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Domain;

class DomainController extends AdminController
{
    protected static $entity = Domain::class;
}
