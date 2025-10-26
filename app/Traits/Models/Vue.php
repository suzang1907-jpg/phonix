<?php

namespace App\Traits\Models;

trait Vue
{
    public function vue()
    {
        $data = $this->toArray();

        return $data;
    }
}
