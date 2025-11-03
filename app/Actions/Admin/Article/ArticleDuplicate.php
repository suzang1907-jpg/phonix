<?php

namespace App\Actions\Admin\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Routing\Admin;
use App\Scopes\ArticleActiveScope;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Dev\PHPActions\Response;
use App\Services\ProjectService;
use Dev\LaravelAssets\Models\Image;
use Illuminate\Support\Facades\Storage;

class ArticleDuplicate extends Action
{
    public function handle()
    {
        $id = $this->getData('id');
        $customer_id = $this->getData('customer_id');

        $article = Article::withoutGlobalScope(ArticleActiveScope::class)->where('id', $id)->get()->first();

        if (empty($article)) {
            $article = Article::withoutGlobalScope(ArticleActiveScope::class)->inRandomOrder()->limit(1)->get()->first();
            if (empty($article)) {
                return Admin::redirect('admin.article.create');

                return;
            }
        }

        $image_id = $article->image_id;

        $logo = ProjectService::getProject()?->logo;

        if (! empty($logo)) {

            //copy('/var/www/html/storage/app/public/var/www/html/storage/app/' . $logo->relative_path, '/var/www/html/storage/app/public/'. $logo->relative_path . '_cp');

            $image = Image::create([
                'id' => 'i_' . now()->timestamp . '_cp',
                'data' => $logo->data,
                'disk' => $logo->disk,
                'relative_path' => '/var/www/html/storage/app/public/' . $logo->relative_path . '_cp'
            ]);
            $image_id = $image->id;
        }

        $new_article_data = [
            'id' => 'a_' . strtolower(Str::random(32)),
            'title' => "*",
            'description' => "Merhaba!",
            'whatsapp_message' => "Merhaba, [/location/] yazıyorum. Sizin ile görüşmek istiyorum.",
            'info' => "*",
            'project_id' => $article->project_id,
            'location_id' => $article->location_id,
            'hidden_at' => Carbon::now(),
            'image_id' => $image_id,
        ];

        $new_article = Article::create($new_article_data);

        if (empty($new_article)) {
            return;
        }

        return Admin::redirect('admin.article.edit', [
            'id' => $new_article->id,
            'customer_id' => $customer_id,
        ]);
    }
}
