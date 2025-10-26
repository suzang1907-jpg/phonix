<?php

namespace App\Actions\Customer\Dashboard;

use App\Routing\Web;
use Dev\PHPActions\Action;

class DashboardShow extends Action
{
    public function handle()
    {
        $articles = auth('customer')->user()->articles;

        if ($articles->isEmpty()) {
            return Web::redirect('web.home.show');
        }

        return [
            'articles' => $articles
        ];
    }
}
