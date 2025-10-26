<?php

namespace Tests\Helpers;

use App\Models\Blog;
use App\Models\User;
use App\Routing\Admin;

trait BlogTestHelperTrait
{
    public function blogCreate(User $user = null, array $data = []): Blog
    {
        if (empty($user)) {
            $user = User::first();
        }

        if (empty($user)) {
            return null;
        }

        $blog_data = array_merge([
            'title' => 'test',
            'description' => 'test',
            'image' => 'test'
        ], $data);

        $this->post(Admin::route('admin.blog.store'), $blog_data);

        $blog = Blog::latest()->first();

        return $blog;
    }
}
