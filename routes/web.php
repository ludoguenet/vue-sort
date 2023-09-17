<?php

declare(strict_types=1);

use App\Http\Controllers\Product\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('products.index');
