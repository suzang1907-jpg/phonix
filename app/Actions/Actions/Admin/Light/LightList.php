<?php

namespace App\Actions\Admin\Light;

use App\Models\Light;
use Dev\PHPActions\Action;

class LightList extends Action
{
    public function handle()
    {
        return [
            'title' => 'Light Cache',
            'lights' => Light::latest()->list(),
        ];
    }
}
