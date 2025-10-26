<?php

namespace App\Actions\Site;

use App\Actions\Project\ProjectGet;
use App\Actions\Url\UrlGetOrigin;
use App\Actions\Url\UrlGetOriginType;
use App\Models\Site;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;

class SiteStore extends Action
{
    protected $secure = [
        'project_id',
        'origin'
    ];

    public function handle()
    {
        $project_id = $this->getData('project_id');
        $origin = $this->getData('origin');

        $project = Action::build(ProjectGet::class)->data([
            'id' => $project_id
        ])->run()->getData('project');

        if (empty($project)) {
            return;
        }

        $id = 's_' . now()->timestamp . '_' . strtolower(Str::random());

        $origin_type = Action::build(UrlGetOriginType::class)->data([
            'origin' => $origin
        ])->run()->getData();

        if ($origin_type['is_sub']) {
            $origin = Action::build(UrlGetOrigin::class)->data([
                'origin' => $origin
            ])->run()->getData('origin');

            $site = Action::build(SiteGetByDomain::class)->data([
                'origin' => $origin
            ])->run()->getData('site');

            if (!empty($site)) {
                return [
                    'site' => $site
                ];
            }

            return;
        }

        $site = Action::build(SiteGetByDomain::class)->data([
            'origin' => $origin
        ])->run()->getData('site');

        if (!empty($site)) {
            return [
                'site' => $site
            ];
        }

        $site = Site::create([
            'id' => $id,
            'project_id' => $project_id,
            'origin' => $origin,
        ]);

        return [
            'site' => $site
        ];
    }
}
