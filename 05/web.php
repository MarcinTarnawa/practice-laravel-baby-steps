<?php

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', 
    ['name' => 'Marcin',
    'menu' => Menu::all()]);
});

Route::get('about', function () {
  return view('about', ['menu' => Menu::all()]); 
});

Route::get('contact', function () {
  return view('contact',['menu' => Menu::all()]); 
});

Route::get('/product/{id}', function ($id) {
    $product = Product::find($id);
    return view('product', [
      'product' => $product,
      'menu' => Menu::all()]);
});

Route::get('/product', function () {
    $product = Product::all();
    return view('products', [
      'product' => $product,
      'menu' => Menu::all()]);
});
