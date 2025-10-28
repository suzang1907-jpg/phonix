<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog/random' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.blog.random.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.blog.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/article/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.article.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/story/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.story.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog/list/reader' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.blog.list.reader',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/article/list/reader' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.article.list.reader',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/story/list/reader' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.story.list.reader',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/keyword/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.keyword.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.home.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reader' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.home.show.reader',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.search.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search/reader' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.search.show.reader',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/policy/cookies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.policy.cookies',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/policy/dmca' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.policy.dmca',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/robots.txt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.robots.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap-keywords.xml' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.sitemap.keywords',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap-main.xml' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.sitemap.main',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap.xml' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.sitemap.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manifest.json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.manifest.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/font/roboto.css' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.font.roboto',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/font/noto-sans.css' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.font.noto.sans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/p/logo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.project.logo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/p/amp-logo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.project.amp.logo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/p/banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.project.banner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rss/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.rss.blogs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rss/articles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.rss.articles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rss/stories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.rss.stories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.auth.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/login/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.auth.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/xbuild/admin/manifest.json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.asset.show.secured.manifest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.auth.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/site/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.site.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/map/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.map.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/maps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.location.map.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/map/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.location.map.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.location.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/country/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.location.country.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/city/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.location.city.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/district/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.location.district.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/googleintegration/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.googleintegration.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/googleintegration/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.googleintegration.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/googleintegration/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.googleintegration.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/domain/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.domain.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/domain/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.domain.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/domain/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.domain.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/domain/import/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.domain.import.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/domain/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.domain.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/url/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.url.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/light/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.light.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article/duplicate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.article.duplicate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article/analytics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.article.analytics',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.article.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.article.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.article.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/story/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.story.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/story/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.story.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/story/import/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.story.import.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/story/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.story.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/story/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.story.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/import/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.import.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/keyword/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyword.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/keyword/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyword.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/keyword/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyword.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/keyword/import/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyword.import.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/keyword/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyword.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tag/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tag/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tag/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/backup/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.backup.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sitemap/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sitemap.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sitemap/sync' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sitemap.sync',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/log/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.log.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/search/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.search.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/workspace/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.workspace.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/workspace/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.workspace.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/workspace/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.workspace.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/workspace/cache/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.workspace.cache.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/workspace/cloudflare/sync' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.workspace.cloudflare.sync',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/googleauthentication/authentication-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.googleauthentication.authentication.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.auth.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/auth/login/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.auth.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.auth.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.dashboard.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/customer/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.customer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/customer/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.customer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/customer/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.customer.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/article/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.article.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/article/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.article.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.auth.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/auth/login/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.auth.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.auth.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.dashboard.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/location/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/location/map/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.location.map.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.search.admindashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.customer.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/search/employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.customer.search.employee',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/server/domains' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.server.domains',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/server/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.server.blogs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/server/keywords' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.server.keywords',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/blog/([^/]++)(?|/(?|comment/store(*:41)|reader(*:54))|(*:62))|/a(?|rticle/([^/]++)(?|/reader(*:100)|(*:108))|dmin/(?|s(?|ite(?|/([^/]++)/(?|show(*:152)|dns/list(*:168))|map/([^/]++)/submit(*:196))|tory/([^/]++)/(?|update(*:228)|edit(*:240)|destroy(*:255)))|map/destroy/([^/]++)(*:285)|google(?|integration/([^/]++)/delete(*:329)|authentication/([^/]++)/authenticate(*:373))|domain/([^/]++)/(?|update(*:407)|sync\\-adsterra(*:429)|edit(*:441)|destroy(*:456))|customer/([^/]++)/(?|destroy(*:493)|edit(*:505)|update(*:519))|article/([^/]++)/(?|update(*:554)|e(?|dit(*:569)|nable(*:582))|d(?|estroy(*:601)|isable(*:615)))|blog/([^/]++)/(?|update(*:648)|edit(*:660)|destroy(*:675))|project/([^/]++)/(?|edit(*:708)|update(*:722))|keyword/([^/]++)/(?|edit(*:755)|destroy(*:770)|update(*:784))|tag/([^/]++)/(?|edit(*:813)|destroy(*:828)|update(*:842)))|mp/c/([^/]++)(?|/(?|pingback(*:880)|article/(?|fetch(*:904)|list(*:916)|([^/]++)(?|(*:935)|/(?|chat(*:951)|phone(*:964)|whatsapp(*:980))))|s(?|upport(*:1001)|earch(?|(*:1018)|/reader(*:1034))|tory/(?|list(*:1056)|([^/]++)(?|/reader(*:1083)|(*:1092))))|reader(*:1110)|location/([^/]++)(?|(*:1139)|/(?|reader(*:1158)|([^/]++)(?|(*:1178)|/(?|reader(*:1197)|([^/]++)(?|(*:1217)|/reader(*:1233))))))|blog/(?|list(*:1259)|([^/]++)(?|/reader(*:1286)|(*:1295)))|keyword/(?|([^/]++)/([^/]++)(?|(*:1337)|/reader(*:1353))|list(*:1367)|([^/]++)(*:1384)))|(*:1395)))|/s(?|tory/([^/]++)(?|/reader(*:1434)|(*:1443))|itemap/(?|stories/([^/]++)/main\\.xml(*:1489)|blogs/([^/]++)/main\\.xml(*:1522)|location/([^/]++)/(?|c(?|ountry\\.xml(*:1567)|ity\\.xml(*:1584))|district\\.xml(*:1607))))|/keyword/([^/]++)(?|(*:1639)|/(?|reader(*:1658)|([^/]++)(?|(*:1678)|/reader(*:1694))))|/location/([^/]++)(?|(*:1727)|/(?|reader(*:1746)|([^/]++)(?|(*:1766)|/(?|reader(*:1785)|([^/]++)(?|(*:1805)|/reader(*:1821))))))|/file/(?|article/([^/]++)/(?|water\\-mark(*:1875)|banner(*:1890)|main\\-image(*:1910)|image/([^/]++)(*:1933))|blog/([^/]++)/image/main(*:1967)|image/([^/]++)(*:1990)|story/([^/]++)/image/main(*:2024))|/p/([^/]++)/(?|logo(*:2053)|amp\\-logo(*:2071)|banner(*:2086))|/xbuild/admin/assets/([^/]++)(*:2125)|/employee/(?|customer/([^/]++)(?|(*:2167)|/(?|update(*:2186)|destroy(*:2202)))|article/([^/]++)(?|(*:2232)|/(?|update(*:2251)|d(?|estroy(*:2270)|isable(*:2285))|enable(*:2301))))|/customer/article/([^/]++)(?|(*:2342)|/(?|e(?|dit\\-password/(?|generate(*:2384)|delete(*:2399))|xternal(*:2416))|update(?|(*:2435)|/external(*:2453))))|/(.*)(*:2470))/?$}sDu',
    ),
    3 => 
    array (
      41 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.blog.comment.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      54 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.blog.show.reader',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      62 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.blog.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.article.show.reader',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.article.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.site.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.site.dns.list',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sitemap.submit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.story.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.story.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.story.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.map.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.googleintegration.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.googleauthentication.authenticate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.domain.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.domain.sync.adsterra',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.domain.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.domain.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.article.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.article.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.article.enable',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      601 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.article.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.article.disable',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      675 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.project.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.project.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyword.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      770 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyword.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyword.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      813 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      842 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.article.pingback',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.article.fetch',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.article.list',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      935 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.article.show',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.article.chat',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.article.phone',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.article.whatsapp',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.share.support',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.search.show',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.search.show.reader',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.story.list',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.story.show.reader',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1092 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.story.show',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.home.show.reader',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.location.country.show',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.location.country.show.reader',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.location.city.show',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'country',
            2 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.location.city.show.reader',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'country',
            2 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.location.district.show',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'country',
            2 => 'city',
            3 => 'district',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.location.district.show.reader',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'country',
            2 => 'city',
            3 => 'district',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.blog.list',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.blog.show.reader',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.blog.show',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.keyword.alias.show',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
            2 => 'alias',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.keyword.alias.show.reader',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
            2 => 'alias',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.keyword.list',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.keyword.show',
          ),
          1 => 
          array (
            0 => 'can',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amp.home.show',
          ),
          1 => 
          array (
            0 => 'can',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1434 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.story.show.reader',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.story.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.sitemap.stories',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.sitemap.blogs',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.sitemap.location.country',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.sitemap.location.city',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.sitemap.location.district',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.keyword.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.keyword.show.reader',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.keyword.alias.show',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'alias',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.keyword.alias.show.reader',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'alias',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1727 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.location.country.show',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1746 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.location.country.show.reader',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.location.city.show',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.location.city.show.reader',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.location.district.show',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'city',
            2 => 'district',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.location.district.show.reader',
          ),
          1 => 
          array (
            0 => 'country',
            1 => 'city',
            2 => 'district',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.article.water.mark',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.article.banner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.article.main.image',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.article.image',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'image_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.blog.image.main',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1990 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.image.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.story.image.main',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2053 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.project.reference.logo',
          ),
          1 => 
          array (
            0 => 'reference',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2071 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.project.reference.amp.logo',
          ),
          1 => 
          array (
            0 => 'reference',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.project.reference.banner',
          ),
          1 => 
          array (
            0 => 'reference',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.asset.show.secured.build',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2167 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.customer.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.customer.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.customer.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2232 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.article.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.article.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.article.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.article.disable',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.article.enable',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.article.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.article.edit.password.generate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2399 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.article.edit.password.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.article.edit.external',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.article.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.article.update.external',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZspR1EZNWFaU4bSM',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.blog.random.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/random',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"randomShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"web.blog.random.show";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:3:"Web";s:5:"class";s:39:"App\\Http\\Controllers\\Web\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008af0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.blog.random.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.blog.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:13:"web.blog.list";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:3:"Web";s:5:"class";s:39:"App\\Http\\Controllers\\Web\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008b10000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.blog.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.article.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'article/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"web.article.list";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Web";s:5:"class";s:42:"App\\Http\\Controllers\\Web\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008b30000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.article.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.story.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'story/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:14:"web.story.list";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:3:"Web";s:5:"class";s:40:"App\\Http\\Controllers\\Web\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008b50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.story.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.blog.list.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/list/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"listReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"web.blog.list.reader";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:3:"Web";s:5:"class";s:39:"App\\Http\\Controllers\\Web\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008b70000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.blog.list.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.blog.comment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'blog/{id}/comment/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:12:"commentStore";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"web.blog.comment.store";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:3:"Web";s:5:"class";s:39:"App\\Http\\Controllers\\Web\\BlogController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008b90000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.blog.comment.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.article.list.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'article/list/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"listReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"web.article.list.reader";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Web";s:5:"class";s:42:"App\\Http\\Controllers\\Web\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008bb0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.article.list.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.story.list.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'story/list/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"listReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"web.story.list.reader";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:3:"Web";s:5:"class";s:40:"App\\Http\\Controllers\\Web\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008bd0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.story.list.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.blog.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{id}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"showReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"web.blog.show.reader";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:3:"Web";s:5:"class";s:39:"App\\Http\\Controllers\\Web\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008bf0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.blog.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.article.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'article/{id}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"showReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"web.article.show.reader";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Web";s:5:"class";s:42:"App\\Http\\Controllers\\Web\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008c10000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.article.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.story.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'story/{id}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"showReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"web.story.show.reader";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:3:"Web";s:5:"class";s:40:"App\\Http\\Controllers\\Web\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008c30000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.story.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.blog.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:13:"web.blog.show";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:3:"Web";s:5:"class";s:39:"App\\Http\\Controllers\\Web\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008c50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.blog.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.article.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'article/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"web.article.show";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Web";s:5:"class";s:42:"App\\Http\\Controllers\\Web\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008c70000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.article.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.story.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'story/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:14:"web.story.show";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:3:"Web";s:5:"class";s:40:"App\\Http\\Controllers\\Web\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008c90000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.story.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.keyword.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'keyword/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"web.keyword.list";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:3:"Web";s:5:"class";s:42:"App\\Http\\Controllers\\Web\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008cb0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.keyword.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.keyword.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'keyword/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"web.keyword.show";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:3:"Web";s:5:"class";s:42:"App\\Http\\Controllers\\Web\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008cd0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.keyword.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.keyword.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'keyword/{id}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"showReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"web.keyword.show.reader";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:3:"Web";s:5:"class";s:42:"App\\Http\\Controllers\\Web\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008cf0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.keyword.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.keyword.alias.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'keyword/{id}/{alias}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"aliasShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"web.keyword.alias.show";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:3:"Web";s:5:"class";s:42:"App\\Http\\Controllers\\Web\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008d10000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.keyword.alias.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.keyword.alias.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'keyword/{id}/{alias}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:15:"aliasShowReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:29:"web.keyword.alias.show.reader";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:3:"Web";s:5:"class";s:42:"App\\Http\\Controllers\\Web\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008d30000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.keyword.alias.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.home.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:13:"web.home.show";s:6:"entity";s:14:"App\\Pages\\Home";s:12:"context_name";s:3:"Web";s:5:"class";s:39:"App\\Http\\Controllers\\Web\\HomeController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008d50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.home.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.home.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"showReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"web.home.show.reader";s:6:"entity";s:14:"App\\Pages\\Home";s:12:"context_name";s:3:"Web";s:5:"class";s:39:"App\\Http\\Controllers\\Web\\HomeController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008d70000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.home.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.search.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:15:"web.search.show";s:6:"entity";s:16:"App\\Pages\\Search";s:12:"context_name";s:3:"Web";s:5:"class";s:41:"App\\Http\\Controllers\\Web\\SearchController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008d90000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.search.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.search.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"showReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"web.search.show.reader";s:6:"entity";s:16:"App\\Pages\\Search";s:12:"context_name";s:3:"Web";s:5:"class";s:41:"App\\Http\\Controllers\\Web\\SearchController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008db0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.search.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.policy.cookies' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'policy/cookies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"cookies";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"web.policy.cookies";s:6:"entity";s:16:"App\\Pages\\Policy";s:12:"context_name";s:3:"Web";s:5:"class";s:41:"App\\Http\\Controllers\\Web\\PolicyController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008dd0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.policy.cookies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.policy.dmca' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'policy/dmca',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"dmca";s:9:"namespace";s:3:"App";s:9:"routeName";s:15:"web.policy.dmca";s:6:"entity";s:16:"App\\Pages\\Policy";s:12:"context_name";s:3:"Web";s:5:"class";s:41:"App\\Http\\Controllers\\Web\\PolicyController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008df0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.policy.dmca',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.location.country.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:11:"countryShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:25:"web.location.country.show";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Web";s:5:"class";s:43:"App\\Http\\Controllers\\Web\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008e10000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.location.country.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.location.country.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/{country}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:17:"countryShowReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:32:"web.location.country.show.reader";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Web";s:5:"class";s:43:"App\\Http\\Controllers\\Web\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008e30000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.location.country.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.location.city.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/{country}/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:8:"cityShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"web.location.city.show";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Web";s:5:"class";s:43:"App\\Http\\Controllers\\Web\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008e50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.location.city.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.location.city.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/{country}/{city}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:14:"cityShowReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:29:"web.location.city.show.reader";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Web";s:5:"class";s:43:"App\\Http\\Controllers\\Web\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008e70000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.location.city.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.location.district.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/{country}/{city}/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:12:"districtShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:26:"web.location.district.show";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Web";s:5:"class";s:43:"App\\Http\\Controllers\\Web\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008e90000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.location.district.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.location.district.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'location/{country}/{city}/{district}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'light.renderer',
          3 => 'url.redirect',
          4 => 'calculate.origin',
          5 => 'localize',
          6 => 'only.domain.primary',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:18:"districtShowReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:33:"web.location.district.show.reader";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Web";s:5:"class";s:43:"App\\Http\\Controllers\\Web\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008eb0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.location.district.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZspR1EZNWFaU4bSM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:95:"function () {
                return \\App\\Routing\\Amp::redirect(\'amp.home.show\');
            }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000a240000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZspR1EZNWFaU4bSM',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.robots.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'robots.txt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'calculate.origin',
          2 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"file.robots.show";s:6:"entity";s:16:"App\\Files\\Robots";s:12:"context_name";s:4:"File";s:5:"class";s:42:"App\\Http\\Controllers\\File\\RobotsController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008ac0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.robots.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.sitemap.stories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/stories/{page}/main.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"stories";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"file.sitemap.stories";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008f00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.sitemap.stories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.sitemap.blogs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/blogs/{page}/main.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"blogs";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"file.sitemap.blogs";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008f20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.sitemap.blogs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.sitemap.keywords' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap-keywords.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:8:"keywords";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"file.sitemap.keywords";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008f40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.sitemap.keywords',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.sitemap.location.country' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/location/{page}/country.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:15:"locationCountry";s:9:"namespace";s:3:"App";s:9:"routeName";s:29:"file.sitemap.location.country";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008f60000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.sitemap.location.country',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.sitemap.location.city' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/location/{page}/city.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:12:"locationCity";s:9:"namespace";s:3:"App";s:9:"routeName";s:26:"file.sitemap.location.city";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008f80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.sitemap.location.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.sitemap.location.district' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/location/{page}/district.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:16:"locationDistrict";s:9:"namespace";s:3:"App";s:9:"routeName";s:30:"file.sitemap.location.district";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008fa0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.sitemap.location.district',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.sitemap.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap-main.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"main";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"file.sitemap.main";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008fc0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.sitemap.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.sitemap.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"file.sitemap.show";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008fe0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.sitemap.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.manifest.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manifest.json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"file.manifest.show";s:6:"entity";s:18:"App\\Files\\Manifest";s:12:"context_name";s:4:"File";s:5:"class";s:44:"App\\Http\\Controllers\\File\\ManifestController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009000000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.manifest.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.font.roboto' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'font/roboto.css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"roboto";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"file.font.roboto";s:6:"entity";s:14:"App\\Files\\Font";s:12:"context_name";s:4:"File";s:5:"class";s:40:"App\\Http\\Controllers\\File\\FontController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009020000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.font.roboto',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.font.noto.sans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'font/noto-sans.css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:8:"notoSans";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"file.font.noto.sans";s:6:"entity";s:14:"App\\Files\\Font";s:12:"context_name";s:4:"File";s:5:"class";s:40:"App\\Http\\Controllers\\File\\FontController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009040000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.font.noto.sans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.article.water.mark' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file/article/{id}/water-mark',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"waterMark";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"file.article.water.mark";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008ee0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.article.water.mark',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.article.banner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file/article/{id}/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"banner";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"file.article.banner";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009060000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.article.banner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.article.main.image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file/article/{id}/main-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"mainImage";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"file.article.main.image";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009080000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.article.main.image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.article.image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file/article/{id}/image/{image_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"image";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"file.article.image";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000090a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.article.image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.blog.image.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file/blog/{id}/image/main',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"imageMain";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"file.blog.image.main";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:4:"File";s:5:"class";s:35:"App\\Http\\Controllers\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000090c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.blog.image.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.image.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file/image/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:15:"file.image.show";s:6:"entity";s:30:"Dev\\LaravelAssets\\Models\\Image";s:12:"context_name";s:4:"File";s:5:"class";s:41:"App\\Http\\Controllers\\File\\ImageController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000090e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.image.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.project.reference.logo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'p/{reference}/logo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:13:"referenceLogo";s:9:"namespace";s:3:"App";s:9:"routeName";s:27:"file.project.reference.logo";s:6:"entity";s:18:"App\\Models\\Project";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\ProjectController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009100000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.project.reference.logo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.project.reference.amp.logo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'p/{reference}/amp-logo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:16:"referenceAmpLogo";s:9:"namespace";s:3:"App";s:9:"routeName";s:31:"file.project.reference.amp.logo";s:6:"entity";s:18:"App\\Models\\Project";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\ProjectController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009120000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.project.reference.amp.logo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.project.reference.banner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'p/{reference}/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:15:"referenceBanner";s:9:"namespace";s:3:"App";s:9:"routeName";s:29:"file.project.reference.banner";s:6:"entity";s:18:"App\\Models\\Project";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\ProjectController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009140000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.project.reference.banner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.project.logo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'p/logo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"logo";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"file.project.logo";s:6:"entity";s:18:"App\\Models\\Project";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\ProjectController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009160000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.project.logo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.project.amp.logo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'p/amp-logo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"ampLogo";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"file.project.amp.logo";s:6:"entity";s:18:"App\\Models\\Project";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\ProjectController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009180000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.project.amp.logo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.project.banner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'p/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"banner";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"file.project.banner";s:6:"entity";s:18:"App\\Models\\Project";s:12:"context_name";s:4:"File";s:5:"class";s:43:"App\\Http\\Controllers\\File\\ProjectController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000091a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'file.project.banner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.rss.blogs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rss/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'App\\Http\\Controllers\\File\\RssController@blogs',
        'controller' => 'App\\Http\\Controllers\\File\\RssController@blogs',
        'as' => 'file.rss.blogs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.rss.articles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rss/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'App\\Http\\Controllers\\File\\RssController@articles',
        'controller' => 'App\\Http\\Controllers\\File\\RssController@articles',
        'as' => 'file.rss.articles',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.rss.stories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rss/stories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'App\\Http\\Controllers\\File\\RssController@stories',
        'controller' => 'App\\Http\\Controllers\\File\\RssController@stories',
        'as' => 'file.rss.stories',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.story.image.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file/story/{id}/image/main',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'App\\Http\\Controllers\\Storage\\StorageImageController@storyMain',
        'controller' => 'App\\Http\\Controllers\\Storage\\StorageImageController@storyMain',
        'as' => 'file.story.image.main',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.auth.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.primary',
          5 => 'only.guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"login";s:9:"namespace";s:3:"App";s:9:"routeName";s:14:"web.auth.login";s:6:"entity";s:14:"App\\Pages\\Auth";s:12:"context_name";s:3:"Web";s:5:"class";s:39:"App\\Http\\Controllers\\Web\\AuthController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009260000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.auth.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.auth.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'auth/login/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.primary',
          5 => 'only.guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"loginPost";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"web.auth.login.post";s:6:"entity";s:14:"App\\Pages\\Auth";s:12:"context_name";s:3:"Web";s:5:"class";s:39:"App\\Http\\Controllers\\Web\\AuthController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009280000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.auth.login.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.asset.show.secured.manifest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'xbuild/admin/manifest.json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:19:"showSecuredManifest";s:9:"namespace";s:3:"App";s:9:"routeName";s:33:"admin.asset.show.secured.manifest";s:6:"entity";s:30:"Dev\\LaravelAssets\\Models\\Asset";s:12:"context_name";s:5:"Admin";s:5:"class";s:36:"App\\Http\\Controllers\\AssetController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000008aa0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.asset.show.secured.manifest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.asset.show.secured.build' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'xbuild/admin/assets/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:16:"showSecuredBuild";s:9:"namespace";s:3:"App";s:9:"routeName";s:30:"admin.asset.show.secured.build";s:6:"entity";s:30:"Dev\\LaravelAssets\\Models\\Asset";s:12:"context_name";s:5:"Admin";s:5:"class";s:36:"App\\Http\\Controllers\\AssetController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000091c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.asset.show.secured.build',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.auth.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'admin/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"logout";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"admin.auth.logout";s:6:"entity";s:14:"App\\Pages\\Auth";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\AuthController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000092e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.auth.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.site.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/site/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:15:"admin.site.list";s:6:"entity";s:15:"App\\Models\\Site";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\SiteController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009300000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.site.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.site.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/site/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:15:"admin.site.show";s:6:"entity";s:15:"App\\Models\\Site";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\SiteController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009320000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.site.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.site.dns.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/site/{id}/dns/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"dnsList";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.site.dns.list";s:6:"entity";s:15:"App\\Models\\Site";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\SiteController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009340000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.site.dns.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.map.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/map/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:15:"admin.map.store";s:6:"entity";s:14:"App\\Models\\Map";s:12:"context_name";s:5:"Admin";s:5:"class";s:40:"App\\Http\\Controllers\\Admin\\MapController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009360000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.map.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.map.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/map/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"destroy";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"admin.map.destroy";s:6:"entity";s:14:"App\\Models\\Map";s:12:"context_name";s:5:"Admin";s:5:"class";s:40:"App\\Http\\Controllers\\Admin\\MapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009380000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.map.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.location.map.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/maps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"mapList";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"admin.location.map.list";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:5:"Admin";s:5:"class";s:45:"App\\Http\\Controllers\\Admin\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000093a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.location.map.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.location.map.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/map/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"mapCreate";s:9:"namespace";s:3:"App";s:9:"routeName";s:25:"admin.location.map.create";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:5:"Admin";s:5:"class";s:45:"App\\Http\\Controllers\\Admin\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000093c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.location.map.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.location.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.location.list";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:5:"Admin";s:5:"class";s:45:"App\\Http\\Controllers\\Admin\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000093e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.location.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.location.country.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/country/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:11:"countryList";s:9:"namespace";s:3:"App";s:9:"routeName";s:27:"admin.location.country.list";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:5:"Admin";s:5:"class";s:45:"App\\Http\\Controllers\\Admin\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009400000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.location.country.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.location.city.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/city/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:8:"cityList";s:9:"namespace";s:3:"App";s:9:"routeName";s:24:"admin.location.city.list";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:5:"Admin";s:5:"class";s:45:"App\\Http\\Controllers\\Admin\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009420000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.location.city.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.location.district.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/district/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:12:"districtList";s:9:"namespace";s:3:"App";s:9:"routeName";s:28:"admin.location.district.list";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:5:"Admin";s:5:"class";s:45:"App\\Http\\Controllers\\Admin\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009440000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.location.district.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.googleintegration.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/googleintegration/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:28:"admin.googleintegration.list";s:6:"entity";s:28:"App\\Models\\GoogleIntegration";s:12:"context_name";s:5:"Admin";s:5:"class";s:54:"App\\Http\\Controllers\\Admin\\GoogleIntegrationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009460000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.googleintegration.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.googleintegration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/googleintegration/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:29:"admin.googleintegration.store";s:6:"entity";s:28:"App\\Models\\GoogleIntegration";s:12:"context_name";s:5:"Admin";s:5:"class";s:54:"App\\Http\\Controllers\\Admin\\GoogleIntegrationController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009480000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.googleintegration.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.googleintegration.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/googleintegration/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"create";s:9:"namespace";s:3:"App";s:9:"routeName";s:30:"admin.googleintegration.create";s:6:"entity";s:28:"App\\Models\\GoogleIntegration";s:12:"context_name";s:5:"Admin";s:5:"class";s:54:"App\\Http\\Controllers\\Admin\\GoogleIntegrationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000094a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.googleintegration.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.googleintegration.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/googleintegration/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"delete";s:9:"namespace";s:3:"App";s:9:"routeName";s:30:"admin.googleintegration.delete";s:6:"entity";s:28:"App\\Models\\GoogleIntegration";s:12:"context_name";s:5:"Admin";s:5:"class";s:54:"App\\Http\\Controllers\\Admin\\GoogleIntegrationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000094c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.googleintegration.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.domain.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/domain/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.domain.update";s:6:"entity";s:17:"App\\Models\\Domain";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\DomainController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000094e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.domain.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.domain.sync.adsterra' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/domain/{id}/sync-adsterra',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:12:"syncAdsterra";s:9:"namespace";s:3:"App";s:9:"routeName";s:26:"admin.domain.sync.adsterra";s:6:"entity";s:17:"App\\Models\\Domain";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\DomainController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009500000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.domain.sync.adsterra',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.domain.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/domain/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"admin.domain.edit";s:6:"entity";s:17:"App\\Models\\Domain";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\DomainController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009520000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.domain.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.domain.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/domain/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"destroy";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.domain.destroy";s:6:"entity";s:17:"App\\Models\\Domain";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\DomainController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009540000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.domain.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.domain.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/domain/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"admin.domain.list";s:6:"entity";s:17:"App\\Models\\Domain";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\DomainController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009560000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.domain.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.domain.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/domain/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.domain.store";s:6:"entity";s:17:"App\\Models\\Domain";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\DomainController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009580000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.domain.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.domain.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/domain/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"create";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.domain.create";s:6:"entity";s:17:"App\\Models\\Domain";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\DomainController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000095a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.domain.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.domain.import.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/domain/import/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"importShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:24:"admin.domain.import.show";s:6:"entity";s:17:"App\\Models\\Domain";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\DomainController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000095c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.domain.import.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.domain.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/domain/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"import";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.domain.import";s:6:"entity";s:17:"App\\Models\\Domain";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\DomainController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000095e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.domain.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.customer.list";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:5:"Admin";s:5:"class";s:39:"App\\Http\\Controllers\\CustomerController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009600000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"create";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"admin.customer.create";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:5:"Admin";s:5:"class";s:39:"App\\Http\\Controllers\\CustomerController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009620000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customer/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.customer.store";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:5:"Admin";s:5:"class";s:39:"App\\Http\\Controllers\\CustomerController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009640000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"destroy";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"admin.customer.destroy";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:5:"Admin";s:5:"class";s:39:"App\\Http\\Controllers\\CustomerController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009660000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.customer.edit";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:5:"Admin";s:5:"class";s:39:"App\\Http\\Controllers\\CustomerController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009680000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customer/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"admin.customer.update";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:5:"Admin";s:5:"class";s:39:"App\\Http\\Controllers\\CustomerController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000096c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.customer.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.url.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/url/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:14:"admin.url.list";s:6:"entity";s:14:"App\\Models\\Url";s:12:"context_name";s:5:"Admin";s:5:"class";s:34:"App\\Http\\Controllers\\UrlController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000096b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.url.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.light.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/light/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"admin.light.list";s:6:"entity";s:16:"App\\Models\\Light";s:12:"context_name";s:5:"Admin";s:5:"class";s:36:"App\\Http\\Controllers\\LightController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000096e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.light.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.article.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/article/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.article.update";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ArticleController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009700000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.article.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.article.duplicate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/duplicate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"duplicate";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"admin.article.duplicate";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009720000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.article.duplicate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.article.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.article.edit";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009740000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.article.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.article.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"destroy";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"admin.article.destroy";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009760000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.article.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.article.analytics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/analytics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"analytics";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"admin.article.analytics";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009780000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.article.analytics',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.article.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.article.list";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000097a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.article.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.article.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/article/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.article.store";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ArticleController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000097c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.article.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.article.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"create";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.article.create";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000097e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.article.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.story.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/story/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.story.update";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:5:"Admin";s:5:"class";s:42:"App\\Http\\Controllers\\Admin\\StoryController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009800000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.story.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.story.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/story/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"admin.story.edit";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:5:"Admin";s:5:"class";s:42:"App\\Http\\Controllers\\Admin\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009820000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.story.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.story.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/story/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"destroy";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.story.destroy";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:5:"Admin";s:5:"class";s:42:"App\\Http\\Controllers\\Admin\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009840000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.story.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.story.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/story/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"admin.story.list";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:5:"Admin";s:5:"class";s:42:"App\\Http\\Controllers\\Admin\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009860000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.story.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.story.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/story/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"admin.story.store";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:5:"Admin";s:5:"class";s:42:"App\\Http\\Controllers\\Admin\\StoryController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009880000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.story.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.story.import.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/story/import/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"importShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"admin.story.import.show";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:5:"Admin";s:5:"class";s:42:"App\\Http\\Controllers\\Admin\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000098a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.story.import.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.story.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/story/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"import";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.story.import";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:5:"Admin";s:5:"class";s:42:"App\\Http\\Controllers\\Admin\\StoryController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000098c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.story.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.story.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/story/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"create";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.story.create";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:5:"Admin";s:5:"class";s:42:"App\\Http\\Controllers\\Admin\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000098e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.story.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"admin.blog.update";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\BlogController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009900000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:15:"admin.blog.edit";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009920000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"destroy";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.blog.destroy";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009940000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:15:"admin.blog.list";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009960000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"admin.blog.store";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\BlogController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009980000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.import.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/import/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"importShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"admin.blog.import.show";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000099a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.import.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"import";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"admin.blog.import";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\BlogController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000099c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"create";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"admin.blog.create";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:5:"Admin";s:5:"class";s:41:"App\\Http\\Controllers\\Admin\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000099e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.project.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/project/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.project.edit";s:6:"entity";s:18:"App\\Models\\Project";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ProjectController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009a00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.project.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.project.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/project/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.project.update";s:6:"entity";s:18:"App\\Models\\Project";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ProjectController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009a20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.project.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyword.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/keyword/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.keyword.list";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009a40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.keyword.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyword.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/keyword/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.keyword.store";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\KeywordController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009a60000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.keyword.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyword.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/keyword/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"create";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.keyword.create";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009a80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.keyword.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyword.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/keyword/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.keyword.edit";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009aa0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.keyword.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyword.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/keyword/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"destroy";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"admin.keyword.destroy";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009ac0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.keyword.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyword.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/keyword/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.keyword.update";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\KeywordController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009ae0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.keyword.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyword.import.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/keyword/import/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"importShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:25:"admin.keyword.import.show";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009b00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.keyword.import.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyword.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/keyword/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"import";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.keyword.import";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\KeywordController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009b20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.keyword.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tag.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:14:"admin.tag.list";s:6:"entity";s:14:"App\\Models\\Tag";s:12:"context_name";s:5:"Admin";s:5:"class";s:40:"App\\Http\\Controllers\\Admin\\TagController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009b40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.tag.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tag.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tag/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:15:"admin.tag.store";s:6:"entity";s:14:"App\\Models\\Tag";s:12:"context_name";s:5:"Admin";s:5:"class";s:40:"App\\Http\\Controllers\\Admin\\TagController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009b60000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.tag.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tag.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"create";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"admin.tag.create";s:6:"entity";s:14:"App\\Models\\Tag";s:12:"context_name";s:5:"Admin";s:5:"class";s:40:"App\\Http\\Controllers\\Admin\\TagController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009b80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.tag.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tag.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:14:"admin.tag.edit";s:6:"entity";s:14:"App\\Models\\Tag";s:12:"context_name";s:5:"Admin";s:5:"class";s:40:"App\\Http\\Controllers\\Admin\\TagController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009ba0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.tag.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tag.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"destroy";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"admin.tag.destroy";s:6:"entity";s:14:"App\\Models\\Tag";s:12:"context_name";s:5:"Admin";s:5:"class";s:40:"App\\Http\\Controllers\\Admin\\TagController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009bc0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.tag.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tag.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tag/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"admin.tag.update";s:6:"entity";s:14:"App\\Models\\Tag";s:12:"context_name";s:5:"Admin";s:5:"class";s:40:"App\\Http\\Controllers\\Admin\\TagController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009be0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.tag.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.article.disable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/{id}/disable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"disable";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"admin.article.disable";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009c00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.article.disable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.article.enable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/{id}/enable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"enable";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.article.enable";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009c20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.article.enable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.dashboard.show";s:6:"entity";s:19:"App\\Pages\\Dashboard";s:12:"context_name";s:5:"Admin";s:5:"class";s:46:"App\\Http\\Controllers\\Admin\\DashboardController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009c40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.backup.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'admin/backup/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"export";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"admin.backup.export";s:6:"entity";s:16:"App\\Pages\\Backup";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\BackupController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009c60000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.backup.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sitemap.submit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sitemap/{id}/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"submit";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.sitemap.submit";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009c80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.sitemap.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sitemap.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sitemap/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.sitemap.list";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009ca0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.sitemap.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sitemap.sync' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sitemap/sync',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"sync";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"admin.sitemap.sync";s:6:"entity";s:17:"App\\Files\\Sitemap";s:12:"context_name";s:5:"Admin";s:5:"class";s:44:"App\\Http\\Controllers\\Admin\\SitemapController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009cc0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.sitemap.sync',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.log.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/log/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:14:"admin.log.show";s:6:"entity";s:30:"Illuminate\\Support\\Facades\\Log";s:12:"context_name";s:5:"Admin";s:5:"class";s:40:"App\\Http\\Controllers\\Admin\\LogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009ce0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.log.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.search.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/search/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"admin.search.show";s:6:"entity";s:16:"App\\Pages\\Search";s:12:"context_name";s:5:"Admin";s:5:"class";s:43:"App\\Http\\Controllers\\Admin\\SearchController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009d00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.search.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.workspace.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workspace/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.workspace.show";s:6:"entity";s:20:"App\\Models\\Workspace";s:12:"context_name";s:5:"Admin";s:5:"class";s:46:"App\\Http\\Controllers\\Admin\\WorkspaceController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009d20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.workspace.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.workspace.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workspace/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"admin.workspace.edit";s:6:"entity";s:20:"App\\Models\\Workspace";s:12:"context_name";s:5:"Admin";s:5:"class";s:46:"App\\Http\\Controllers\\Admin\\WorkspaceController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009d40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.workspace.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.workspace.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/workspace/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"admin.workspace.update";s:6:"entity";s:20:"App\\Models\\Workspace";s:12:"context_name";s:5:"Admin";s:5:"class";s:46:"App\\Http\\Controllers\\Admin\\WorkspaceController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009d60000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.workspace.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.workspace.cache.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workspace/cache/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"cacheClear";s:9:"namespace";s:3:"App";s:9:"routeName";s:27:"admin.workspace.cache.clear";s:6:"entity";s:20:"App\\Models\\Workspace";s:12:"context_name";s:5:"Admin";s:5:"class";s:46:"App\\Http\\Controllers\\Admin\\WorkspaceController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009d80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.workspace.cache.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.workspace.cloudflare.sync' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/workspace/cloudflare/sync',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
          6 => 'verify.googleAuthentication',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:14:"cloudflareSync";s:9:"namespace";s:3:"App";s:9:"routeName";s:31:"admin.workspace.cloudflare.sync";s:6:"entity";s:20:"App\\Models\\Workspace";s:12:"context_name";s:5:"Admin";s:5:"class";s:46:"App\\Http\\Controllers\\Admin\\WorkspaceController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009da0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.workspace.cloudflare.sync',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.googleauthentication.authenticate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/googleauthentication/{id}/authenticate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:12:"authenticate";s:9:"namespace";s:3:"App";s:9:"routeName";s:39:"admin.googleauthentication.authenticate";s:6:"entity";s:31:"App\\Models\\GoogleAuthentication";s:12:"context_name";s:5:"Admin";s:5:"class";s:57:"App\\Http\\Controllers\\Admin\\GoogleAuthenticationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000092c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.googleauthentication.authenticate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.googleauthentication.authentication.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/googleauthentication/authentication-callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.user.token',
          5 => 'redirect.to.admin.domain',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:22:"authenticationCallback";s:9:"namespace";s:3:"App";s:9:"routeName";s:50:"admin.googleauthentication.authentication.callback";s:6:"entity";s:31:"App\\Models\\GoogleAuthentication";s:12:"context_name";s:5:"Admin";s:5:"class";s:57:"App\\Http\\Controllers\\Admin\\GoogleAuthenticationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009dc0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.googleauthentication.authentication.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.auth.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.primary',
          5 => 'only.employee.guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"login";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"employee.auth.login";s:6:"entity";s:14:"App\\Pages\\Auth";s:12:"context_name";s:8:"Employee";s:5:"class";s:44:"App\\Http\\Controllers\\Employee\\AuthController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009e00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.auth.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.auth.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/auth/login/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.primary',
          5 => 'only.employee.guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"loginPost";s:9:"namespace";s:3:"App";s:9:"routeName";s:24:"employee.auth.login.post";s:6:"entity";s:14:"App\\Pages\\Auth";s:12:"context_name";s:8:"Employee";s:5:"class";s:44:"App\\Http\\Controllers\\Employee\\AuthController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009e20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.auth.login.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.auth.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"logout";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"employee.auth.logout";s:6:"entity";s:14:"App\\Pages\\Auth";s:12:"context_name";s:8:"Employee";s:5:"class";s:44:"App\\Http\\Controllers\\Employee\\AuthController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"000000000000092a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.auth.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.dashboard.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"employee.dashboard.show";s:6:"entity";s:19:"App\\Pages\\Dashboard";s:12:"context_name";s:8:"Employee";s:5:"class";s:49:"App\\Http\\Controllers\\Employee\\DashboardController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009de0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.dashboard.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.customer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/customer/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"create";s:9:"namespace";s:3:"App";s:9:"routeName";s:24:"employee.customer.create";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:8:"Employee";s:5:"class";s:48:"App\\Http\\Controllers\\Employee\\CustomerController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009e40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.customer.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.customer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/customer/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"employee.customer.store";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:8:"Employee";s:5:"class";s:48:"App\\Http\\Controllers\\Employee\\CustomerController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009e60000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.customer.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.customer.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/customer/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"employee.customer.list";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:8:"Employee";s:5:"class";s:48:"App\\Http\\Controllers\\Employee\\CustomerController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009e80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.customer.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.customer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/customer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"employee.customer.edit";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:8:"Employee";s:5:"class";s:48:"App\\Http\\Controllers\\Employee\\CustomerController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009ea0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.customer.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.customer.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/customer/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:24:"employee.customer.update";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:8:"Employee";s:5:"class";s:48:"App\\Http\\Controllers\\Employee\\CustomerController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009ec0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.customer.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.customer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/customer/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"destroy";s:9:"namespace";s:3:"App";s:9:"routeName";s:25:"employee.customer.destroy";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:8:"Employee";s:5:"class";s:48:"App\\Http\\Controllers\\Employee\\CustomerController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009ee0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.customer.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.article.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/article/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"create";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"employee.article.create";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Employee";s:5:"class";s:47:"App\\Http\\Controllers\\Employee\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009f00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.article.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.article.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/article/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"store";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"employee.article.store";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Employee";s:5:"class";s:47:"App\\Http\\Controllers\\Employee\\ArticleController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009f20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.article.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.article.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/article/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"employee.article.edit";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Employee";s:5:"class";s:47:"App\\Http\\Controllers\\Employee\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009f40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.article.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.article.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/article/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"employee.article.update";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Employee";s:5:"class";s:47:"App\\Http\\Controllers\\Employee\\ArticleController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009f60000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.article.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.article.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/article/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"destroy";s:9:"namespace";s:3:"App";s:9:"routeName";s:24:"employee.article.destroy";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Employee";s:5:"class";s:47:"App\\Http\\Controllers\\Employee\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009f80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.article.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.article.disable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/article/{id}/disable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"disable";s:9:"namespace";s:3:"App";s:9:"routeName";s:24:"employee.article.disable";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Employee";s:5:"class";s:47:"App\\Http\\Controllers\\Employee\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009fa0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.article.disable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.article.enable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/article/{id}/enable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'employee',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"enable";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"employee.article.enable";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Employee";s:5:"class";s:47:"App\\Http\\Controllers\\Employee\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009fc0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.article.enable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.auth.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'customer',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.primary',
          5 => 'only.customer.guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"login";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"customer.auth.login";s:6:"entity";s:14:"App\\Pages\\Auth";s:12:"context_name";s:8:"Customer";s:5:"class";s:44:"App\\Http\\Controllers\\Customer\\AuthController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a020000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.auth.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.auth.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/auth/login/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'customer',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.primary',
          5 => 'only.customer.guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"loginPost";s:9:"namespace";s:3:"App";s:9:"routeName";s:24:"customer.auth.login.post";s:6:"entity";s:14:"App\\Pages\\Auth";s:12:"context_name";s:8:"Customer";s:5:"class";s:44:"App\\Http\\Controllers\\Customer\\AuthController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a040000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.auth.login.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.auth.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'customer',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.customer.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"logout";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"customer.auth.logout";s:6:"entity";s:14:"App\\Pages\\Auth";s:12:"context_name";s:8:"Customer";s:5:"class";s:44:"App\\Http\\Controllers\\Customer\\AuthController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009fe0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.auth.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.dashboard.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'customer',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.customer.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"customer.dashboard.show";s:6:"entity";s:19:"App\\Pages\\Dashboard";s:12:"context_name";s:8:"Customer";s:5:"class";s:49:"App\\Http\\Controllers\\Customer\\DashboardController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a000000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.dashboard.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.article.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/article/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'customer',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.customer.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"edit";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"customer.article.edit";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Customer";s:5:"class";s:47:"App\\Http\\Controllers\\Customer\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a060000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.article.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.article.edit.password.generate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/article/{id}/edit-password/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'customer',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.customer.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:20:"editPasswordGenerate";s:9:"namespace";s:3:"App";s:9:"routeName";s:39:"customer.article.edit.password.generate";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Customer";s:5:"class";s:47:"App\\Http\\Controllers\\Customer\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a080000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.article.edit.password.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.article.edit.password.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/article/{id}/edit-password/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'customer',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.customer.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:18:"editPasswordDelete";s:9:"namespace";s:3:"App";s:9:"routeName";s:37:"customer.article.edit.password.delete";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Customer";s:5:"class";s:47:"App\\Http\\Controllers\\Customer\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a0a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.article.edit.password.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.article.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/article/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'customer',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'verify.customer.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"update";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"customer.article.update";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Customer";s:5:"class";s:47:"App\\Http\\Controllers\\Customer\\ArticleController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a0c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.article.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.article.edit.external' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/article/{id}/external',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'customer',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:12:"editExternal";s:9:"namespace";s:3:"App";s:9:"routeName";s:30:"customer.article.edit.external";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Customer";s:5:"class";s:47:"App\\Http\\Controllers\\Customer\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"00000000000009240000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.article.edit.external',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.article.update.external' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/article/{id}/update/external',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'customer',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:14:"updateExternal";s:9:"namespace";s:3:"App";s:9:"routeName";s:32:"customer.article.update.external";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:8:"Customer";s:5:"class";s:47:"App\\Http\\Controllers\\Customer\\ArticleController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a0e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.article.update.external',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/location/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'cors',
          5 => 'verify.user.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"search";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"api.location.search";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Api";s:5:"class";s:43:"App\\Http\\Controllers\\Api\\LocationController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a140000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.location.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.location.map.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/location/map/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'cors',
          5 => 'verify.user.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"mapSearch";s:9:"namespace";s:3:"App";s:9:"routeName";s:23:"api.location.map.search";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Api";s:5:"class";s:43:"App\\Http\\Controllers\\Api\\LocationController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a160000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.location.map.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.search.admindashboard' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search/admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'cors',
          5 => 'verify.user.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:14:"adminDashboard";s:9:"namespace";s:3:"App";s:9:"routeName";s:25:"api.search.admindashboard";s:6:"entity";s:16:"App\\Pages\\Search";s:12:"context_name";s:3:"Api";s:5:"class";s:41:"App\\Http\\Controllers\\Api\\SearchController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a180000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.search.admindashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.customer.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'cors',
          5 => 'verify.user.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:6:"search";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"api.customer.search";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:3:"Api";s:5:"class";s:39:"App\\Http\\Controllers\\CustomerController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a1a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.customer.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.customer.search.employee' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/search/employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'cors',
          5 => 'verify.employee.token',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:14:"searchEmployee";s:9:"namespace";s:3:"App";s:9:"routeName";s:28:"api.customer.search.employee";s:6:"entity";s:19:"App\\Models\\Customer";s:12:"context_name";s:3:"Api";s:5:"class";s:39:"App\\Http\\Controllers\\CustomerController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a1c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.customer.search.employee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.server.domains' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/server/domains',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'shield',
          2 => 'cors',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"domains";s:9:"namespace";s:3:"App";s:9:"routeName";s:18:"api.server.domains";s:6:"entity";s:19:"App\\Services\\Server";s:12:"context_name";s:3:"Api";s:5:"class";s:41:"App\\Http\\Controllers\\Api\\ServerController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a100000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.server.domains',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.server.blogs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/server/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'shield',
          2 => 'cors',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"blogs";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"api.server.blogs";s:6:"entity";s:19:"App\\Services\\Server";s:12:"context_name";s:3:"Api";s:5:"class";s:41:"App\\Http\\Controllers\\Api\\ServerController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a120000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.server.blogs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.server.keywords' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/server/keywords',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'shield',
          2 => 'cors',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:8:"keywords";s:9:"namespace";s:3:"App";s:9:"routeName";s:19:"api.server.keywords";s:6:"entity";s:19:"App\\Services\\Server";s:12:"context_name";s:3:"Api";s:5:"class";s:41:"App\\Http\\Controllers\\Api\\ServerController";}s:8:"function";s:465:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@action\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a1e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.server.keywords',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.article.pingback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/pingback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:8:"pingback";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"amp.article.pingback";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a250000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.article.pingback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.article.fetch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/article/fetch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"fetch";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"amp.article.fetch";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a270000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.article.fetch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.share.support' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:7:"support";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"amp.share.support";s:6:"entity";s:19:"App\\Constants\\Share";s:12:"context_name";s:3:"Amp";s:5:"class";s:36:"App\\Http\\Controllers\\ShareController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a290000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.share.support',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.home.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:13:"amp.home.show";s:6:"entity";s:14:"App\\Pages\\Home";s:12:"context_name";s:3:"Amp";s:5:"class";s:39:"App\\Http\\Controllers\\Amp\\HomeController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a2b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.home.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.home.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"showReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"amp.home.show.reader";s:6:"entity";s:14:"App\\Pages\\Home";s:12:"context_name";s:3:"Amp";s:5:"class";s:39:"App\\Http\\Controllers\\Amp\\HomeController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a2d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.home.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.search.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:15:"amp.search.show";s:6:"entity";s:16:"App\\Pages\\Search";s:12:"context_name";s:3:"Amp";s:5:"class";s:41:"App\\Http\\Controllers\\Amp\\SearchController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a2f0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.search.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.search.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/search/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"showReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"amp.search.show.reader";s:6:"entity";s:16:"App\\Pages\\Search";s:12:"context_name";s:3:"Amp";s:5:"class";s:41:"App\\Http\\Controllers\\Amp\\SearchController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a310000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.search.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.location.country.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/location/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:11:"countryShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:25:"amp.location.country.show";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Amp";s:5:"class";s:43:"App\\Http\\Controllers\\Amp\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a330000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.location.country.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.location.country.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/location/{country}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:17:"countryShowReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:32:"amp.location.country.show.reader";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Amp";s:5:"class";s:43:"App\\Http\\Controllers\\Amp\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a350000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.location.country.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.location.city.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/location/{country}/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:8:"cityShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"amp.location.city.show";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Amp";s:5:"class";s:43:"App\\Http\\Controllers\\Amp\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a370000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.location.city.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.location.city.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/location/{country}/{city}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:14:"cityShowReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:29:"amp.location.city.show.reader";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Amp";s:5:"class";s:43:"App\\Http\\Controllers\\Amp\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a390000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.location.city.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.location.district.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/location/{country}/{city}/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:12:"districtShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:26:"amp.location.district.show";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Amp";s:5:"class";s:43:"App\\Http\\Controllers\\Amp\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a3b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.location.district.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.location.district.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/location/{country}/{city}/{district}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:18:"districtShowReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:33:"amp.location.district.show.reader";s:6:"entity";s:19:"App\\Models\\Location";s:12:"context_name";s:3:"Amp";s:5:"class";s:43:"App\\Http\\Controllers\\Amp\\LocationController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a3d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.location.district.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.blog.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/blog/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:13:"amp.blog.list";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:3:"Amp";s:5:"class";s:39:"App\\Http\\Controllers\\Amp\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a3f0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.blog.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.article.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/article/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"amp.article.list";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a410000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.article.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.story.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/story/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:14:"amp.story.list";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:3:"Amp";s:5:"class";s:40:"App\\Http\\Controllers\\Amp\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a430000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.story.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.blog.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/blog/{id}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"showReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"amp.blog.show.reader";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:3:"Amp";s:5:"class";s:39:"App\\Http\\Controllers\\Amp\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a450000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.blog.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.story.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/story/{id}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:10:"showReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:21:"amp.story.show.reader";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:3:"Amp";s:5:"class";s:40:"App\\Http\\Controllers\\Amp\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a470000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.story.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.blog.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/blog/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:13:"amp.blog.show";s:6:"entity";s:15:"App\\Models\\Blog";s:12:"context_name";s:3:"Amp";s:5:"class";s:39:"App\\Http\\Controllers\\Amp\\BlogController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a490000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.blog.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.article.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/article/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"amp.article.show";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a4b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.article.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.article.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/article/{id}/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"chat";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"amp.article.chat";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a4d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.article.chat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.article.phone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/article/{id}/phone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:5:"phone";s:9:"namespace";s:3:"App";s:9:"routeName";s:17:"amp.article.phone";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a4f0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.article.phone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.article.whatsapp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/article/{id}/whatsapp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:8:"whatsapp";s:9:"namespace";s:3:"App";s:9:"routeName";s:20:"amp.article.whatsapp";s:6:"entity";s:18:"App\\Models\\Article";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\ArticleController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a510000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.article.whatsapp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.story.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/story/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:14:"amp.story.show";s:6:"entity";s:16:"App\\Models\\Story";s:12:"context_name";s:3:"Amp";s:5:"class";s:40:"App\\Http\\Controllers\\Amp\\StoryController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a530000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.story.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.keyword.alias.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/keyword/{id}/{alias}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:9:"aliasShow";s:9:"namespace";s:3:"App";s:9:"routeName";s:22:"amp.keyword.alias.show";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a550000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.keyword.alias.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.keyword.alias.show.reader' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/keyword/{id}/{alias}/reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:15:"aliasShowReader";s:9:"namespace";s:3:"App";s:9:"routeName";s:29:"amp.keyword.alias.show.reader";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a570000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.keyword.alias.show.reader',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.keyword.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/keyword/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"list";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"amp.keyword.list";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a590000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.keyword.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amp.keyword.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'amp/c/{can}/keyword/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'amp',
          1 => 'shield',
          2 => 'calculate.origin',
          3 => 'localize',
          4 => 'only.domain.amp',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:6:{s:10:"methodName";s:4:"show";s:9:"namespace";s:3:"App";s:9:"routeName";s:16:"amp.keyword.show";s:6:"entity";s:18:"App\\Models\\Keyword";s:12:"context_name";s:3:"Amp";s:5:"class";s:42:"App\\Http\\Controllers\\Amp\\KeywordController";}s:8:"function";s:463:"function () use ($methodName, $namespace, $routeName, $entity, $context_name, $class) {
                    return \\Illuminate\\Support\\Facades\\App::call($class . \'@view\', [
                        \'entity\' => $entity,
                        \'type\' => $methodName,
                        \'namespace\' => $namespace,
                        \'routeName\' => $routeName,
                        \'contextName\' => $context_name
                    ]);
                }";s:5:"scope";s:26:"Dev\\LaravelHighway\\Highway";s:4:"this";N;s:4:"self";s:32:"0000000000000a5b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/amp/c/{can}',
        'where' => 
        array (
        ),
        'as' => 'amp.keyword.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
