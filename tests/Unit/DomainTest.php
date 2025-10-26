<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class DomainTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('domains', [
                'id',
                'site_id',
                'location_id',
                'domain',
                'type',
                'dns_record_confirmed_at',
                'referal_domains',
                'meta'
            ])
        );
    }
}
