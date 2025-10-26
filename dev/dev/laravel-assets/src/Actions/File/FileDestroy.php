<?php

namespace Dev\LaravelAssets\Actions\File;

use Dev\PHPActions\Action;
use Dev\LaravelAssets\Models\File;

/**
 * @data string $id
 */
class FileDestroy extends Action
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

        $file = File::where('id', $id)->first();

        if (empty($file)) {
            return;
        }

        $file->delete();
    }
}
