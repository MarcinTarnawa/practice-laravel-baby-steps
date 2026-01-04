<?php

use Illuminate\Support\Facades\Route;

$menu = [
  'home' => '/',
];

Route::get('/', function () use ($menu) {
    return view('welcome', ['menu' => $menu]);
});