<?php

namespace App\Actions\Home;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Routing\Web;
use App\Services\LocationService;

class HomeShow extends Action
{
    public function handle()
    {
        if (!empty(LocationService::getLocation())) {
            return [
                'canonical' => Web::route('web.home.show'),
                'blogs' => Blog::whereLocation()->list(),
            ];
        }

        return [
            'canonical' => Web::route('web.home.show'),
            'blogs' => Blog::list(),
        ];
    }
}
