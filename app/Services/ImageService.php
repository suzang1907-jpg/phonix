<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Log;
use Dev\PHPActions\Action;
use Dev\LaravelAssets\Actions\Image\ImageStore;
use Dev\LaravelAssets\Models\Image;
use Spatie\Image\Image as SpatieImage;
use Spatie\Image\Enums\CropPosition;
use Spatie\Image\Enums\Fit;

class ImageService
{
    public static function getOptimizedImage(Image $image, $size, $sizes)
    {
        if (!in_array($size, $sizes)) {
            return null;
        }

        $id = $image->id . '_w_' . $size;

        $optimized_image = Image::where('id', $id)->limit(1)->get()->first();

        if (!empty($optimized_image)) {
            return $optimized_image;
        }

        $optimized_image = null;

        $path = null;
        $s_path = null;

        try {
            if (empty($image->path())) {
                $image = Action::build(ImageStore::class)->data([
                    'file' => $image->data,
                    'disk' => 'public',
                    'id' => $image->id . '_tmp_img'
                ])->options([
                    'base64' => true
                ])->run()->getData('image');

                if (empty($image)) {
                    return null;
                }

                $path = storage_path('/app/images/' . $image->id . '_w_' . $size . '.webp');
                $s_path = 'images/' . $image->id . '_w_' . $size . '.webp';
            } else {
                $path = $image->path() . '_w_' . $size . '.webp';
                $s_path = $image->path() . '_w_' . $size . '.webp';
            }

            if (! file_exists($image->path())) {
                return null;
            }

            $optimized_image = SpatieImage::load($image->path())->height($size)->width($size)->format('webp')->optimize()->save($path);
        } catch (Exception $e) {
            Log::error($e);
        }

        if (empty($optimized_image)) {
            return null;
        }

        return Action::build(ImageStore::class)->data([
            'file' => file_get_contents($path),
            'path' => $s_path,
            'disk' => 'public',
            'id' => $id
        ])->run()->getData('image');
    }

    public static function getOptimizedImageWH(Image $image, $size, $sizes)
    {
        if (!in_array($size, $sizes)) {
            return null;
        }

        $exploded_size = explode('x', $size);

        $width = intval($exploded_size[0]);
        $height = intval($exploded_size[1]);

        $id = $image->id . '_w_' . $size;

        $optimized_image = Image::where('id', $id)->limit(1)->get()->first();

        if (!empty($optimized_image)) {
            return $optimized_image;
        }

        $optimized_image = null;

        $path = null;
        $s_path = null;

        try {
            if (empty($image->path())) {
                $image = Action::build(ImageStore::class)->data([
                    'file' => $image->data,
                    'disk' => 'public',
                    'id' => $image->id . '_tmp_img'
                ])->options([
                    'base64' => true
                ])->run()->getData('image');

                if (empty($image)) {
                    return null;
                }

                $path = storage_path('/app/images/' . $image->id . '_w_' . $size . '.webp');
                $s_path = 'images/' . $image->id . '_w_' . $size . '.webp';
            } else {
                $path = $image->path() . '_w_' . $size . '.webp';
                $s_path = $image->path() . '_w_' . $size . '.webp';
            }

            if (! file_exists($image->path())) {
                return null;
            }

            $optimized_image = SpatieImage::load($image->path())->fit(Fit::Max, $width, $height)->format('webp')->optimize()->save($path);
        } catch (Exception $e) {
            Log::error($e);
        }

        if (empty($optimized_image)) {
            return null;
        }

        return Action::build(ImageStore::class)->data([
            'file' => file_get_contents($path),
            'path' => $s_path,
            'disk' => 'public',
            'id' => $id
        ])->run()->getData('image');
    }
}
