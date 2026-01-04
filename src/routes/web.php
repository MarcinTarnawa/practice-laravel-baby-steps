<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', function () {
    return view('welcome', ['name' => 'Marcin']);
});

Route::get('about', function () {
  return view('about'); 
});

Route::get('contact', function () {
  return view('contact'); 
});

Route::get('/product/{id}', function ($id) {
    $product = Product::find($id);
    return view('product', ['product' => $product]);
});

Route::get('/product', function () {
    $product = Product::all();
    return view('products', ['product' => $product]);
});

Route::get('weather', [WeatherController::class,'index'])->name('index');