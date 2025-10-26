<?php

namespace App\Actions\Story;

use Dev\PHPActions\Action;
use App\Models\Story;

class StoryDestroy extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return false;
        }

        Story::where('id', $id)->first()?->delete();

        return true;
    }
}
