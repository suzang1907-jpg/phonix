<?php

namespace App\Actions\Customer\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Routing\Customer;
use App\Routing\Web;

class ArticleEditPasswordDelete extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $article = Article::where('id', $id)->with('analytics')->get()->first();

        if (empty($article)) {
            return Web::redirect('web.home.show');
        }

        if ($article->customer_id != auth('customer')->user()->id) {
            return Web::redirect('web.home.show');
        }

        $article->update([
            'edit_password' => null
        ]);

        return Customer::redirect('customer.dashboard.show');
    }
}
