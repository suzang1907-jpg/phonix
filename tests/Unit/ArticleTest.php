<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class ArticleTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('articles', [
                'id',
                'title',
                'description',
                'phone_number',
                'whatsapp_number',
                'instagram',
                'twitter',
                'whatsapp_message',
                'info',
                'hidden_at',
                'image_id',
                'location_id',
                'project_id',
                'customer_id',
                'edit_password',
                'adsterra_link',
                'ad_link',
                'telegram',
                'last_seen_at',
                'meta'
            ])
        );
    }
}
