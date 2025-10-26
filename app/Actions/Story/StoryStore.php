<?php

namespace App\Actions\Story;

use App\Models\Domain;
use Dev\PHPActions\Action;
use App\Models\Story;
use App\Services\DomainService;
use App\Services\ProjectService;
use Dev\LaravelAssets\Actions\Image\ImageStore;
use Illuminate\Support\Str;

class StoryStore extends Action
{
    protected $validator = [
        'title' => 'required',
        'description' => 'required',
    ];

    public function handle()
    {
        $tags = $this->getData('tags');
        $title = $this->getData('title');
        $description = $this->getData('description');
        $image = $this->getData('image');

        $domain = DomainService::getDomain();

        if (!empty($tags)) {
            $tags = collect(explode(',', $tags))->map(function ($tag) {
                $value = trim($tag);

                return $value;
            });
        }

        $id = 's_' . now()->timestamp . '_' . strtolower(Str::random());

        $project = $project ?? ProjectService::getProject();

        if (!empty($image)) {
            $image = Action::build(ImageStore::class)->data([
                'file' => $image,
                'disk' => 'public',
            ])->options([
                'base64' => true,
            ])->run()->getData('image');
        } else {
            $image = $project->logo;
        }

        if (empty($image)) {
            return null;
        }

        $story = Story::create([
            'id' => $id,
            'tags' => $tags,
            'title' => $title,
            'description' => $description,
            'image_id' => $image->id,
            'project_id' => $domain->site->project->id
        ]);

        return [
            'story' => $story
        ];
    }
}
