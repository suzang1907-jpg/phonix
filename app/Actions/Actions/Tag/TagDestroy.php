<?php

namespace App\Actions\Tag;

use Dev\PHPActions\Action;
use App\Models\Tag;

class TagDestroy extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return false;
        }

        $tagModel = Tag::where('id', $id)->first();

        if (empty($tagModel)) {
            return true;
        }

        $tagModel->delete();

        return true;
    }
}
