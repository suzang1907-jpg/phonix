<?php

namespace App\Actions\Cache;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Dev\PHPActions\Action;

class CacheClear extends Action {
    public function handle()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('cache')->truncate();
        DB::table('cache_locks')->truncate();
        Cache::flush();
    }
}