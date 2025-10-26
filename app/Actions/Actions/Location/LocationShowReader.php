<?php

namespace App\Actions\Location;

use Dev\PHPActions\Action;

class LocationShowReader extends Action
{
    public function handle()
    {
        $u = request()->url();

        $u = str_replace('/reader', '', $u);

        return redirect()->secure($u, 301);
    }
}
