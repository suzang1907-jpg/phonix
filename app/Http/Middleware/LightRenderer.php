<?php

namespace App\Http\Middleware;

use App\Models\Light;
use Closure;
use Illuminate\Support\Facades\Log;
class LightRenderer
{
    private  function removeParam($url, $param)
    {
        $url = preg_replace('/(&|\?)' . preg_quote($param) . '=[^&]*$/', '', $url);
        $url = preg_replace('/(&|\?)' . preg_quote($param) . '=[^&]*&/', '$1', $url);
        return $url;
    }
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

        $path = url()->full();

        $path = $this->removeParam($path, '_ga');
        $path = $this->removeParam($path, '_gl');

        $file = null;
        $type = null;

        $date = now()->format('Y-m-d');
        $filename = str_replace('/', '-', $path) . '-' . $date;

        $file_path = storage_path('app/private/light/text-html/' . $filename);

        if (file_exists($file_path)) {
            $file = $file_path;
            $type = 'text-html';
        } else {
            $file_path = storage_path('app/private/light/xml/' . $filename);

            if (file_exists($file_path)) {
                $file = $file_path;
                $type = 'xml';
            }
        }

        if (empty($file)) {
            return $next($request);
        }

        $content = file_get_contents($file);

        if ($type == 'text-html') {
            return response($content)
                ->header('Content-Type', 'text/html');
        }

        if ($type == 'xml') {
            return response($content)->header('Content-Type', 'application/xml');
        }

        return $next($request);
    }
}
