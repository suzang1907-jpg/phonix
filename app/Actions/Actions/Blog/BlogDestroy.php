<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;

class BlogDestroy extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return false;
        }

        Blog::where('id', $id)->first()?->delete();

        return true;
    }
}
