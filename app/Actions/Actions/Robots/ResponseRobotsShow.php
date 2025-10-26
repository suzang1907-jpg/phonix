<?php

namespace App\Actions\Robots;

use Dev\PHPActions\Action;
use App\Routing\File;

class ResponseRobotsShow extends Action
{
    public function handle()
    {
        $data = [
            'sitemaps' => [
                File::route('file.sitemap.show'),
            ],
        ];

        return response(view('robots')->with($data), 200, [
            'Content-Type' => 'text/plain'
        ]);
    }
}
