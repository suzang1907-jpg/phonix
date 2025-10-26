<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\ArticleAnalytic;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ArticlesSaveAnalytics extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'articles:save-analytics';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Articles Save Analytics';


    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $articles = Article::all();

        $oneWeekAgo = Carbon::now()->subDays(7);
        ArticleAnalytic::where('created_at', '<', $oneWeekAgo)->delete();

        foreach ($articles as $article) {
            $article_meta = $article->meta;

            $article_meta['prev_view_count'] = $article_meta['view_count'] ?? 0;
            $article_meta['view_count'] = 0;

            $article->update([
                'meta' => $article_meta
            ]);
        }
    }
}
