<?php

namespace App\Actions\Web\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Routing\Web;

class ArticleShow extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return Web::redirect('web.home.show');
        }

        $article = Article::where('id', $id)->get()->first();

        if (empty($article)) {
            return Web::redirect('web.home.show');
        }

        return [
            'article' => $article,
            'articles' => Article::query()->inRandomOrder()->get(),
        ];
    }
}
