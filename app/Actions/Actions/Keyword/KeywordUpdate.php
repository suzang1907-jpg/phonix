<?php

namespace App\Actions\Keyword;

use Dev\PHPActions\Action;
use App\Models\Keyword;

class KeywordUpdate extends Action
{
    public function handle()
    {
        $keyword = $this->getData('keyword');
        $id = $this->getData('id');

        if (empty($keyword)) {
            return null;
        }

        $keyword = trim($keyword);

        if (empty($keyword)) {
            return null;
        }

        $keywordToUpdate = Keyword::where('id', $id)->first();

        if (empty($keywordToUpdate)) {
            return null;
        }

        if ($keywordToUpdate->keyword == $keyword) {
            return null;
        }

        if (!empty(Keyword::where('keyword', $keyword)->first())) {
            return null;
        }

        $keywordToUpdate->update([
            'keyword' => $keyword,
        ]);

        return $keywordToUpdate;
    }
}
