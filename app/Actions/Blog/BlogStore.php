<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Models\BlogContent;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Dev\LaravelAssets\Actions\Image\ImageStore;

class BlogStore extends Action
{
    protected $validator = [
        'title' => 'required',
        'description' => 'required',
    ];

    protected $secure = [
        'id',
        'disable_location_bind',
        'project'
    ];

    public function handle()
    {
        $title = $this->getData('title');
        $description = $this->getData('description');
        $image = $this->getData('image');
        $id = $this->getData('id');
        $project = $this->getData('project');

        if (empty($id)) {
            $id = Str::slug($title, '_') . '_' . strtolower(Str::random());
        }

        $blog = Blog::where('id', $id)->get()->first();

        if (!empty($blog)) {
            return [
                'blog' => $blog
            ];
        }

        $project = $project ?? ProjectService::getProject();

        if (!empty($image)) {
            $image = Action::build(ImageStore::class)->data([
                'file' => $image,
                'disk' => 'public',
            ])->options([
                'base64' => true
            ])->run()->getData('image');
        } else {
            $image = $project->logo;
        }

        if (empty($image)) {
            return null;
        }

        $description = preg_replace('/\b((https?|ftp|file):\/\/|www\.)[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', ' ', $description);

        $description = trim($description);

        $format_result = Action::build(BlogFormatContent::class)->data([
            'title' => $title,
            'description' => $description
        ])->run()->getData();

        $blog_content = BlogContent::create([
            'id' => 'c_' . $id,
            'description' => $format_result['description'],
            'content' => $format_result['content'],
        ]);

        if (empty($blog_content)) {
            return null;
        }

        $short_description = strlen($format_result['description'] ?? '') > 200 ? mb_substr($format_result['description'] ?? '', 0, 200) . '...' : $format_result['description'] ?? '';

        $blogData = [
            'blog_content_id' => $blog_content->id,
            'id' => $id,
            'title' => $format_result['title'],
            'image_id' => $image->id,
            'project_id' => $project->id,
        ];

        if (!empty($short_description)) {
            $blogData['short_description'] = $short_description;
        }

        $blog = Blog::create($blogData);

        Artisan::call('blog:location-bind-all no');

        return [
            'blog' => $blog->refresh(),
        ];
    }
}
