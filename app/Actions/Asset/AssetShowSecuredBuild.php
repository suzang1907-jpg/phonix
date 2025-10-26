<?php

namespace App\Actions\Asset;

use Exception;
use Dev\PHPActions\Action;

class AssetShowSecuredBuild extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (!auth()->check()) {
            return response()->noContent();
        }

        try {
            $manifest = file_get_contents(storage_path('app/assets/build/admin/assets/' . $id));

            if (empty($manifest)) {
                return response()->noContent();
            }

            if (str_ends_with($id, '.css')) {
                return response($manifest)
                    ->header('Content-Type', 'text/css')
                    ->header('pragma', 'private')
                    ->header('Cache-Control', 'private, max-age=31536000');
            } elseif (str_ends_with($id, '.json')) {
                return response($manifest)
                    ->header('Content-Type', 'application/json')
                    ->header('pragma', 'private')
                    ->header('Cache-Control', 'private, max-age=31536000');
            } elseif (str_ends_with($id, '.js')) {
                return response($manifest)
                    ->header('Content-Type', 'text/javascript')
                    ->header('pragma', 'private')
                    ->header('Cache-Control', 'private, max-age=31536000');
            } else {
                return response($manifest)
                    ->header('Content-Type', 'text/plain')
                    ->header('pragma', 'private')
                    ->header('Cache-Control', 'private, max-age=31536000');
            }
        } catch (Exception $e) {
        }

        return response()->noContent();
    }
}
