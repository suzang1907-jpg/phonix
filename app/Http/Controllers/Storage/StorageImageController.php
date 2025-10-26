<?php

namespace App\Http\Controllers\Storage;

use App\Http\Controllers\StorageController;
use App\Models\Story;

class StorageImageController extends StorageController
{
    public function storyMain()
    {
        $story = Story::where('id', request()->id)->first();

        if (empty($story)) {
            return $this->getDefaultLogoResponse();
        }

        $image = $story->image->path();

	if (! file_exists($image)) {
return response()->noContent();
}

        return response()->file($image, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
