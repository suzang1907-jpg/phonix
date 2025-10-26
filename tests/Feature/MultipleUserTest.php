<?php

namespace Tests\Feature;

use App\Models\Domain;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class MultipleUserTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function multiple_users_can_exists_count_2()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseCount('domains', 1);
        $this->assertDatabaseCount('sites', 1);
        $this->assertDatabaseCount('projects', 1);

        $user = $this->userCreate([
            'email' => 'test1@test.com'
        ]);
        $this->domainCreate($user, [
            'domain' => 'test1.com'
        ]);

        $this->assertDatabaseCount('users', 2);
        $this->assertDatabaseCount('projects', 2);
        $this->assertDatabaseCount('sites', 2);
        $this->assertDatabaseCount('domains', 2);
    }

    /** @test */
    public function multiple_users_can_exists_count_3()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseCount('projects', 1);
        $this->assertDatabaseCount('sites', 1);
        $this->assertDatabaseCount('domains', 1);

        $user = $this->userCreate([
            'email' => 'test1@test.com'
        ]);
        $this->domainCreate($user, [
            'domain' => 'test1.com'
        ]);

        $this->assertDatabaseCount('users', 2);
        $this->assertDatabaseCount('projects', 2);
        $this->assertDatabaseCount('sites', 2);
        $this->assertDatabaseCount('domains', 2);

        $user = $this->userCreate([
            'email' => 'test2@test.com'
        ]);
        $this->domainCreate($user, [
            'domain' => 'test2.com'
        ]);

        $this->assertDatabaseCount('users', 3);
        $this->assertDatabaseCount('projects', 3);
        $this->assertDatabaseCount('sites', 3);
        $this->assertDatabaseCount('domains', 3);
    }
}
