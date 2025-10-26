<?php

namespace App\Actions\Admin\GoogleIntegration;

use App\Models\Domain;
use App\Models\GoogleIntegration;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Log;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;
use Dev\LaravelAssets\Actions\File\FileStore;

class GoogleIntegrationStore extends Action
{
    public function handle()
    {
        $project = ProjectService::getProject();

        $client_id = $this->getData('client_id');
        $client_credentials = $this->getData('client_credentials');

        if (empty($client_id) || empty($client_credentials)) {
            return;
        }

        $file = Action::build(FileStore::class)->data([
            'database' => false,
            'file' => $client_credentials,
            'path' => 'google-credentials',
            'disk' => 'private'
        ])->options([
            'base64' => true,
        ])->run()->getData('file');

        if (empty($file)) {
            return;
        }

        $google_integration = GoogleIntegration::create([
            'client_id' => $client_id,
            'file_id' => $file->id,
            'project_id' => $project->id,
        ]);

        if (empty($google_integration)) {
            return;
        }

        return [
            'google_integration' => $google_integration
        ];
    }
}
