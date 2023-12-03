<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CollectionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Created routes group with middleware to verify shopify
Route::middleware(['verify.shopify'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/shop', function () {
        return view('shop');
    })->name('shop');

    Route::get('/collections', [CollectionController::class, 'index'])->name('collection.index');
    Route::get('/collections/create', [CollectionController::class, 'create'])->name('collection.create');
    Route::post('/collections', [CollectionController::class, 'store'])->name('collection.store');

    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
});
