<?php

namespace Tests\Helpers;

use App\Models\Tag;
use App\Models\User;
use App\Routing\Admin;

trait TagTestHelperTrait
{
    public function tagCreate(User $user = null, array $data = []): Tag
    {
        if (empty($user)) {
            $user = User::first();
        }

        if (empty($user)) {
            return null;
        }

        $tag_data = array_merge([
            'tag' => 'test',
        ], $data);

        $this->post(Admin::route('admin.tag.store'), $tag_data);

        $tag = Tag::latest()->first();

        return $tag;
    }
}
