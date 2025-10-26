<?php

namespace App\Actions\Url;

use Dev\PHPActions\Action;

class UrlGetOriginType extends Action
{
    protected $secure = [
        'origin'
    ];

    public function handle()
    {
        $origin = Action::build(UrlGetOrigin::class)->data([
            'origin' => $this->getData('origin')
        ])->run()->getData('origin');

        $is_top = count(explode('.', $origin)) <= 2;

        return [
            'is_top' => $is_top,
            'is_sub' => !$is_top
        ];
    }
}
