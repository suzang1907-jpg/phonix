<?php

namespace App\Actions\Tag;

use Dev\PHPActions\Action;
use App\Models\Tag;

class TagEdit extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return false;
        }

        $tag = Tag::where('id', $id)->first();

        if (empty($tag)) {
            return;
        }

        return [
            'tag' => $tag
        ];
    }
}
