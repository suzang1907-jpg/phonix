<?php

namespace App\Actions\Amp\Share;

use App\Services\ProjectService;
use Dev\PHPActions\Action;

class ShareSupport extends Action
{
    public function handle()
    {
        $project = ProjectService::getProject();

        if (empty($project?->support_phone_number)) {
            return redirect()->back();
        }

        $phone_number = str_replace(' ', '', $project->support_phone_number);

        return redirect('https://wa.me/' . $phone_number);
    }
}
