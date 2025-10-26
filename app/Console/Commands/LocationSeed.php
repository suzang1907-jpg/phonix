<?php

namespace App\Console\Commands;

use Dev\PHPActions\Action;
use App\Actions\City\CityStore;
use App\Actions\Country\CountryStore;
use App\Actions\District\DistrictStore;
use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\Location;
use App\Services\LocationConfigService;
use Illuminate\Console\Command;

class LocationSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'location:seed {country}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeds location';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Seeding locations...');

        $country = $this->argument('country');

        if (empty($country)) {
            $this->error('Country not set.');
            return;
        }

        $this->info('Country: ' . $country);

        $config_data = LocationConfigService::get(null, $country);

        if (empty($config_data)) {
            $this->error('Config is  empty.');
            return;
        }

        $cities = array_keys($config_data);

        $country_model = Action::build(CountryStore::class)->data([
            'country' => $country,
        ])->run()->getData('country');

        foreach ($cities as $city) {
            $this->info('Seeding city: ' . $city);
            Action::build(CityStore::class)->data([
                'city' => $city,
                'country_id' => $country_model->id
            ])->run();

            $districts = LocationConfigService::get($city, $country);

            foreach ($districts as $district) {
                Action::build(DistrictStore::class)->data([
                    'city' => $city,
                    'district' => $district
                ])->run();
            }
        }

        $this->info('Countries: ' . Country::count());
        $this->info('Cities: ' . City::count());
        $this->info('Districts: ' . District::count());
        $this->info('Locations: ' . Location::count());
        $this->output->success('Done.');
    }
}
