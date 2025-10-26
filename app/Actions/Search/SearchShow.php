<?php

namespace App\Actions\Search;

use Dev\PHPActions\Action;
use App\Models\Blog;

class SearchShow extends Action
{
    public function handle()
    {
        $search = $this->getData('search');

        return [
            'search' => $search,
            'blogs' => Blog::search($search)->whereLocation()->latest()->list(),
        ];
    }
}
