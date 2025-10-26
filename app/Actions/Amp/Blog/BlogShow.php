<?php

namespace App\Actions\Amp\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Routing\Amp;
use App\Scopes\BlogWorkspaceScope;

class BlogShow extends Action
{
    public function handle()
    {
        $blog = Blog::withoutGlobalScope(BlogWorkspaceScope::class)->where('id', $this->getData('id'))->first();

        if (empty($blog)) {
            return Amp::redirect('amp.home.show');
        }

        return [
            'blog' => $blog,
        ];
    }
}
