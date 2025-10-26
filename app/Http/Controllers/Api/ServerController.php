<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AmpController;
use App\Services\Server;

class ServerController extends AmpController
{
    protected static $entity = Server::class;
}
