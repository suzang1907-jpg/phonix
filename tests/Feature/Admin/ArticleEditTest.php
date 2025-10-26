<?php

namespace Tests\Feature\Admin;

use App\Routing\Admin;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class ArticleEditTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_article_edit_page()
    {
        $user = $this->userCreate();

        $this->authLogin($user);

        $this->domainCreate($user);

        $article = $this->articleCreate();

        $response = $this->get(Admin::route('admin.article.edit', ['id' => $article->id]));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_not_see_article_create_page()
    {
        $user = $this->userCreate();

        $this->domainCreate($user);

        $this->authLogin($user);

        $article = $this->articleCreate();

        $this->authLogout($user);
        
        $response = $this->get(Admin::route('admin.article.edit', ['id' => $article->id]));

        $response->assertRedirect();
    }
}
