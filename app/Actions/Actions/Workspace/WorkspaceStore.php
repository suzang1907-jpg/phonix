<?php

namespace App\Actions\Workspace;

use App\Models\Workspace;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;

class WorkspaceStore extends Action
{
    protected $secure = [
        'name',
        'meta'
    ];

    public function handle()
    {
        $name = $this->getData('name');
        $meta = $this->getData('meta');

        if (empty($name)) {
            return;
        }

        $name = trim($name);

        if (empty($name)) {
            return;
        }

        $id = 'w_' . strtolower(Str::random());

        $workspace = Workspace::create([
            'id' => $id,
            'name' => $name,
            'meta' => [
                'dynamic_keywords' => $meta['dynamic_keywords'] ?? false
            ]
        ]);

        return [
            'workspace' => $workspace
        ];
    }
}
