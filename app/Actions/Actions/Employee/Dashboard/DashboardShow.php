<?php

namespace App\Actions\Employee\Dashboard;

use App\Routing\Web;
use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;
class DashboardShow extends Action
{
    public function handle()
    {
        return [
          
'articles' => Article::withoutGlobalScope(ArticleActiveScope::class)->with('analytics')->with('customer')->orderByRenewAt("asc")->list(100)
        ];
    }
}
