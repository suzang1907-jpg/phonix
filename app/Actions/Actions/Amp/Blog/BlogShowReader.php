<?php

namespace App\Actions\Amp\Blog;

use Dev\PHPActions\Action;

class BlogShowReader extends Action
{
    public function handle()
    {
        $u = request()->url();

        $u = str_replace('/reader', '', $u);

        return redirect()->secure($u, 301);
    }
}
