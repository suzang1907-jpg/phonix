<?php

namespace App\Actions\Story;

use Dev\PHPActions\Action;
use App\Models\Story;
use App\Routing\Web;

class StoryList extends Action
{
    public function handle()
    {
        return [
            'canonical' => Web::route('web.story.list'),
            'stories' => Story::whereLocation()->latest()->list(),
        ];
    }
}
