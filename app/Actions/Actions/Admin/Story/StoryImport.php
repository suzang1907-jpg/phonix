<?php

namespace App\Actions\Admin\Story;

use App\Actions\Csv\CsvImport;
use App\Actions\Story\StoryStore;
use App\Routing\Admin;
use App\Routing\Api;
use Dev\PHPActions\Action;

class StoryImport extends Action
{
    public function handle()
    {
        $csv = Action::build(CsvImport::class)->data([
            'csv' => $this->getData('backup')
        ])->run()->getData('csv');

        if (empty($csv)) {
            return Api::error();
        }

        $ids = [];

        $key_count = $this->getData('key_count', 0);

        $current_id = 0;

        if (empty($key_count)) {
            return Api::error();
        }

        $logo_base64 = base64_encode(file_get_contents(public_path('logo.jpg')));

        $storyData = [
            'image' => $logo_base64
        ];

        foreach ($csv as $key => $value) {
            if ($key < $key_count) {
                array_push($ids, $value);
            } else {
                $current_id++;

                if ($ids[$current_id] == 'title') {
                    $storyData['title'] = $value;
                } elseif ($ids[$current_id] == 'description') {
                    $storyData['description'] = $value;
                }

                if ($current_id >= $key_count - 1) {
                    $story = Action::build(StoryStore::class)->data($storyData)->run()->getData('story');

                    $current_id = 0;
                    $storyData = [
                        'image' => $logo_base64
                    ];
                }
            }
        }

        return Api::done([], Admin::route('admin.story.list'));
    }
}
