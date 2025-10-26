<?php

namespace App\Actions\Env;

use Dev\PHPActions\Action;
use App\Models\Setting;
use App\Services\ImageService;
use Illuminate\Support\Facades\Artisan;

class EnvSet extends Action
{
    public function handle()
    {
        $key = $this->getData('key');
        $newValue = $this->getData('value');
        $delim = $this->getData('delim') ?? '';

        if (empty($newValue)) {
            return null;
        }

        if (empty($key)) {
            return null;
        }

        Artisan::call('optimize:clear');

        $path = base_path('.env');
        // get old value from current env
        $oldValue = env($key);

        if ($oldValue == null) {
            $oldValue = 'null';
        }

        // was there any change?
        if ($oldValue === $newValue) {
            return;
        }

        $contents = file_get_contents($path);

        if (!str_contains($contents, $key . '=' . $delim . $oldValue . $delim)) {
            $contents = $contents . PHP_EOL . $key . '=' . $delim . $newValue . $delim;
            if (file_exists($path)) {
                file_put_contents($path, $contents);
            }
            return;
        }

        $contents =  str_replace(
            $key . '=' . $delim . $oldValue . $delim,
            $key . '=' . $delim . $newValue . $delim,
            $contents
        );

        // rewrite file content with changed data
        if (file_exists($path)) {
            // replace current value with new value 
            file_put_contents(
                $path,
                $contents
            );
        }

        Artisan::call('optimize:clear');
    }
}
