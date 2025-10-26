<?php

namespace App\Actions\Asset;

use Exception;
use Dev\PHPActions\Action;

class AssetShowSecuredManifest extends Action
{
    public function handle()
    {
        if (!auth()->check()) {
            return response()->noContent();
        }

        try {
            $manifest = file_get_contents(storage_path('app/assets/build/admin/manifest.json'));

            if (empty($manifest)) {
                return response()->noContent();
            }

            return response($manifest)
                ->header('Content-Type', 'application/json');
        } catch (Exception $e) {
        }

        return response()->noContent();
    }
}
