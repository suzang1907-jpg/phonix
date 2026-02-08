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

            try {
                // If date is provided as YYYY-MM-DD (date-only) create from format
                if (is_string($date) && preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
                    $date = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
                } else {
                    $date = Carbon::parse($date);
                }

                // Handle time value: can be numeric hours or "HH:MM"
                $hour_to_add = $renew_at['time'] ?? 0;

                if (is_numeric($hour_to_add)) {
                    $date->addHours((int)$hour_to_add);
                } elseif (is_string($hour_to_add) && strpos($hour_to_add, ':') !== false) {
                    [$h, $m] = array_pad(explode(':', $hour_to_add), 2, 0);
                    $date->addHours((int)$h)->addMinutes((int)$m);
                }
            } catch (Exception $e) {
                // If parsing fails, skip this article
                continue;
            }

            $current_date = Carbon::now();

            if ($current_date->isAfter($date)) {
                $article->update(['hidden_at' => Carbon::now()]);
            }
        }
    }
}
