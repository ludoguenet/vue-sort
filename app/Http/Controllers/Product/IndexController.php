<?php

declare(strict_types=1);

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
//        $products = Product::with('category')
//            ->when(
//                $request->category,
//                fn ($query) => $query->orderBy(
//                    Category::select('name')->whereColumn('categories.id', 'products.category_id'),
//                ),
//            )
//            ->get();

        return view('products.index');
    }
}
