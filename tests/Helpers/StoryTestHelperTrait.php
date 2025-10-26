<?php

namespace Tests\Helpers;

use App\Models\Story;
use App\Models\User;
use App\Routing\Admin;

trait StoryTestHelperTrait
{
    public function storyCreate(User $user = null, array $data = []): Story
    {
        if (empty($user)) {
            $user = User::first();
        }

        if (empty($user)) {
            return null;
        }

        $story_data = array_merge([
            'title' => 'test',
            'description' => 'test',
            'image' => 'test'
        ], $data);

        $this->post(Admin::route('admin.story.store'), $story_data);

        $story = Story::latest()->first();

        return $story;
    }
}
