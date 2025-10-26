<?php

namespace App\Actions\Location;

use Dev\PHPActions\Action;
use App\Models\Blog;

class LocationShow extends Action
{
    public function handle()
    {
        return [
            'blogs' => Blog::whereLocation()->list(),
        ];
    }
}
