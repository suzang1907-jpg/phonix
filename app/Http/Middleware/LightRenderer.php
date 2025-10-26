<?php

namespace App\Http\Middleware;

use App\Models\Light;
use Closure;

class LightRenderer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!config('light.enabled')) {
            return $next($request);
        }

        $light = Light::getForPath();

        if (empty($light)) {
            return $next($request);
        }

    

        $content = file_get_contents($light->getFilePath());

        if ($light->type == 'text-html') {
            return response($content)
                ->header('Content-Type', 'text/html');
        }

	if ($light->type == 'xml') {
		return response($content)->header('Content-Type', 'application/xml');
}

        return $next($request);
    }
}
