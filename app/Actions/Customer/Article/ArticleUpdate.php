<?php

namespace App\Actions\Customer\Article;

use App\Actions\Cache\CacheClear;
use Dev\PHPActions\Action;
use App\Models\Article;
use App\Routing\Api;
use App\Routing\Customer;
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
        $telegram = $this->getData('telegram');

        if (empty($id)) {
            return Api::error();
        }

        if (!empty($title)) {
            $title = trim($title);

            if (strlen($title) > 12) {
                $title = substr($title, 0, 12);
            }
        }

        if (!empty($description)) {
            $description = trim($description);

            if (strlen($description) > 500) {
                $description = substr($description, 0, 500);
            }
        }

        if (!empty($telegram)) {
            $telegram = trim($telegram);

            if (strlen($telegram) > 500) {
                $telegram = substr($telegram, 0, 500);
            }

            $telegram = str_replace('@', '', $telegram);
        }

        if (!empty($info)) {
            $info = trim($info);

            if (strlen($info) > 12) {
                $info = substr($info, 0, 12);
            }
        }

        if (!empty($phone_number)) {
            $phone_number = trim($phone_number);
            $phone_number = str_replace(' ', '', $phone_number);
            if (strlen($phone_number) > 20) {
                $phone_number = substr($phone_number, 0, 20);
            }

            if (! str_starts_with($phone_number, '+')) {
                return Api::error([
                    'message' => 'phone_number_must_start_with_plus'
                ]);
            }
            $phone_number = str_replace('+900', '+90', $phone_number);
            $phone_number = str_replace('+0', '+90', $phone_number);
$phone_number = str_replace('-', '', $phone_number);
        }

        if (!empty($whatsapp_message)) {
            $whatsapp_message = trim($whatsapp_message);

            if (strlen($whatsapp_message) > 200) {
                $whatsapp_message = substr($whatsapp_message, 0, 200);
            }

            $whatsapp_message = str_replace('(Konum)', '[/location/]', $whatsapp_message);
        }

        if (!empty($whatsapp_number)) {
            $whatsapp_number = trim($whatsapp_number);
            $whatsapp_number = str_replace(' ', '', $whatsapp_number);

            if (strlen($whatsapp_number) > 20) {
                $whatsapp_number = substr($whatsapp_number, 0, 20);
            }

            if (! str_starts_with($whatsapp_number, '+')) {
                return Api::error([
                    'message' => 'whatsapp_number_must_start_with_plus'
                ]);
            }
            $whatsapp_number = str_replace('+900', '+90', $whatsapp_number);
            $whatsapp_number = str_replace('+0', '+90', $whatsapp_number);
$whatsapp_number = str_replace('-', '', $whatsapp_number);        
}

        $article = Article::where('id', $id)->get()->first();

        if (empty($article)) {
            return null;
        }

        if ($article->customer_id != auth('customer')->user()->id) {
            return;
        }


        $main_image = Action::build(ImageStore::class)->data([
            'file' => $main_image,
            'disk' => 'public',
        ])->options([
            'base64' => true
        ])->run()->getData('image');

        $article->update([
            'telegram' => $telegram,
            'whatsapp_message' => $whatsapp_message,
            'info' => $info,
            'title' => $title,
            'description' => $description,
            'phone_number' => $phone_number,
            'whatsapp_number' => $whatsapp_number,
            'image_id' => $main_image->id ?? $article->image_id,
        ]);

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

        return Api::done([], Customer::route('customer.dashboard.show'));
    }
}
