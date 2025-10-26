<?php

namespace App\Actions\Amp\Keyword;

use Dev\PHPActions\Action;

class KeywordAliasShowReader extends Action
{
    public function handle()
    {
        $u = request()->url();

        $u = str_replace('/reader', '', $u);

        return redirect()->secure($u, 301);
    }
}
