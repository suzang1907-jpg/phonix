<?php

namespace App\Actions\Web\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Routing\Amp;
use App\Routing\Web;

class BlogRandomShow extends Action
{
    public function handle()
    {
        $blog = Blog::whereLocation()->random()->limit(1)->with('blogContent')->get()->first();

        if (empty($blog)) {
            return Web::redirect('web.home.show');
        }

        return [
            'blog' => $blog,
            'canonical' => Web::route('web.blog.show', ['id' => $blog->id]),
            'amp_html' => Amp::route('amp.blog.show', ['id' => $blog->id])
        ];
    }
}
