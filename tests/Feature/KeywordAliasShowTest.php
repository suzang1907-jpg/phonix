<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use App\Routing\Amp;
use App\Routing\Web;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class KeywordAliasShowTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_keyword_alias()
    {
        $user = $this->userCreate();
        $domain = $this->domainCreate($user);
        $this->authLogin($user);

        $keyword = $this->keywordCreate();

        $workspace = $this->workspaceCreate([
            'meta' => ['dynamic_keywords' => true]
        ]);

        $this->projectConnectWorkspace($domain->site->project_id, $workspace->id);

        $response = $this->get(Web::route('web.keyword.alias.show', [
            'id' => $keyword->id,
            'alias' => 'test'
        ]));

        $response->assertOk();
    }

    /** @test */
    public function keyword_alias_redirects_if_dynamic_keywords_disabled()
    {
        $user = $this->userCreate();
        $domain = $this->domainCreate($user);
        $this->authLogin($user);

        $keyword = $this->keywordCreate();

        $workspace = $this->workspaceCreate([
            'meta' => ['dynamic_keywords' => false]
        ]);

        $this->projectConnectWorkspace($domain->site->project_id, $workspace->id);

        $project = Project::where('id', $domain->site->project_id);

        $this->assertEquals($workspace->id, $project->workspace_id);

        $response = $this->get(Web::route('web.keyword.alias.show', [
            'id' => $keyword->id,
            'alias' => 'test'
        ]));

        $response->assertRedirect();
    }

    /** @test */
    public function keyword_alias_redirects_if_workspace_not_connected()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $keyword = $this->keywordCreate();

        $response = $this->get(Web::route('web.keyword.alias.show', [
            'id' => $keyword->id,
            'alias' => 'test'
        ]));

        $response->assertRedirect();
    }

    /** @test */
    public function a_guest_can_see_keyword_alias()
    {
        $user = $this->userCreate();
        $domain = $this->domainCreate($user);
        $this->authLogin($user);

        $keyword = $this->keywordCreate();

        $workspace = $this->workspaceCreate([
            'meta' => ['dynamic_keywords' => true]
        ]);

        $this->projectConnectWorkspace($domain->site->project_id, $workspace->id);

        $this->authLogout($user);

        $response = $this->get(Web::route('web.keyword.alias.show', [
            'id' => $keyword->id,
            'alias' => 'test'
        ]));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_keyword_alias_as_amp()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $keyword = $this->keywordCreate();

        $response = $this->get(Amp::route('amp.keyword.alias.show', [
            'id' => $keyword->id,
            'alias' => 'test'
        ]));

        $response->assertOk();
    }

    /** @test */
    public function keyword_page_contains_alias_amp_tag()
    {
        $user = $this->userCreate();
        $domain = $this->domainCreate($user);
        $this->authLogin($user);

        $keyword = $this->keywordCreate();

        $workspace = $this->workspaceCreate([
            'meta' => ['dynamic_keywords' => true]
        ]);

        $this->projectConnectWorkspace($domain->site->project_id, $workspace->id);

        $response = $this->get(Web::route('web.keyword.alias.show', [
            'id' => $keyword->id,
            'alias' => 'test'
        ]));

        $response->assertOk();

        $response->assertSee(Amp::route('amp.keyword.alias.show', [
            'id' => $keyword->id,
            'alias' => 'test'
        ]));
    }
}
