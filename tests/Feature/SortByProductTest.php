<?php

declare(strict_types=1);

use App\Models\Product;
use Illuminate\Testing\Fluent\AssertableJson;
use function Pest\Laravel\get;

it('can sort by name', function () {
    Product::factory(3)
        ->sequence(
            [
                'name' => 'zbc'
            ],
            [
                'name' => 'ybc'
            ],
            [
                'name' => 'abc'
            ],
        )
        ->create();

    get(route('api.products', ['orderBy' => 'name', 'direction' => 'asc']))
        ->assertOk()
        ->assertJsonStructure(['products'])
        ->assertJson(
            fn (AssertableJson $json) => $json
                ->where('products.0.name', 'abc')
                ->where('products.2.name', 'zbc')
                ->etc()
        );

    get(route('api.products', ['orderBy' => 'name', 'direction' => 'desc']))
        ->assertOk()
        ->assertJsonStructure(['products'])
        ->assertJson(
            fn (AssertableJson $json) => $json
                ->where('products.0.name', 'zbc')
                ->where('products.2.name', 'abc')
                ->etc()
        );
})
    ->repeat(50)
    ->only();
