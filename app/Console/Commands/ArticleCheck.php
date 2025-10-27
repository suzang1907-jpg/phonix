<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\ArticleAnalytic;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Exception;

class ArticleCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:check';

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

        foreach ($articles as $article) {
            $article_meta = $article->meta;

            $renew_at = $article_meta['renew_at'] ?? null;

            if (empty($renew_at)) {
                continue;
            }

            $date = $renew_at['date'] ?? null;

            if (empty($date)) {
                continue;
            }

            $date = Carbon::parse($date);

            try {

                $hour_to_add = $renew_at['time'] ?? 0;

                $date->addHours($hour_to_add);
            } catch (Exception $e) {
            }
            $current_date = Carbon::now();

            if ($current_date->isAfter($date)) {
                $article->update(['hidden_at' => Carbon::now(),]);
            }
        }
    }
}
