<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

final class IndexController
{
    public function __invoke(): JsonResponse
    {
        $products = Product::with('category')
            ->when(
                request('orderBy') === 'category',
                fn ($query, $orderBy) => $query->orderBy(
                    Category::select('name')->whereColumn('id', 'products.category_id'),
                    request('direction'),
                ),
            )
            ->when(
                request('orderBy'),
                fn ($query, $orderBy) => $query->orderBy($orderBy, request('direction')),
            )
            ->get();


        return response()->json([
           'products' => $products,
        ]);
    }
}
