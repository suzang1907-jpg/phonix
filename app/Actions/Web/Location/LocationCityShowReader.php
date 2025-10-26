<?php

namespace App\Actions\Web\Location;

use Dev\PHPActions\Action;

class LocationCityShowReader extends Action
{
    public function handle()
    {
        $u = request()->url();

        $u = str_replace('/reader', '', $u);

        return redirect()->secure($u, 301);
    }
}
