<?php

namespace App\Actions\Amp\Article;

use App\Models\Article;
use App\Routing\Amp;
use App\Services\LocalizationService;
use App\Services\LocationService;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Http;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;

class ArticleChat extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return Amp::redirect('amp.home.show');
        }

        $article = Article::where('id', $id)->get()->first();

        if (empty($article)) {
            return Amp::redirect('amp.home.show');
        }

        $token_url = config('app.chat_token_url');

        if (empty($token_url)) {
            return Amp::redirect('amp.home.show');
        }

        $api_key = config('app.chat_access_key');

        if (empty($api_key)) {
            return Amp::redirect('amp.home.show');
        }

        $location = LocationService::getLocation();

        $response = Http::post($token_url, [
            'api_access_token' => $api_key,
            'profiles' => [
                [
                    'moderated' => false,
                    'meta' => [
                        'country' => LocationService::getCountry()?->country,
                        'city' => LocationService::getCity()?->city,
                        'district' => LocationService::getDistrict()?->district,
                        'language' => LocalizationService::id($location),
                        'app_name' => ProjectService::getProject()?->name,
                    ]
                ],
                [
                    'uid' => Str::slug($article->title),
                    'name' => $article->title,
                    'moderated' => true,
                    'image_base64' => true,
                    'image' => base64_encode($article->image->content()),
                    'meta' => [
                        'country' => LocationService::getCountry()?->country,
                        'city' => LocationService::getCity()?->city,
                        'district' => LocationService::getDistrict()?->district,
                        'language' => LocalizationService::id($location),
                        'app_name' => ProjectService::getProject()?->name,
                    ]
                ]
            ]
        ]);

        if (empty($response)) {
            return Amp::redirect('amp.home.show');
        }

        $data = $response->json('data');

        if (empty($data)) {
            return Amp::redirect('amp.home.show');
        }

        $url = $data['url'] ?? null;

        if (empty($url)) {
            return Amp::redirect('amp.home.show');
        }

        return redirect($url);
    }
}
