<?php

use App\Http\Controllers\AdminBranchController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminShopController;
use App\Http\Controllers\AdminSliderController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Slider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

# Public

Route::view('/', 'home', [
    'title' => 'Официальный дистрибьютор в Беларуси',
    'description' => 'Продукты  Yeelight, потолочные светильники, настольные лампы, интерьерные свечи',
    'keywords' => 'yeelight, лампы',
    'categories' => Cache::remember('categories', 600, fn() => Category::with('products')->get()),
    'slider' => Cache::remember('slider', 600, fn() => Slider::all())
]);

Route::view('/shops', 'shops', [
    'title' => 'Где купить в Беларуси',
    'description' => 'Продукты  Yeelight, потолочные светильники, настольные лампы, интерьерные свечи',
    'keywords' => 'yeelight, купить в беларуси',
    'categories' => Cache::remember('categories', 600, fn() => Category::with('products')->get()),
    'shops' => Cache::remember('shops', 600, fn() => Shop::with('branches')->get()),
]);

Route::post('/shops', function () {
    return Cache::remember('branches', 600, fn() => Branch::with('shop')->get());
});

Route::get('/products/{product:slug}', function (Product $product) {
    return view("products.{$product->slug}", [
        'title' => $product->title,
        'description' => $product->description,
        'keywords' => $product->keywords,
        'categories' => Cache::remember('categories', 600, fn() => Category::with('products')->get()),
    ]);
});

# Authentication

Route::controller(RegisterUserController::class)->group(function () {

    Route::get('/register', 'create');

    Route::post('/register', 'store');
});

Route::controller(SessionController::class)->group(function () {

    Route::get('/login', 'create')->name('login');

    Route::post('/login', 'store');

    Route::post('/logout', 'destroy');
});

# Admin section

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::view('/', 'admin.index', ['title' => 'Admin panel']);

    Route::resource('slider', AdminSliderController::class, [
        'except' => ['show']
    ]);

    Route::resource('shops', AdminShopController::class, [
        'except' => ['show']
    ]);

    Route::resource('branches', AdminBranchController::class, [
        'only' => ['store', 'update', 'destroy']
    ]);

    Route::resource('products', AdminProductController::class, [
        'except' => ['show']
    ]);

    Route::resource('users', AdminUserController::class, [
        'except' => ['show']
    ]);
});
