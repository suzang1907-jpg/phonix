<?php

namespace App\Actions\File\Image;

use Dev\PHPActions\Action;
use Dev\LaravelAssets\Models\Image;

class ImageShow extends Action
{
    protected $validator = [
        'id' => 'required',
    ];

    public function handle()
    {
        $id = $this->getData('id');

        $image = Image::where('id', $id)->first();

        if (empty($image)) {
            return response()->noContent();
        }

        return response()->file($image->path(), [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
