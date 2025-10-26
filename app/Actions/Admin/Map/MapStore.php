<?php

namespace App\Actions\Admin\Map;

use App\Actions\Map\MapStore as MapMapStore;
use App\Routing\Admin;
use App\Routing\Api;
use Dev\PHPActions\Action;

class MapStore extends Action
{
    public function handle()
    {
        $map_location_id = $this->getData('map_location_id');
        $url = $this->getData('url');

        $map = Action::build(MapMapStore::class)->data([
            'map_location_id' => $map_location_id,
            'url' => $url
        ])->run()->getData('map');

        if (empty($map)) {
            return Api::error();
        }

        return Api::done([], Admin::route('admin.location.map.list'));
    }
}
