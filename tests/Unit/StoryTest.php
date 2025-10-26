<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class StoryTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('stories', [
                'id',
                'title',
                'description',
                'location_id',
                'tags',
                'location_connected_at',
                'image_id',
                'project_id'
            ])
        );
    }
}
