<?php

namespace App\Actions\Story;

use Dev\PHPActions\Action;
use App\Models\Story;
use App\Routing\Web;

class StoryShow extends Action
{
    public function handle()
    {
        $story = Story::where('id', $this->getData('id'))->first();

        if (empty($story)) {
            $story = Story::whereLocation()->random()->limit(1)->get()->first();
        }

        if (empty($story)) {
            return Web::redirect('web.home.show');
        }

        return [
            'story' => $story,
            'stories' => Story::whereLocation()->list()
        ];
    }
}
