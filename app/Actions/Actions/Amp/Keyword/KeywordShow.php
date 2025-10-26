<?php

namespace App\Actions\Amp\Keyword;

use Dev\PHPActions\Action;
use App\Models\Keyword;
use App\Routing\Amp;

class KeywordShow extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return Amp::redirect('amp.home.show');
        }

        $keyword = Keyword::where('id', $id)->get()->first();

        if (empty($keyword)) {
            return Amp::redirect('amp.home.show');
        }

        return [
            'keyword' => $keyword,
            'alias' => $this->getData('alias')
        ];
    }
}
