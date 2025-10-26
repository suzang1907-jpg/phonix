<?php

namespace App\Traits\Models;

use App\Routing\Amp;
use App\Routing\Web;

trait Viewable
{
    public static mixed $current = null;

    public function web(): string
    {
        return Web::route('web.' . strtolower(last(explode('\\', static::class))) . '.show', [
            'id' => $this->id
        ]);
    }

    public function amp(): string
    {
        return Amp::route('amp.' . strtolower(last(explode('\\', static::class))) . '.show', [
            'id' => $this->id
        ]);
    }

    public static function current(): self | null
    {
        if (!empty(self::$current)) {
            return self::$current;
        }

        $url = url()->full();

        if (!str_contains($url, '/' . strtolower(last(explode('\\', static::class))) . '/')) {
            return null;
        }

        $id = request()->id;

        if (empty($id)) {
            return null;
        }

        self::$current = self::where('id', $id)->limit(1)->first();

        return self::$current;
    }
}
