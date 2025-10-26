<?php

namespace App\Actions\GoogleAuthentication;

use Dev\PHPActions\Action;
use App\Models\GoogleAuthentication;
use App\Routing\Admin;

class ResponseGoogleAuthenticationDestroy extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return redirect()->back();
        }

        $googleAuthentication = GoogleAuthentication::where('id', $id)->first();

        if (empty($googleAuthentication)) {
            return Admin::redirect('admin.googleauthentication.list');
        }

        $googleAuthentication->delete();

        return Admin::redirect('admin.googleauthentication.list');
    }
}
