<?php

namespace App\Actions\Search;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Domain;
use App\Routing\Api;
use Dev\LaravelVue\Actions\Vue\VueObject;

class ResponseSearchAdminDashboard extends Action
{
    public function handle()
    {
        $search = $this->getData('search');

        if (empty($search)) {
            return Api::done([
                'items' => null,
            ]);
        }

        $search = trim($search);

        if (empty($search)) {
            return Api::done([
                'items' => null,
            ]);
        }

        $domains = Domain::search($search, [
            'name',
            'domain'
        ])->limit(10)->get();

        $blogs = Blog::search($search, [
            'title',
            'short_description'
        ])->limit(10)->get();

        $articles = Article::search($search, [
            'title',
            'description',
            'phone_number',
            'whatsapp_number',
        ])->limit(10)->get();

        return Api::done([
            'items' => [
                'domains' => Action::build(VueObject::class)->data([
                    'object' => $domains,
                    'encode' => false,
                ])->run()->getData('object'),
                'blogs' => Action::build(VueObject::class)->data([
                    'object' => $blogs,
                    'encode' => false,
                ])->run()->getData('object'),
                'articles' => Action::build(VueObject::class)->data([
                    'object' => $articles,
                    'encode' => false,
                ])->run()->getData('object'),
            ],
        ]);
    }
}
