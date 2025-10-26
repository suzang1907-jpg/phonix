<?php

use App\Constants\Share;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Story;
use App\Pages\Home;
use App\Models\Keyword;
use App\Models\Location;
use App\Pages\Search;
use App\Routing\Amp;
use Illuminate\Support\Facades\Route;

Route::middleware(['shield'])->group(function () {
    Route::middleware(['calculate.origin', 'localize'])->group(function () {
        Route::middleware(['only.domain.amp'])->group(function () {
            Route::group(['prefix' => 'amp/c/{can}/'], function () {
                /** Pingback */
                Amp::raw(Article::class, 'pingback', 'pingback');
                Amp::raw(Article::class, 'article/fetch', 'fetch');

                /** Share */
                Amp::raw(Share::class, 'support', 'support');
                /** Pages */
                Amp::raw(Home::class);
                Amp::raw(Home::class, 'reader', 'show.reader');
                Amp::raw(Search::class, 'search');
                Amp::raw(Search::class, 'search/reader', 'show.reader');

                /** Location */
                Amp::raw(Location::class, 'location/{country}', 'country.show');
                Amp::raw(Location::class, 'location/{country}/reader', 'country.show.reader');

                Amp::raw(Location::class, 'location/{country}/{city}', 'city.show');
                Amp::raw(Location::class, 'location/{country}/{city}/reader', 'city.show.reader');

                Amp::raw(Location::class, 'location/{country}/{city}/{district}', 'district.show');
                Amp::raw(Location::class, 'location/{country}/{city}/{district}/reader', 'district.show.reader');

                /** Models */
                Amp::raw(Blog::class, 'blog/list', 'list');
                Amp::raw(Article::class, 'article/list', 'list');
                Amp::raw(Story::class, 'story/list', 'list');
                Amp::raw(Blog::class, 'blog/{id}/reader', 'show.reader');
                Amp::raw(Story::class, 'story/{id}/reader', 'show.reader');
                Amp::raw(Blog::class, 'blog/{id}', 'show');
                Amp::raw(Article::class, 'article/{id}', 'show');
                Amp::raw(Article::class, 'article/{id}/chat', 'chat');
                Amp::raw(Article::class, 'article/{id}/phone', 'phone');
                Amp::raw(Article::class, 'article/{id}/whatsapp', 'whatsapp');
                Amp::raw(Story::class, 'story/{id}', 'show');

                /** Keyword */
                Amp::raw(Keyword::class, 'keyword/{id}/{alias}', 'alias.show');
                Amp::raw(Keyword::class, 'keyword/{id}/{alias}/reader', 'alias.show.reader');
                Amp::raw(Keyword::class, 'keyword/list', 'list');
                Amp::raw(Keyword::class, 'keyword/{id}', 'show');
            });

            Route::fallback(function () {
                return Amp::redirect('amp.home.show');
            });
        });
    });
});
