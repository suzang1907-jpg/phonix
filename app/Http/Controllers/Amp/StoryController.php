<?php

namespace App\Http\Controllers\Amp;

use App\Http\Controllers\AmpController;
use App\Models\Story;

class StoryController extends AmpController
{
    protected static $entity = Story::class;

    public function getAttachedData(): array
    {
        return [
            'stories' => Story::whereCity()->list(),
            'blogs' => null,
        ];
    }
}
