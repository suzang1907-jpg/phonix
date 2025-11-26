<?php

use App\Files\Sitemap;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Customer;
use App\Models\Domain;
use App\Models\GoogleAuthentication;
use App\Models\GoogleIntegration;
use App\Models\Keyword;
use App\Models\Light;
use App\Models\Project;
use App\Models\Site;
use App\Models\Story;
use App\Models\Tag;
use App\Pages\Auth;
use App\Pages\Backup;
use App\Pages\Dashboard;
use App\Models\Location;
use App\Models\Map;
use App\Models\Url;
use App\Models\Workspace;
use App\Pages\Search;
use App\Routing\Admin;
use App\Routing\Web;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Dev\LaravelAssets\Models\Asset;

Route::middleware(['shield'])->group(function () {
    Route::middleware(['calculate.origin', 'localize'])->group(function () {
        Route::middleware(['only.domain.primary'])->group(function () {
            Route::middleware(['only.guest'])->group(function () {
                /** Auth */
                Web::get(Auth::class, 'login', 'login');
                Web::post(Auth::class, 'login/post', 'login.post');
            });
        });
    });
});

/** Build */
Admin::raw(Asset::class, '/xbuild/admin/manifest.json', 'show.secured.manifest');
Admin::raw(Asset::class, '/xbuild/admin/assets/{id}', 'show.secured.build');

Route::middleware(['shield', 'calculate.origin', 'localize'])->group(function () {
    Route::middleware(['verify.user.token'])->group(function () {
        Route::middleware(['redirect.to.admin.domain'])->group(function () {
            Route::middleware(['verify.googleAuthentication'])->group(function () {
                /** Auth */
                Admin::any(Auth::class, 'logout', 'logout');

                /** Site */
                Admin::get(Site::class, 'list', 'list');
                Admin::get(Site::class, '{id}/show', 'show');
                Admin::get(Site::class, '{id}/dns/list', 'dns.list');

                /** Map */
                Admin::post(Map::class, 'store', 'store');
                Admin::get(Map::class, 'destroy/{id}', 'destroy');

                /** Location */
                Admin::get(Location::class, 'maps', 'map.list');
                Admin::get(Location::class, 'map/create', 'map.create');
                Admin::get(Location::class, 'list', 'list');
                Admin::get(Location::class, 'country/list', 'country.list');
                Admin::get(Location::class, 'city/list', 'city.list');
                Admin::get(Location::class, 'district/list', 'district.list');

                /** GoogleIntegration */
                Admin::get(GoogleIntegration::class, 'list', 'list');
                Admin::post(GoogleIntegration::class, 'store', 'store');
                Admin::get(GoogleIntegration::class, 'create', 'create');
                Admin::get(GoogleIntegration::class, '{id}/delete', 'delete');

                /** Domain */
                Admin::post(Domain::class, '{id}/update', 'update');
                Admin::get(Domain::class, '{id}/sync-adsterra', 'sync.adsterra');
                Admin::get(Domain::class, '{id}/edit', 'edit');
                Admin::get(Domain::class, '{id}/destroy', 'destroy');
                Admin::get(Domain::class, 'list', 'list');
                Admin::post(Domain::class, 'store', 'store');
                Admin::get(Domain::class, 'create', 'create');
                Admin::get(Domain::class, 'import/show', 'import.show');
                Admin::post(Domain::class, 'import', 'import');

                /** Customer */
                Admin::get(Customer::class, 'list', 'list');
                Admin::get(Customer::class, 'create', 'create');
                Admin::post(Customer::class, 'store', 'store');
                Admin::get(Customer::class, '{id}/destroy', 'destroy');
                Admin::get(Customer::class, '{id}/edit', 'edit');
                Admin::post(Customer::class, '{id}/update', 'update');
                Admin::post(Customer::class, '{id}/update', 'update');

                /** Url */
                Admin::get(Url::class, 'list', 'list');

                /** Light */
                Admin::get(Light::class, 'list', 'list');

                /** Article */
                Admin::post(Article::class, '{id}/update', 'update');
                Admin::get(Article::class, 'duplicate', 'duplicate');
                Admin::get(Article::class, '{id}/edit', 'edit');
                Admin::get(Article::class, '{id}/destroy', 'destroy');
                Admin::get(Article::class, 'analytics', 'analytics');
                Admin::get(Article::class, 'list', 'list');
                Admin::post(Article::class, 'store', 'store');
                Admin::get(Article::class, 'create', 'create');

                /** Story */
                Admin::post(Story::class, '{id}/update', 'update');
                Admin::get(Story::class, '{id}/edit', 'edit');
                Admin::get(Story::class, '{id}/destroy', 'destroy');
                Admin::get(Story::class, 'list', 'list');
                Admin::post(Story::class, 'store', 'store');
                Admin::get(Story::class, 'import/show', 'import.show');
                Admin::post(Story::class, 'import', 'import');
                Admin::get(Story::class, 'create', 'create');

                /** Blog */
                Admin::post(Blog::class, '{id}/update', 'update');
                Admin::get(Blog::class, '{id}/edit', 'edit');
                Admin::get(Blog::class, '{id}/destroy', 'destroy');
                Admin::get(Blog::class, 'list', 'list');
                Admin::post(Blog::class, 'store', 'store');
                Admin::get(Blog::class, 'import/show', 'import.show');
                Admin::post(Blog::class, 'import', 'import');
                Admin::get(Blog::class, 'create', 'create');

                /** Project */
                Admin::get(Project::class, '{id}/edit', 'edit');
                Admin::post(Project::class, '{id}/update', 'update');

                /** Keyword */
                Admin::get(Keyword::class, 'list', 'list');
                Admin::post(Keyword::class, 'store', 'store');
                Admin::get(Keyword::class, 'create', 'create');
                Admin::get(Keyword::class, '{id}/edit', 'edit');
                Admin::get(Keyword::class, '{id}/destroy', 'destroy');
                Admin::post(Keyword::class, '{id}/update', 'update');
                Admin::get(Keyword::class, 'import/show', 'import.show');
                Admin::post(Keyword::class, 'import', 'import');

                /** Tag */
                Admin::get(Tag::class, 'list', 'list');
                Admin::post(Tag::class, 'store', 'store');
                Admin::get(Tag::class, 'create', 'create');
                Admin::get(Tag::class, '{id}/edit', 'edit');
                Admin::get(Tag::class, '{id}/destroy', 'destroy');
                Admin::post(Tag::class, '{id}/update', 'update');

                /** Article */
                Admin::get(Article::class, '{id}/disable', 'disable');
                Admin::get(Article::class, '{id}/enable', 'enable');
                Admin::get(Article::class, '{id}/renew', 'renew');

                /** Dashboard */
                Admin::get(Dashboard::class, '');
                Admin::post(Dashboard::class, 'store', 'store');

                /** Backup */
                Admin::any(Backup::class, 'export', 'export');

                /** Sitemap */
                Admin::get(Sitemap::class, '{id}/submit', 'submit');
                Admin::get(Sitemap::class, 'list', 'list');
                Admin::get(Sitemap::class, 'sync', 'sync');

                /** Log */
                Admin::get(Log::class, 'show', 'show');

                /** Search */
                Admin::get(Search::class, 'show', 'show');

                /** Workspace */
                Admin::get(Workspace::class, 'show', 'show');
                Admin::get(Workspace::class, 'edit', 'edit');
                Admin::get(Workspace::class, 'create', 'create');
                Admin::post(Workspace::class, 'update', 'update');
                Admin::post(Workspace::class, 'store', 'store');
                Admin::get(Workspace::class, 'cache/clear', 'cache.clear');
                Admin::get(Workspace::class, 'cloudflare/sync', 'cloudflare.sync');
            });

            /** Google Authentication */
            Admin::get(GoogleAuthentication::class, '{id}/authenticate', 'authenticate');
            Admin::get(GoogleAuthentication::class, 'authentication-callback', 'authentication.callback');
        });
    });
});
