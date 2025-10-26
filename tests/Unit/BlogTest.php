<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class BlogTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('blogs', [
                'id',
                'title',
                'image_id',
                'location_id',
                'project_id',
                'short_description',
                'created_at',
                'updated_at',
                'blog_content_id'
            ])
        );
    }
}
