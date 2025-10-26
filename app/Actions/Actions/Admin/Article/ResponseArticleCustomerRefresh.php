<?php

namespace App\Actions\Admin\Article;

use Dev\PHPActions\Action;

class ResponseArticleCustomerRefresh extends Action
{
    public function handle()
    {
        return redirect()->back();
    }
}
