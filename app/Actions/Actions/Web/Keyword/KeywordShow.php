<?php

namespace App\Actions\Web\Keyword;

use Dev\PHPActions\Action;
use App\Models\Keyword;
use App\Routing\Web;
use App\Services\WorkspaceService;

class KeywordShow extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return Web::redirect('web.home.show');
        }

        $keyword = Keyword::where('id', $id)->get()->first();

        if (empty($keyword)) {
            return Web::redirect('web.home.show');
        }

        return [
            'keyword' => $keyword,
            'alias' => $this->getData('alias')
        ];
    }
}
