<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Routing\Web;

class BlogShow extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $blog = null;

        if (!empty($id)) {
            $blog = Blog::where('id', $id)->limit(1)->with('blogContent')->first();
        }

        if (empty($blog)) {
            $blog = Blog::whereLocation()->random()->limit(1)->with('blogContent')->get()->first();
        }

        if (empty($blog)) {
            return Web::redirect('web.home.show');
        }

        return [
            'blog' => $blog,
            'canonical' => Web::route('web.blog.show', ['id' => $blog->id]),
        ];
    }
}
