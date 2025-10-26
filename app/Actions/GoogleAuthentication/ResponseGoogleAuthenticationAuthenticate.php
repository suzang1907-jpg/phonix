<?php

namespace App\Actions\GoogleAuthentication;

use Dev\PHPActions\Action;
use App\Models\GoogleAuthentication;
use App\Routing\Admin;
use Google\Service\Analytics;
use Google\Service\AnalyticsReporting;
use Google\Service\Indexing;
use Google\Service\Webmasters;

class ResponseGoogleAuthenticationAuthenticate extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return redirect()->back();
        }

        $google_authentication = GoogleAuthentication::where('id', $id)->first();

        if (empty($google_authentication)) {
            return redirect()->back();
        }

        if ($google_authentication->user_id != auth()->user()->id) {
            return redirect()->back();
        }

        if (!$google_authentication->shouldAuthenticate()) {
            return redirect()->back();
        }

        $client = $google_authentication->client();

        $redirectUrl = Admin::route('admin.googleauthentication.authentication.callback');

        $client->setRedirectUri($redirectUrl);

        $client->addScope(Webmasters::WEBMASTERS);
        $client->addScope(AnalyticsReporting::ANALYTICS);
        $client->addScope(Analytics::ANALYTICS);
        $client->addScope(Analytics::ANALYTICS_EDIT);
        $client->addScope(Indexing::INDEXING);
        $client->addScope(\Google\Service\Oauth2::USERINFO_EMAIL);

        $code_verifier = $client->getOAuth2Service()->generateCodeVerifier();

        if (empty($code_verifier)) {
            return redirect()->back();
        }

        session([
            'code_verifier' => $code_verifier
        ]);

        $google_authentication->update([
            'code_verifier' => $code_verifier,
        ]);

        return redirect($client->createAuthUrl());
    }
}
