<?php

namespace App\Actions\Project;

use App\Models\Project;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;

class ProjectStore extends Action
{
    protected $secure = [
        'cloudflare_api_key',
        'cloudflare_api_email'
    ];

    public function handle()
    {
        $cloudflare_api_key = $this->getData('cloudflare_api_key');
        $cloudflare_api_email = $this->getData('cloudflare_api_email');

        $id = 'p_' . now()->timestamp . '_' . strtolower(Str::random());

        $project = Project::create([
            'id' => $id,
            'cloudflare_api_key' => $cloudflare_api_key,
            'cloudflare_api_email' => $cloudflare_api_email
        ]);

        return [
            'project' => $project,
        ];
    }
}
