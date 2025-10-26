<?php

namespace App\Actions\Admin\GoogleIntegration;

use App\Models\GoogleIntegration;
use App\Routing\Admin;
use Dev\PHPActions\Action;

class GoogleIntegrationDelete extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return;
        }

        $google_integration = GoogleIntegration::where('id', $id)->get()->first();

        if (!empty($google_integration)) {
            $google_integration->delete();
        }

        return Admin::redirect('admin.googleintegration.list');
    }
}
