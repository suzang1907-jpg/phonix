<?php

namespace App\Actions\GoogleAuthentication;

use Dev\PHPActions\Action;

class ResponseGoogleAuthenticationStore extends Action
{
    public function handle()
    {
        $google_authentication = $this->getData('google_authentication');

        if (empty($google_authentication)) {
            return redirect()->back();
        }

        return Action::build(ResponseGoogleAuthenticationAuthenticate::class)->data([
            'id' => $google_authentication->id
        ])->run();
    }
}
