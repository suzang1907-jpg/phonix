<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebController;
use App\Models\Story;
class StoryController extends WebController
{
    protected static $entity = Story::class;

    public function getAttachedData(): array
    {
        return [
            'stories' => Story::list(),
            'blogs' => null,
        ];
    }
}
