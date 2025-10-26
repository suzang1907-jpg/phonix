<?php

namespace App\Actions\Admin\Article;

use Dev\PHPActions\Action;

class ResponseArticleCustomerRemove extends Action
{
    public function handle()
    {
        return redirect()->back();
    }
}
