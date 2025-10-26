<?php

namespace App\Actions\Backup;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Domain;
use App\Models\Setting;
use App\Models\Story;
use App\Models\Tag;
use App\Services\Download;

class ResponseBackupExport extends Action
{
    public function handle()
    {
        return Download::database([
            Domain::class,
            Blog::class,
            Tag::class,
            Story::class,
            Article::class,
            Setting::class,
        ], 'backup-' . now()->toIso8601String() . '.zip');
    }
}
