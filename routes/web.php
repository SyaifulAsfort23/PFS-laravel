<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\ControllersProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// ROUTE UNTUK USER LOGIN
Route::middleware('auth')->group(function () {

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // PRODUCTS (VIEW SAJA)
    Route::get('/products', [ProductController::class, 'index'])
        ->middleware('permission:view products')
        ->name('products.index');

    Route::get('/products/{product}', [ProductController::class, 'show'])
        ->middleware('permission:view products')
        ->name('products.show');


    // CATEGORIES (VIEW SAJA)
    Route::get('/categories', [CategoryController::class, 'index'])
        ->middleware('permission:view categories')
        ->name('categories.index');

    Route::get('/categories/{category}', [CategoryController::class, 'show'])
        ->middleware('permission:view categories')
        ->name('categories.show');
});


// ROUTE KHUSUS ADMIN
Route::middleware(['auth', 'role:admin'])->group(function () {

    // PRODUCTS
    Route::get('/products/create', [ProductController::class, 'create'])
        ->middleware('permission:create products')
        ->name('products.create');

    Route::post('/products', [ProductController::class, 'store'])
        ->middleware('permission:create products')
        ->name('products.store');

    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])
        ->middleware('permission:edit products')
        ->name('products.edit');

    Route::put('/products/{product}', [ProductController::class, 'update'])
        ->middleware('permission:edit products')
        ->name('products.update');

    Route::delete('/products/{product}', [ProductController::class, 'destroy'])
        ->middleware('permission:delete products')
        ->name('products.destroy');

    // CATEGORIES
    Route::get('/categories/create', [CategoryController::class, 'create'])
        ->middleware('permission:create categories')
        ->name('categories.create');

    Route::post('/categories', [CategoryController::class, 'store'])
        ->middleware('permission:create categories')
        ->name('categories.store');

    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])
        ->middleware('permission:edit categories')
        ->name('categories.edit');

    Route::put('/categories/{category}', [CategoryController::class, 'update'])
        ->middleware('permission:edit categories')
        ->name('categories.update');

    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])
        ->middleware('permission:delete categories')
        ->name('categories.destroy');
});

require __DIR__ . '/auth.php';
