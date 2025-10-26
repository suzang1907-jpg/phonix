<?php

namespace App\Actions\Admin\Url;

use Dev\PHPActions\Action;
use App\Models\Url;

class UrlList extends Action
{
    public function handle()
    {
        return [
            'title' => 'Urls',
            'urls' => Url::latest()->list(),
        ];
    }
}
