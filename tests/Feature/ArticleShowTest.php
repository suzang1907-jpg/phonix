<?php

namespace Tests\Feature;

use App\Models\Location;
use App\Routing\Amp;
use App\Routing\Web;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class ArticleShowTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_article_web_page()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $article = $this->articleCreate();

        $response = $this->get(Web::route('web.article.show', ['id' => $article->id]));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_article_web_page()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $article = $this->articleCreate();

        $this->authLogout($user);

        $response = $this->get(Web::route('web.article.show', ['id' => $article->id]));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_article_amp_page()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $article = $this->articleCreate();

        $response = $this->get(Amp::route('amp.article.show', ['id' => $article->id]));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_article_amp_page()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $article = $this->articleCreate();
        $country = $this->countryCreate();
        $this->assertNotEmpty($country);

        $location = $country->locations->first();

        $this->assertEmpty($article->location_id);

        $article1 = $this->articleCreate($user, [
            'article_location_id' => $location->id
        ]);

        $this->assertEquals($location->id, $article1->location_id);

        $this->authLogout($user);

        $response = $this->get(Amp::route('amp.article.show', ['id' => $article->id]));

        $response->assertOk();

        $response = $this->get(Amp::route('amp.article.show', ['id' => $article1->id]));

        $response->assertOk();
    }
}
