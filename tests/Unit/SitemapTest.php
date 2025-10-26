<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class SitemapTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('sitemaps', [
                'id',
                'domain_id',
                'google_sitemap_submitted_at',
                'google_site_id',
                'google_permission_level',
            ])
        );
    }
}
