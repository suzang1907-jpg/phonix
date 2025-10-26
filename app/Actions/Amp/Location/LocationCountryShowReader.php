<?php

namespace App\Actions\Amp\Location;

use Dev\PHPActions\Action;

class LocationCountryShowReader extends Action
{
    public function handle()
    {
        $u = request()->url();

        $u = str_replace('/reader', '', $u);

        return redirect()->secure($u, 301);
    }
}
