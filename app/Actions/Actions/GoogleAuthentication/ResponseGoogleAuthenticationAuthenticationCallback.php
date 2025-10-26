<?php

namespace App\Actions\GoogleAuthentication;

use Dev\PHPActions\Action;
use App\Models\GoogleAuthentication;
use App\Routing\Admin;
use Exception;
use Illuminate\Support\Facades\Log;

class ResponseGoogleAuthenticationAuthenticationCallback extends Action
{
    public function handle()
    {
        $code_verifier = session('code_verifier');
        $code = $_GET['code'];

        if (empty($code_verifier)) {
            return Admin::redirect('admin.dashboard.show');
        }

        $google_authentication = GoogleAuthentication::where('code_verifier', $code_verifier)->first();

        if (empty($google_authentication)) {
            return Admin::redirect('admin.dashboard.show');
        }

        if ($google_authentication->user_id != auth()->user()->id) {
            return Admin::redirect('admin.dashboard.show');
        }

        $client = $google_authentication->client();

        $token = $client->fetchAccessTokenWithAuthCode($code, $code_verifier);

        if (empty($token)) {
            return Admin::redirect('admin.dashboard.show');
        }

        try {
            $client->setAccessToken($token);
        } catch (Exception $e) {
            Log::error($e);
            return Admin::redirect('admin.dashboard.show');
        }

        $service = new \Google\Service\Oauth2($client);
        $userFromGoogle = $service->userinfo->get();

        if (auth()->user()->email != $userFromGoogle->email) {
            return Admin::redirect('admin.dashboard.show');
        }

        $google_authentication->update([
            'code_verifier' => null,
            'code' => $code,
            'token' => $token,
        ]);

        return Admin::redirect('admin.dashboard.show');
    }
}
