<?php

namespace Tests;

use App\Models\Article;
use App\Models\Blog;
use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\Domain;
use App\Models\GoogleAuthentication;
use App\Models\Keyword;
use App\Models\Story;
use App\Models\Tag;
use App\Services\DomainService;
use App\Services\LocationService;
use App\Services\ProjectService;
use App\Services\SiteService;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\Helpers\ArticleTestHelperTrait;
use Tests\Helpers\AuthTestHelperTrait;
use Tests\Helpers\BlogTestHelperTrait;
use Tests\Helpers\CityTestHelperTrait;
use Tests\Helpers\CountryTestHelperTrait;
use Tests\Helpers\DistrictTestHelperTrait;
use Tests\Helpers\DomainTestHelperTrait;
use Tests\Helpers\KeywordTestHelperTrait;
use Tests\Helpers\ProjectTestHelperTrait;
use Tests\Helpers\SiteTestHelperTrait;
use Tests\Helpers\StoryTestHelperTrait;
use Tests\Helpers\TagTestHelperTrait;
use Tests\Helpers\UserTestHelperTrait;
use Tests\Helpers\WorkspaceTestHelperTrait;
use Dev\LaravelHighway\Traffic;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    use DomainTestHelperTrait;
    use UserTestHelperTrait;
    use BlogTestHelperTrait;
    use AuthTestHelperTrait;
    use ArticleTestHelperTrait;
    use StoryTestHelperTrait;
    use KeywordTestHelperTrait;
    use TagTestHelperTrait;
    use CountryTestHelperTrait;
    use CityTestHelperTrait;
    use DistrictTestHelperTrait;
    use ProjectTestHelperTrait;
    use SiteTestHelperTrait;
    use WorkspaceTestHelperTrait;

    public function tearDown(): void
    {
        Blog::$current = null;
        Article::$current = null;
        Story::$current = null;
        Keyword::$current = null;
        Tag::$current = null;
        Country::$current = null;
        City::$current = null;
        District::$current = null;
        GoogleAuthentication::$current = null;
        LocationService::setLocation(null);
        ProjectService::setProject(null);
        SiteService::setSite(null);
        DomainService::setDomain(null);
        Traffic::clear();
        parent::tearDown();
    }
}
