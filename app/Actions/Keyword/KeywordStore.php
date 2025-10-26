<?php

namespace App\Actions\Keyword;

use Dev\PHPActions\Action;
use App\Models\Domain;
use App\Models\Keyword;
use Illuminate\Support\Str;
use App\Services\ProjectService;

class KeywordStore extends Action
{
    public function handle()
    {
        $keyword = $this->getData('keyword');

        if (empty($keyword)) {
            return null;
        }

        $keyword = trim($keyword);

        if (empty($keyword)) {
            return null;
        }

        if (!empty(Keyword::where('keyword', $keyword)->first())) {
            return null;
        }

        $storedKeyword = Keyword::create([
            'id' => auth()->user()->id . '_' . strtolower(Str::slug($keyword, '_')),
            'keyword' => $keyword,
            'project_id' => ProjectService::getProject()->id,
        ]);

        return $storedKeyword;
    }
}
