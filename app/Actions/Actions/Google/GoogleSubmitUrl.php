<?php

namespace App\Actions\Google;

use Dev\PHPActions\Action;
use App\Models\GoogleAuthentication;
use Exception;
use Google\Service\Indexing;
use Google\Service\Indexing\UrlNotification;

class GoogleSubmitUrl extends Action
{
    protected $validator = [
        'url' => 'required',
        'user_id' => 'required',
    ];

    public function handle()
    {
        $url = $this->getData('url');
        $user_id = $this->getData('user_id');

        $google_authentication = GoogleAuthentication::where('user_id', $user_id)->first();

        if (empty($google_authentication)) {
            return null;
        }

        if ($google_authentication->shouldAuthenticate()) {
            return null;
        }

        $client = $google_authentication->client();

        $count = 0;

        $response = null;

        while (empty($response) && $count < 2) {
            $count++;
            try {
                $service = new Indexing($client);

                $urlNotification = new UrlNotification(['url' => $url, 'type' => 'URL_UPDATED']);

                $response = $service->urlNotifications->publish($urlNotification);

                if (!empty($response)) {
                    return $response;
                }

                sleep(5);
            } catch (Exception $e) {
            }
        }

        return null;
    }
}
