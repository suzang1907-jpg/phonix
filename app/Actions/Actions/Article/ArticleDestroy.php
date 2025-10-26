<?php

namespace App\Actions\Article;

use App\Actions\Cache\CacheClear;
use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;

class ArticleDestroy extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return false;
        }

        Article::where('id', $id)->withoutGlobalScope(ArticleActiveScope::class)->first()?->delete();

        Action::build(CacheClear::class)->run();

        return true;
    }
}
