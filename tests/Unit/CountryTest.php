<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class CountryTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('countries', [
                'id',
                'country',
            ])
        );
    }

    /** @test */
    public function a_country_can_be_stored()
    {
        $country = $this->countryCreate();

        $this->assertNotEmpty($country);

        $this->assertDatabaseCount('countries', 1);
    }
}
