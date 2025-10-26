<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class DistrictTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('districts', [
                'id',
                'city_id',
                'district',
            ])
        );
    }

    /** @test */
    public function a_district_can_be_stored()
    {
        $country = $this->countryCreate();
        $city = $this->cityCreate($country);
        $district = $this->districtCreate($city);

        $this->assertNotEmpty($district);

        $this->assertDatabaseCount('districts', 1);
    }
}
