<?php

namespace App\Actions\File\Profile;

use Dev\PHPActions\Action;
use App\Models\Profile;

class ProfileMainImage extends Action
{
    protected $validator = [
        'id' => 'required'
    ];

    public function handle()
    {
        $id = $this->getData('id');

        $article = null;

        if (auth()->check()) {
            $article = Profile::where('id', $id)->first();
        } else {
            $article = Profile::where('id', $id)->first();
        }

        if (empty($article)) {
            return response()->noContent();
        }

        $image = $article->image;

        if (empty($image)) {
            return response()->noContent();
        }

        return response()->file($image->path(), [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
