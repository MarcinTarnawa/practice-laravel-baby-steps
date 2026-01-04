<?php

namespace app\Models;

use Illuminate\Support\Arr;

class Menu {
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Home', 'href' => '/'],
            ['id' => 2, 'title' => 'Contact', 'href' => '/contact'],
            ['id' => 3, 'title' => 'About', 'href' => '/about'],
            ['id' => 4, 'title' => 'Weather', 'href' => '/weather'],
            ['id' => 5, 'title' => 'Product', 'href' => '/product'],
        ];
    }

    public static function find(int $id): array
    {
        $Menu = Arr::first(static::all(), fn($Menu) => $Menu['id'] == $id);

        if (! $Menu) {
            abort(404);
        }

        return $Menu;
    }
}