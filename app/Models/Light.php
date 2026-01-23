<?php

namespace App\Models;

use App\Services\DomainService;
use App\Traits\Models\Listable;
use App\Traits\Models\Randomable;
use App\Traits\Models\Searchable;
use App\Traits\Models\Viewable;
use App\Traits\Models\Vue;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class Light extends Model
{
    use HasFactory;
    use Viewable;
    use Listable;
    use Vue;
    use Randomable;
    use Searchable;

    protected $guarded = [];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $casts = [
        'meta' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($model) {
            $fp = $model->getFilePath();
            if (file_exists($fp)) {
                unlink($fp);
            }
        });
    }

    public static function createForContent($content, $type = null, $url = null): Light | null
    {
        try {
            $url = $url ?? url()->full();
            $url = self::removeParam($url, '_ga');
            $url = self::removeParam($url, '_gl');
            $date = now()->format('Y-m-d');
            $filename = str_replace('/', '-', $url);

            $file_path = storage_path('app/private/light/' . $date. '/' . $type . '/' . $filename);

            $light = Light::where('path', $url)->first();

            if (! empty($light)) {
                if (self::writeContentToFile($file_path, $content)) {
                    return $light;
                }

                return null;
            }

            $id = Str::slug('l-' . Str::random(32) . '-' . now()->timestamp);

            if (self::writeContentToFile($file_path, $content)) {
                $light = Light::create([
                    'id' => $id,
                    'path' => $url,
                    'type' => $type,
                ]);

                return $light;
            }
        } catch (Exception $e) {
        }
        return null;
    }

    public static function createForHtml($content, $url = null): Light | null
    {
        return self::createForContent($content, 'text-html', $url);
    }

    public static function createForCss($content, $url = null): Light | null
    {
        return self::createForContent($content, 'css', $url);
    }

    public static function createForXml($content, $url = null): Light | null
    {
        return self::createForContent($content, 'xml', $url);
    }

    public static function getForPath($url = null): Light | null
    {
        $url = $url ?? url()->full();

        $url = self::removeParam($url, '_ga');
        $url = self::removeParam($url, '_gl');
        $light = Light::where('path', $url)->first();

        if (! empty($light)) {
            $date = now()->format('Y-m-d');
            $filename = str_replace('/', '-', $light->path);
            $file_path = storage_path('app/private/light/'. $date . '/' . $light->type . '/' . $filename);

            if (file_exists($file_path)) {
                return $light;
            }

            $light->delete();
        }

        return null;
    }

    public function getFilePath(): string
    {
        $date = now()->format('Y-m-d');
        $filename = str_replace('/', '-', $this->path);
        return storage_path('app/private/light/' . $date . '/' . $this->type . '/' . $filename);
    }

    private static function writeContentToFile($path, $content): bool
    {
        $dir = dirname($path);

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $f = fopen($path, 'w');
        if (!$f) return false;
        
        fwrite($f, $content);
        return fclose($f);
    }

    public function vue()
    {
        $data = $this->toArray();

        return $data;
    }

    private static function removeParam($url, $param)
    {
        $url = preg_replace('/(&|\?)' . preg_quote($param) . '=[^&]*$/', '', $url);
        $url = preg_replace('/(&|\?)' . preg_quote($param) . '=[^&]*&/', '$1', $url);
        return $url;
    }
}
