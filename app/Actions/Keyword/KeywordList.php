<?php

namespace App\Actions\Keyword;

use Dev\PHPActions\Action;
use App\Models\Keyword;
use App\Routing\Web;

class KeywordList extends Action
{
    public function handle()
    {
        return [
            'canonical' => Web::route('web.keyword.list'),
            'keywords' => Keyword::latest()->list(),
        ];
    }
}
