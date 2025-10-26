<?php

namespace App\Actions\Url;

use Dev\PHPActions\Action;

class UrlGetWithoutDistraction extends Action
{
    public function handle()
    {
        $url = url()->full();

        $_gl = request()->_gl;
        $_ga = request()->_ga;

        if (! empty($_gl)) {
            $_gl = urlencode($_gl);
            $url = str_replace('&_gl=' . $_gl, '', $url);
            $url = str_replace('?_gl=' . $_gl, '', $url);
        }

        if (! empty($_ga)) {
            $_ga = urlencode($_ga);
            $url = str_replace('&_ga=' . $_ga, '', $url);
            $url = str_replace('?_ga=' . $_ga, '', $url);
        }

        return [
            'url' => $url
        ];
    }
}
