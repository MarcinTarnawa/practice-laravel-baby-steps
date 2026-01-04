<?php

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

Route::get('weather', [WeatherController::class,'index'])->name('index');