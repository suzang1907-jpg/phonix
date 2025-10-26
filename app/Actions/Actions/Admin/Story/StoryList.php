<?php

namespace App\Actions\Admin\Story;

use Dev\PHPActions\Action;
use App\Models\Story;

class StoryList extends Action
{
    public function handle()
    {
        return [
            'stories' => Story::latest()->list(),
        ];
    }
}
