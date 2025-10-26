<?php

namespace App\Actions\Amp\Story;

use Dev\PHPActions\Action;
use App\Models\Story;
use App\Routing\Amp;

class StoryShow extends Action
{
    public function handle()
    {
        $story = Story::where('id', $this->getData('id'))->first();

        if (empty($story)) {
            return Amp::redirect('amp.home.show');
        }

        return [
            'stories' => Story::whereLocation()->list()
        ];
    }
}