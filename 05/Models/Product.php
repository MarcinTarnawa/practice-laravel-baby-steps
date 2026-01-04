<?php

namespace app\Models;

use Illuminate\Support\Arr;

class Product {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Xbox',
                'cost' => '$1,000'
            ],
            [
                'id' => 2,
                'title' => 'Car',
                'cost' => '$70,000'
            ],
            [
                'id' => 3,
                'title' => 'Computer',
                'cost' => '$5,000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $product = Arr::first(static::all(), fn($product) => $product['id'] == $id);

        if (! $product) {
            abort(404);
        }

        return $product;
    }
}