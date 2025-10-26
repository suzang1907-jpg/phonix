<?php

namespace App\Actions\Api\Ad;

use App\Routing\Api;
use Illuminate\Support\Facades\Cache;
use Dev\PHPActions\Action;

class AdPostback extends Action
{
    public function  handle()
    {
        $state = $this->getData('state');

        if (empty($state)) {
            return Api::error();
        }

        $states = [
            'approved',
            'rejected',
            'waiting'
        ];

        if (!in_array($state, $states)) {
            return Api::error();
        }

        if (!Cache::has('ad_click_count_' . $state)) {
            Cache::put('ad_click_count_' . $state, 1,  now()->addDay());
        } else {
            Cache::increment('ad_click_count_' . $state);
        }
        return Api::done();
    }
}
