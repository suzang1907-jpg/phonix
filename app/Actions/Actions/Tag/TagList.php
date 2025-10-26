<?php

namespace App\Actions\Tag;

use Dev\PHPActions\Action;
use App\Models\Tag;

class TagList extends Action
{
    public function handle()
    {
        return [
            'tags' => Tag::latest()->list()
        ];
    }
}
