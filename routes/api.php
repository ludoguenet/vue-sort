<?php

use App\Http\Controllers\Api\Product\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/products', IndexController::class)->name('api.products');
