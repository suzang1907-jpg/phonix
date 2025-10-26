<?php

namespace App\Actions\Amp\Article;

use App\Models\Article;
use App\Routing\Amp;
use Dev\PHPActions\Action;

class ArticleShow extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return Amp::redirect('amp.home.show');
        }

        $article = Article::where('id', $id)->get()->first();

        if (empty($article)) {
            return Amp::redirect('amp.home.show');
        }

if ($article->title == "**") {
$ran_article = Article::where("title", "!=", "**")->inRandomOrder()->first();
$article->title = $ran_article->title;
$article->info = $ran_article->info;
$article->description = $ran_article->description;
$article->phone_number = $ran_article->phone_number;
$article->whatsapp_number = $ran_article->whatsapp_number;
}

        return [
            'article' => $article
        ];
    }
}
