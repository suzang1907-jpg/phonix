<?php

namespace App\Actions\Story;

use Dev\PHPActions\Action;

class StoryListReader extends Action
{
    public function handle()
    {
        $u = request()->url();

        $u = str_replace('/reader', '', $u);

        return redirect()->secure($u, 301);
    }
}
