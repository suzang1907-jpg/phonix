<?php

namespace Dev\LaravelAssets\Actions\Image;

use Dev\LaravelAssets\Models\Image;
use Dev\PHPActions\Action;

/**
 * @data string $id
 */
class ImageDestroy extends Action
{
    protected $secure = [
        'id',
    ];

    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return;
        }

        $image = Image::where('id', $id)->first();

        if (empty($image)) {
            return;
        }

        $image->delete();
    }
}
