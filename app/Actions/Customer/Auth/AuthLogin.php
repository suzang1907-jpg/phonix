<?php

namespace App\Actions\Customer\Auth;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Routing\Web;

class AuthLogin extends Action
{
    public function handle()
    {
        $customer_id = $this->getData('ci');

        if (empty($customer_id)) {
            return Web::redirect('web.home.show');
        }

        $article = Article::where('customer_id', $customer_id)->get()->first();

        if (empty($article)) {
            return Web::redirect('web.home.show');
        }

        return [
            'article' => $article
        ];
    }
}
