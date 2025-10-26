<?php

use App\Files\Font;
use App\Files\Manifest;
use App\Files\Robots;
use App\Http\Controllers\Storage\StorageImageController;
use App\Http\Controllers\File\RssController;
use App\Files\Sitemap;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Project;
use App\Routing\File;
use Illuminate\Support\Facades\Route;
use Dev\LaravelAssets\Models\Image;

Route::middleware(['calculate.origin', 'localize'])->group(function () {
    /** Files */
    File::raw(Robots::class, 'robots.txt');
});

Route::middleware(['shield'])->group(function () {
    Route::middleware(['calculate.origin', 'localize'])->group(function () {
        /** Sitemap */
        File::raw(Sitemap::class, 'sitemap/stories/{page}/main.xml', 'stories');
        File::raw(Sitemap::class, 'sitemap/blogs/{page}/main.xml', 'blogs');
        File::raw(Sitemap::class, 'sitemap-keywords.xml', 'keywords');

        File::raw(Sitemap::class, 'sitemap/location/{page}/country.xml', 'location.country');

        File::raw(Sitemap::class, 'sitemap/location/{page}/city.xml', 'location.city');

        File::raw(Sitemap::class, 'sitemap/location/{page}/district.xml', 'location.district');

        File::raw(Sitemap::class, 'sitemap-main.xml', 'main');
        File::raw(Sitemap::class, 'sitemap.xml', 'show');
    });
});

Route::middleware(['shield'])->group(function () {
    Route::middleware(['calculate.origin', 'localize'])->group(function () {
        /** Manifest */
        File::raw(Manifest::class, 'manifest.json');
    });
});

Route::middleware(['shield'])->group(function () {
    Route::middleware(['calculate.origin', 'localize'])->group(function () {
        /** Fonts */
        File::raw(Font::class, 'font/roboto.css', 'roboto');
        File::raw(Font::class, 'font/noto-sans.css', 'noto.sans');
    });
});

Route::middleware(['shield', 'calculate.origin', 'localize'])->group(function () {
    File::file(Article::class, '{id}/water-mark', 'water.mark');
    File::file(Article::class, '{id}/banner', 'banner');
    File::file(Article::class, '{id}/main-image', 'main.image');
    File::file(Article::class, '{id}/image/{image_id}', 'image');
    File::file(Blog::class, '{id}/image/main', 'image.main');
    File::file(Image::class, '{id}', 'show');
});

Route::middleware(['shield', 'calculate.origin', 'localize'])->group(function () {
    /** Images" */
    File::raw(Project::class, 'p/{reference}/logo', 'reference.logo');
    File::raw(Project::class, 'p/{reference}/amp-logo', 'reference.amp.logo');
    File::raw(Project::class, 'p/{reference}/banner', 'reference.banner');

    File::raw(Project::class, 'p/logo', 'logo');
    File::raw(Project::class, 'p/amp-logo', 'amp.logo');
    File::raw(Project::class, 'p/banner', 'banner');
});

Route::name('file.')->group(function () {
    /** RSS */
    Route::middleware(['shield'])->group(function () {
        Route::middleware(['calculate.origin', 'localize'])->group(function () {
            Route::get('rss/blogs', [RssController::class, 'blogs'])->name('rss.blogs');
            Route::get('rss/articles', [RssController::class, 'articles'])->name('rss.articles');
            Route::get('rss/stories', [RssController::class, 'stories'])->name('rss.stories');
        });
    });
    /** Images */
    Route::middleware(['shield', 'calculate.origin', 'localize'])->group(function () {
        Route::get('/file/story/{id}/image/main', [StorageImageController::class, 'storyMain'])->name('story.image.main');
    });
});
