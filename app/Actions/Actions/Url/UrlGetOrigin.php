<?php

namespace App\Actions\Url;

use Illuminate\Support\Facades\App;
use Dev\PHPActions\Action;

class UrlGetOrigin extends Action
{
    protected $secure = [
        'origin',
        'root'
    ];

    public function handle()
    {
        $origin = $this->getData('origin', request()->url());

        $root = $this->getOption('root', false);

        if (str_contains($origin, 'https://')) {
            $origin = explode('https://', $origin)[1];
        }

        if (str_contains($origin, 'http://')) {
            $origin = explode('http://', $origin)[1];
        }

        $origin = str_replace('www.', '', $origin);

        $origin = explode('/', $origin)[0];

        if ($root) {
            if (substr_count($origin, '.') == 2) {
                $exploded = explode('.', $origin)[0];
                $origin = explode($exploded . '.', $origin)[1];
            }
        }

        return [
            'origin' => $origin
        ];
    }
}
