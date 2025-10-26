<?php

namespace App\Actions\Admin\Map;

use App\Models\Map;
use Dev\PHPActions\Action;

class MapDestroy extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return redirect()->back();
        }

        $map = Map::where('id', $id)->first();

        if (empty($map)) {
            return redirect()->back();
        }

        $map->delete();

        return redirect()->back();
    }
}
