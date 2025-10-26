<?php

namespace App\Actions\Customer\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Routing\Web;
use Illuminate\Support\Facades\Hash;

class ArticleEditExternal extends Action
{
    public function handle()
    {
        $id = $this->getData('id');
        $password = $this->getData('p');

        $article = Article::where('id', $id)->with('analytics')->get()->first();

        if (empty($article)) {
            return Web::redirect('web.home.show');
        }

        if (empty($article->customer_id)) {
            return Web::redirect('web.home.show');
        }

        if (! Hash::check($password, $article->edit_password)) {
            return Web::redirect('web.home.show');
        }

        return [
            'article' => $article,
            'article_edit_password' => $password,
        ];
    }
}
