<?php

namespace App\Actions\Home;

use Dev\PHPActions\Action;

class HomeShowReader extends Action
{
    public function handle()
    {
        $u = request()->url();

        $u = str_replace('/reader', '', $u);

        return redirect()->secure($u, 301);
    }
}
