<?php

namespace App\Actions\Article;

use App\Actions\Cache\CacheClear;
use App\Actions\Location\LocationGet;
use Dev\PHPActions\Action;
use App\Models\Article;
use App\Models\Customer;
use App\Services\ProjectService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Dev\LaravelAssets\Actions\Image\ImageStore;

class ArticleStore extends Action
{
    protected $validator = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function handle()
    {
        $title = $this->getData('title');
        $info = $this->getData('info');
        $description = $this->getData('description');
        $main_image = $this->getData('main_image');
        $images = $this->getData('images');
        $phone_number = $this->getData('phone_number');
        $whatsapp_message = $this->getData('whatsapp_message');
        $whatsapp_number = $this->getData('whatsapp_number');
        $twitter = $this->getData('twitter');
        $instagram = $this->getData('instagram');
        $telegram = $this->getData('telegram');
        $adsterra_link = $this->getData('adsterra_link');
        $ad_link = $this->getData('ad_link');
        $location_id = $this->getData('article_location_id');
        $meta = $this->getData('meta');
        $customer = $this->getData('customer');

        $location = null;

        if (!empty($location_id)) {
            $location = Action::build(LocationGet::class)->data(['id' => $location_id])->run()->getData('location');

            if (empty($location)) {
                return null;
            }
        }

        $id = 'a_' . strtolower(Str::random(32));

        $image = Action::build(ImageStore::class)->data([
            'file' => $main_image,
            'disk' => 'public',
        ])->options([
            'base64' => true
        ])->run()->getData('image');

        if (empty($image)) {
            return null;
        }

        $renew_at = $meta['renew_at'] ?? null;
        $renew_date = null;

        if (! empty($renew_at)) {
            $renew_date = $renew_at['date'] ?? null;
            if (! empty($renew_date)) {
                $renew_at['date'] = Carbon::parse($renew_date)->toIso8601String();
            }
        }

        $price = $meta['price'] ?? null;

        if (! empty($price)) {
            $price = intval($price);
        }

        $trc20_wallet =  $meta['trc20_wallet'] ?? null;

        if (! empty($trc20_wallet)) {
            if (strlen($trc20_wallet) != 34) {
                return;
            }

            if (! str_starts_with($trc20_wallet, 'T')) {
                return;
            }
        }

        $articleData = [
            'image_id' => $image->id,
            'id' => $id,
            'whatsapp_message' => $whatsapp_message,
            'info' => $info,
            'title' => $title,
            'description' => $description,
            'phone_number' => $phone_number,
            'whatsapp_number' => $whatsapp_number,
            'twitter' => $twitter,
            'instagram' => $instagram,
            'telegram' => $telegram,
            'adsterra_link' => $adsterra_link,
            'ad_link' => $ad_link,
            'project_id' => ProjectService::getProject()->id,
            'location_id' => $location?->id,
            'meta' => [
                'note' => $meta['note'] ?? null,
                'renew_at' => $renew_at,
                'online' => false,
                'chat_enabled' => false,
                'price' => $price,
                'trc20_wallet' => $trc20_wallet,
            ],
        ];

        if (! empty($customer)) {
            $customer = Customer::where('id', $customer)->first();

            if (empty($customer)) {
                return;
            }

            $articleData['customer_id'] = $customer->id;
        }

        $article = Article::create($articleData);

        if (empty($article)) {
            return null;
        }

        $stored_images = [];

        if (!empty($images)) {
            $stored_images = collect($images)->map(function ($image) {
                if (empty($image)) {
                    return null;
                }
                return Action::build(ImageStore::class)->data([
                    'file' => $image,
                    'disk' => 'public',
                ])->options([
                    'base64' => true
                ])->run()->getData('image');
            });

            foreach ($stored_images as $stored_image) {
                if (empty($stored_image)) {
                    continue;
                }

                $article->images()->attach($stored_image->id);
            }
        }

        Action::build(CacheClear::class)->run();

        return [
            'article' => $article,
        ];
    }
}
