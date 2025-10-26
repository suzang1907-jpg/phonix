<?php

use App\Constants\DomainType;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Story;
use App\Pages\Home;
use App\Models\Keyword;
use App\Models\Location;
use App\Pages\Policy;
use App\Pages\Search;
use App\Routing\Amp;
use App\Routing\Web;
use App\Services\DomainService;
use Illuminate\Support\Facades\Route;

Route::middleware(['shield', 'light.renderer', 'url.redirect'])->group(function () {
    Route::middleware(['calculate.origin', 'localize'])->group(function () {
        Route::middleware(['only.domain.primary'])->group(function () {
            /** Models */
            Web::get(Blog::class, 'random', 'random.show');
            Web::get(Blog::class, 'list', 'list');
            Web::get(Article::class, 'list', 'list');
            Web::get(Story::class, 'list', 'list');
            Web::get(Blog::class, 'list/reader', 'list.reader');
            Web::post(Blog::class, '{id}/comment/store', 'comment.store');
            Web::get(Article::class, 'list/reader', 'list.reader');
            Web::get(Story::class, 'list/reader', 'list.reader');
            Web::get(Blog::class, '{id}/reader', 'show.reader');
            Web::get(Article::class, '{id}/reader', 'show.reader');
            Web::get(Story::class, '{id}/reader', 'show.reader');
            Web::get(Blog::class, '{id}');
            Web::get(Article::class, '{id}');
            Web::get(Story::class, '{id}');


            /** Keyword */
            Web::get(Keyword::class, 'list', 'list');
            Web::get(Keyword::class, '{id}');
            Web::get(Keyword::class, '{id}/reader', 'show.reader');
            Web::get(Keyword::class, '{id}/{alias}', 'alias.show');
            Web::get(Keyword::class, '{id}/{alias}/reader', 'alias.show.reader');

            /** Pages */
            Web::get(Home::class);
            Web::get(Home::class, 'reader', 'show.reader');
            Web::get(Search::class);
            Web::get(Search::class, 'reader', 'show.reader');
            Web::get(Policy::class, 'cookies', 'cookies');
            Web::get(Policy::class, 'dmca', 'dmca');

            /** Location */
            Web::get(Location::class, '{country}', 'country.show');
            Web::get(Location::class, '{country}/reader', 'country.show.reader');

            Web::get(Location::class, '{country}/{city}', 'city.show');
            Web::get(Location::class, '{country}/{city}/reader', 'city.show.reader');

            Web::get(Location::class, '{country}/{city}/{district}', 'district.show');
            Web::get(Location::class, '{country}/{city}/{district}/reader', 'district.show.reader');
        });

        Route::fallback(function () {
            $domain = DomainService::getDomain();

            if ($domain->type != DomainType::$primary) {
                return Amp::redirect('amp.home.show');
            }

            if (str_contains(url()->full(), '/amp')) {
                return Amp::redirect('amp.home.show');
            } else {
                return Web::redirect('web.home.show');
            }
        });
    });
});
