<?php

namespace App\Actions\Dashboard;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Customer;
use App\Models\Keyword;
use App\Models\Story;
use App\Models\Tag;
use App\Scopes\ArticleActiveScope;
use App\Services\PaginateRelation;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Cache;
use Dev\LaravelAssets\Models\Image;

class DashboardShow extends Action
{
    public function handle()
    {
        $log_file = null;

        if (file_exists(storage_path('logs/laravel.log'))) {
            $log_file = "";//file_get_contents(storage_path('logs/laravel.log'));

            if (!empty($log_file)) {
                $log_file = trim($log_file);
            }
        }

        return [
            'title' => 'Anasayfa',
            'blog_count' => Blog::count(),
            'images_count' => Image::count(),
            'article_count' => Article::count(),
            'google_integration_count' => ProjectService::getProject()->googleIntegrations()->count(),
            'cloudflare_syncing_state' => Cache::get('cloudflare_syncing_state', 'none'),
            'log_file_has_content' => !empty($log_file),
            'latest_sites' => PaginateRelation::paginate(ProjectService::getProject()->sites()->latest(), 3),
            'latest_customers' => Customer::latest()->with('articles')->list(3),
            'latest_articles' => Article::withoutGlobalScope(ArticleActiveScope::class)->with('analytics')->latest()->list(3),
        ];
    }
}
