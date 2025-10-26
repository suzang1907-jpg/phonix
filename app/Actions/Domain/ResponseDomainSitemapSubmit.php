<?php

namespace App\Actions\Domain;

use Dev\PHPActions\Action;

class ResponseDomainSitemapSubmit extends Action
{
    public function handle()
    {
        return redirect()->back();
    }
}
