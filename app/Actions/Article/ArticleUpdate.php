<?php

namespace App\Actions\Article;

use App\Actions\Cache\CacheClear;
use App\Actions\Location\LocationGet;
use Dev\PHPActions\Action;
use App\Models\Article;
use App\Models\Customer;
use App\Scopes\ArticleActiveScope;
use Carbon\Carbon;
use Dev\LaravelAssets\Actions\Image\ImageStore;

class ArticleUpdate extends Action
{
    protected $validator = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function handle()
    {
        $id = $this->getData('id');
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
        $location_id = $this->getData('article_location_id');
        $telegram = $this->getData('telegram');
        $adsterra_link = $this->getData('adsterra_link');
        $ad_link = $this->getData('ad_link');
        $meta = $this->getData('meta');
        $customer = $this->getData('customer');

        $location = null;

        if (!empty($location_id)) {
            $location = Action::build(LocationGet::class)->data(['id' => $location_id])->run()->getData('location');
        }

        $main_image = Action::build(ImageStore::class)->data([
            'file' => $main_image,
            'disk' => 'public',
        ])->options([
            'base64' => true
        ])->run()->getData('image');

        $article = Article::where('id', $id)->withoutGlobalScope(ArticleActiveScope::class)->first();

        if (empty($article)) {
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

        if (!empty($telegram)) {
            $telegram = trim($telegram);

            if (strlen($telegram) > 500) {
                $telegram = substr($telegram, 0, 500);
            }

            $telegram = str_replace('@', '', $telegram);
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
        if (!empty($whatsapp_number)) {
            $whatsapp_number = str_replace(' ', '', $whatsapp_number);
            $whatsapp_number = str_replace('(', '', $whatsapp_number);
            $whatsapp_number = str_replace(')', '', $whatsapp_number);
$whatsapp_number = str_replace('-', '', $whatsapp_number);
            $whatsapp_number = str_replace('+900', '+90', $whatsapp_number);
        }

        if (!empty($phone_number)) {
            $phone_number = str_replace(' ', '', $phone_number);
            $phone_number = str_replace('(', '', $phone_number);
            $phone_number = str_replace(')', '', $phone_number);
$phone_number = str_replace('-', '', $phone_number);
            $phone_number = str_replace('+900', '+90', $phone_number);
        }

        $article_meta = [
            'renew_at' => $renew_at,
            'note' => $meta['note'] ?? null,
            'online' => $meta['online'] ?? false,
            'premium' => $meta['premium'] ?? false,
            'highlight' => $meta['highlight'] ?? false,
            'chat_enabled' => $meta['chat_enabled'] ?? false,
            'view_count' => $article->meta['view_count'] ?? 0,
            'price' => $price,
            'trc20_wallet' => $trc20_wallet,
        ];

        $articleData = [
            'whatsapp_message' => $whatsapp_message,
            'info' => $info,
            'title' => $title,
            'description' => $description,
            'phone_number' => $phone_number,
            'whatsapp_number' => $whatsapp_number,
            'image_id' => $main_image->id ?? $article->image_id,
            'twitter' => $twitter,
            'instagram' => $instagram,
            'telegram' => $telegram,
            'adsterra_link' => $adsterra_link,
            'ad_link' => $ad_link,
            'location_id' => $location?->id,
            'meta' => $article_meta
        ];

        if (! empty($customer)) {
            $customer = Customer::where('id', $customer)->first();

            if (empty($customer)) {
                return;
            } else {
                if ($customer->id != $article->customer_id) {
                    $articleData['edit_password'] = null;
                }

                $articleData['customer_id'] = $customer->id;
            }
        } else {
            $articleData['edit_password'] = null;
            $articleData['customer_id'] = null;
        }

        $article->update($articleData);

        $stored_images = [];

        if (!empty($images)) {
            $article->images()->detach();

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
