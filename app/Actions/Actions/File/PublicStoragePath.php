<?php

namespace App\Actions\File;

use Dev\PHPActions\Action;

class PublicStoragePath extends Action
{
    protected $validator = [
        'path' => 'required'
    ];

    public function handle()
    {
        $path = $this->getData('path');

        $path = str_replace('http://', '', $path);

        $path = str_replace('https://', '', $path);

        $path = str_replace('storage/', '', $path);

        $path = explode('images/users/', $path)[1];

        $path = 'app/public/images/users/' . $path;

        $path = storage_path($path);

        return [
            'path' => $path
        ];
    }
}
