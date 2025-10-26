<?php

namespace App\Actions\Customer\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Routing\Customer;
use App\Routing\Web;
use Illuminate\Support\Str;

class ArticleEditPasswordGenerate extends Action
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

        $edit_password = Str::random();

        $article->update([
            'edit_password' => bcrypt($edit_password)
        ]);

        session()->flash('tmp_edit_password', $edit_password);
        session()->flash('tmp_article_id', $article->id);

        return Customer::redirect('customer.dashboard.show');
    }
}
