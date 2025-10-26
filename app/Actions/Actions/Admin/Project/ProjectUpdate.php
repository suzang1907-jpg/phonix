<?php

namespace App\Actions\Admin\Project;

use App\Actions\Cache\CacheClear;
use Dev\PHPActions\Action;
use App\Routing\Admin;
use App\Routing\Api;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Log;
use Dev\LaravelAssets\Actions\Base64Decode;
use Dev\LaravelAssets\Actions\Image\ImageStore;

class ProjectUpdate extends Action
{
    protected $secure = [
        'project'
    ];

    public function handle()
    {
        $location_id = $this->getData('location_id');
        $name = $this->getData('name');
        $amp_name = $this->getData('amp_name');
        $google_tag = $this->getData('google_tag');
        $location_description = $this->getData('location_description');
        $support_phone_number = $this->getData('support_phone_number');
        $location_text = $this->getData('location_text');
        $server_ip = $this->getData('server_ip');
        $api_key = $this->getData('api_key');
        $api_ips = $this->getData('api_ips');
        $meta_data = $this->getData('meta_data');
        $project = $this->getData('project');

        $amp_logo = Action::build(ImageStore::class)->data([
            'file' => $this->getData('amp_logo'),
            'disk' => 'public',
            'path' => 'projects/'
        ])->options([
            'base64' => true
        ])->run()->getData('image');
        $logo = Action::build(ImageStore::class)->data([
            'file' => $this->getData('logo'),
            'disk' => 'public',
            'path' => 'projects/'
        ])->options([
            'base64' => true
        ])->run()->getData('image');
        $support_banner = Action::build(ImageStore::class)->data([
            'file' => $this->getData('support_banner'),
            'disk' => 'public',
            'path' => 'projects/'
        ])->options([
            'base64' => true
        ])->run()->getData('image');
        $article_banner = Action::build(ImageStore::class)->data([
            'file' => $this->getData('article_banner'),
            'disk' => 'public',
            'path' => 'projects/'
        ])->options([
            'base64' => true
        ])->run()->getData('image');
        $article_watermark = Action::build(ImageStore::class)->data([
            'file' => $this->getData('article_watermark'),
            'disk' => 'public',
            'path' => 'projects/'
        ])->options([
            'base64' => true
        ])->run()->getData('image');
        $cloudflare_api_email = $this->getData('cloudflare_api_email');
        $cloudflare_api_key = $this->getData('cloudflare_api_key');

        $project = $project ?? ProjectService::getProject();

        if (empty($cloudflare_api_email)) {
            $cloudflare_api_email = $project->cloudflare_api_email;
        }

        if (empty($cloudflare_api_key)) {
            $cloudflare_api_key = $project->cloudflare_api_key;
        }

        if (!empty($location_text)) {
            $location_text = trim($location_text);

            if (!str_contains($location_text, '[/location/]')) {
                return;
            }
        }

        $amp_meta_data = $meta_data['amp'] ?? [];

        $amp_data_meta_data = [
            'primary_color' => $this->transformColor($amp_meta_data['primary_color'] ?? null),
            'secondary_color' => $this->transformColor($amp_meta_data['secondary_color'] ?? null),
            'grid_cols' => $amp_meta_data['grid_cols'] ?? 2,
            'grid_gap' => $amp_meta_data['grid_gap'] ?? 2,
        ];

        $data_meta_data = [
            'app_name' => $meta_data['app_name'] ?? null,
            'highlight_text_color' => $this->transformColor($meta_data['highlight_text_color'] ?? null),
            'amp' => $amp_data_meta_data,
        ];

        $data = [
            'meta_data' => $data_meta_data,
            'amp_name' => $amp_name,
            'name' => $name,
            'google_tag' => $google_tag,
            'support_phone_number' => $support_phone_number,
            'location_description' => $location_description,
            'cloudflare_api_email' => $cloudflare_api_email,
            'cloudflare_api_key' => $cloudflare_api_key,
            'location_text' => $location_text,
            'server_ip' => $server_ip,
            'api_key' => $api_key,
            'api_ips' => !empty($api_ips) ? explode(',', $api_ips) : null
        ];

        if (empty($project->location_id)) {
            $data['location_id'] = $location_id;
        }

        if (!empty($logo)) {
            $data['logo_id'] = $logo->id;
        }

        if (!empty($amp_logo)) {
            $data['amp_logo_id'] = $amp_logo->id;
        }

        if (!empty($support_banner)) {
            $data['support_banner_id'] = $support_banner->id;
        }

        if (!empty($article_banner)) {
            $data['article_banner_id'] = $article_banner->id;
        }

        if (!empty($article_watermark)) {
            $data['article_watermark_id'] = $article_watermark->id;
        }

        $project->update($data);

        Action::build(CacheClear::class)->run();

        return [
            'project' => $project
        ];
    }

    private function transformColor($color)
    {
        $result = $color;

        if (empty($result)) {
            return null;
        }

        $result = str_replace(' ', '', $result);

        if (!str_starts_with($result, '#')) {
            $result = '#' . $result;
        }

        if (!preg_match('/^#[a-f0-9]{6}$/i', $result)) {
            return null;
        }

        return $result;
    }
}
