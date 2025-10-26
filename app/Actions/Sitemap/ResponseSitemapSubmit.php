<?php

namespace App\Actions\Sitemap;

use Dev\PHPActions\Action;

class ResponseSitemapSubmit extends Action
{
    public function handle()
    {
        return redirect()->back();
    }
}
