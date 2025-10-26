<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Routing\Web;

class BlogListReader extends Action
{
    public function handle()
    {
        $u = request()->url();

        $u = str_replace('/reader', '', $u);

        return redirect()->secure($u, 301);
    }
}
