<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Models\Location;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Artisan;
use Dev\LaravelAssets\Actions\Image\ImageStore;

class BlogUpdate extends Action
{
    protected $validator = [
        'title' => 'required',
        'description' => 'required',
        'id' => 'required',
    ];

    public function handle()
    {
        $id = $this->getData('id');
        $title = $this->getData('title');
        $description = $this->getData('description');
        $main_image = $this->getData('main_image');

        $main_image = Action::build(ImageStore::class)->data([
            'file' => $main_image,
            'disk' => 'public',
        ])->options([
            'base64' => true
        ])->run()->getData('image');

        $blog = Blog::where('id', $id)->first();

        if (empty($blog)) {
            return null;
        }

        $description = preg_replace('/\b((https?|ftp|file):\/\/|www\.)[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', ' ', $description);

        $description = trim($description);

        $format_result = Action::build(BlogFormatContent::class)->data([
            'title' => $title,
            'description' => $description
        ])->run()->getData();

        $blogData = [
            'title' => $format_result['title'],
            'location_connected_at' => null,
        ];

        $blogContentData = [
            'description' => $format_result['description'],
            'content' => $format_result['content'],
        ];

        $short_description = strlen($format_result['description'] ?? '') > 200 ? mb_substr($format_result['description'] ?? '', 0, 200) . '...' : $format_result['description'] ?? '';

        if (!empty($main_image)) {
            $blogData['image_id'] = $main_image->id;
        }

        if (!empty($short_description)) {
            $blogData['short_description'] = $short_description;
        }

        $blog->update($blogData);

        $blog->blogContent?->update($blogContentData);

        Artisan::call('blog:location-bind-all no');

        return [
            'blog' => $blog,
        ];
    }
}
