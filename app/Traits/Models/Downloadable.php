<?php

namespace App\Traits\Models;

trait Downloadable
{
    public function downloadable()
    {
        $data = $this->toArray();

        return json_encode($data);
    }
}
