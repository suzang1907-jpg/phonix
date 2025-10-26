<?php

namespace Tests\Helpers;

use App\Models\Article;
use App\Models\User;
use App\Routing\Admin;

trait ArticleTestHelperTrait
{
    public function articleCreate(User $user = null, array $data = []): Article
    {
        if (empty($user)) {
            $user = User::first();
        }

        if (empty($user)) {
            return null;
        }

        $response = $this->post(Admin::route('admin.article.store'), array_merge([
            'title' => 'Article Title',
            'description' => 'Article Description',
            'main_image' => 'test'
        ], $data));

        $article = Article::where('id', $response->json('data')['article_id'])->first();

        return $article;
    }
}
