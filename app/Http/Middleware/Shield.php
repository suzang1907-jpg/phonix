<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class Shield
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

        $userAgent = $request->userAgent();

        if (true || empty($userAgent)) {

$fullurl = url()->full();

  if (config('dev.log_enabled')) {
            Log::info(request()->ip() . '//'. $userAgent . ' // ' . $fullurl);
        }

            return $next($request);
        }

        $userAgent = strtolower($userAgent);

        if (str_contains($userAgent, 'ahrefsbot')) {
            return response('Not Allowed Bot.');
        }

        if (str_contains($userAgent, 'ahrefs')) {
            return response('Not Allowed Bot.');
        }

if (str_contains($userAgent, 'bingbot')) {
return response('Not Allowed Bot');
}

if (str_contains($userAgent, 'coccocbot')) {
return response('Not Allowed Bot');
}

if (str_contains($userAgent, 'yandexbot')) {
return response('Not Allowed Bot');
}

if (str_contains($userAgent, 'palto alto')) {
return response('Not Allowed Bot');
}

        if (str_contains($userAgent, 'semrushbot')) {
            return response('Not Allowed Bot.');
        }

        if (str_contains($userAgent, 'facebookexternalhit')) {
            return response('Not Allowed Bot.');
        }

        if (str_contains($userAgent, 'amazonbot')) {
            return response('Not Allowed Bot.');
        }

        if (str_contains($userAgent, 'mj12bot.com')) {
            return response('Not Allowed Bot.');
        }

        if (str_contains($userAgent, 'claudebot')) {
            return response('Not Allowed Bot.');
        }

        if (str_contains($userAgent, 'gptbot')) {
            return response('Not Allowed Bot.');
        }

        if (str_contains($userAgent, 'dotbot')) {
            return response('Not Allowed Bot.');
        }

if (str_contains($userAgent, 'realitycheats')) {
return response('Not Allowed Bot');
}

if (str_contains($userAgent, 'presto')) {
return response('Not Allowed Bot');
}

if (str_contains($userAgent, 'dataforseobot')) {
return response('Not Allowed Bot');
}
if (str_contains($userAgent, 'trident')) {
return response('Not Allowed Bot');
}
if (str_contains($userAgent, 'barkrowler')) {
return response('Not Allowed Bot');
}
$fullurl = url()->full();

        if (config('dev.log_enabled')) {
            Log::info(request()->ip() . '//'. $userAgent . ' // ' . $fullurl);
        }

        return $next($request);
    }
}
