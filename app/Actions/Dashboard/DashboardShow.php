<?php

namespace App\Actions\Dashboard;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Models\Customer;
use App\Scopes\ArticleActiveScope;
use App\Services\PaginateRelation;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Cache;

class DashboardShow extends Action
{
    public function handle()
    {
        return [
            'title' => 'Anasayfa',
            'customer_count' => Customer::count(),
            'article_count' => Article::count(),
            'latest_customers' => Customer::latest()->with('articles')->list(3),
            'latest_articles' => Article::withoutGlobalScope(ArticleActiveScope::class)->with('analytics')->latest()->list(3),
        ];
    }
}
