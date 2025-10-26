<?php

namespace App\Actions\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;
use App\Models\Customer;

class ArticleEdit extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return null;
        }

        $article = Article::where('id', $id)->withoutGlobalScope(ArticleActiveScope::class)->with('analytics')->first();

        if (empty($article)) {
            return null;
        }



$customer_id = $this->getData('customer_id');
$article_customer = $article->customer;
if (! empty($customer_id) && empty($article_customer)) {
$article_customer = Customer::where('id', $customer_id)->first();
}

        return [
'article_customer' => $article_customer,
            'article' => $article,
            'title' => 'İlan / Düzenle'
        ];
    }
}
