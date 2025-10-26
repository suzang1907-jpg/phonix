<?php

namespace App\Services;

class Download
{
    private static $flags = \ZipArchive::CREATE | \ZipArchive::OVERWRITE;

    public static function models($model, string $file_name)
    {
        $zip_file = self::backup_path($file_name);

        $zip = new \ZipArchive();
        $zip->open($zip_file, self::$flags);

        $model::all()->map(function ($model) use ($zip) {
            $zip->addFromString($model->id . '.json', $model->downloadable());
        });
        $zip->close();

        return response()->download($zip_file);
    }

    public static function database($models, string $file_name)
    {
        $zip_file = self::backup_path($file_name);
        $zip = new \ZipArchive();
        $zip->open($zip_file, self::$flags);

        foreach ($models as $model) {
            $model::all()->map(function ($value) use ($zip, $model) {
                $zip->addFromString(ucfirst(last(explode('\\', $model))) . '/' . $value->id . '.json', $value->downloadable());
            });
        }
        $zip->close();

        return response()->download($zip_file);
    }

    private static function backup_path(string $path)
    {
        return storage_path('backups/' . $path);
    }
}
