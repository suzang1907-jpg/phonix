<?php

namespace App\Actions\Keyword;

use Dev\PHPActions\Action;
use App\Models\Keyword;

class KeywordDestroy extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return false;
        }

        Keyword::where('id', $id)->first()?->delete();

        return true;
    }
}
