<?php

namespace Tests\Helpers;

use App\Models\Keyword;
use App\Models\User;
use App\Routing\Admin;

trait KeywordTestHelperTrait
{
    public function keywordCreate(User $user = null, array $data = []): Keyword
    {
        if (empty($user)) {
            $user = User::first();
        }

        if (empty($user)) {
            return null;
        }

        $this->post(Admin::route('admin.keyword.store'), array_merge([
            'keyword' => 'test',
        ], $data));

        $keyword = Keyword::latest()->first();

        return $keyword;
    }
}
