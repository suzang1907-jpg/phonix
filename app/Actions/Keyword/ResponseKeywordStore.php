<?php

namespace App\Actions\Keyword;

use Dev\PHPActions\Action;
use App\Routing\Admin;

class ResponseKeywordStore extends Action
{
    public function handle()
    {
        return Admin::redirect('admin.keyword.list');
    }
}
