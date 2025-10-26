<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class CityTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('cities', [
                'id',
                'country_id',
                'city',
            ])
        );
    }

    /** @test */
    public function a_city_can_be_stored()
    {
        $country = $this->countryCreate();
        $city = $this->cityCreate($country);

        $this->assertNotEmpty($city);

        $this->assertDatabaseCount('cities', 1);
    }
}
