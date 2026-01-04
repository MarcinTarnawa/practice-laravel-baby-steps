<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;


class WeatherController extends Controller
{
   public function index() {
        $response = Http::get('http://api.weatherstack.com/current', [
            'access_key' => '68def9b712dd61a5fb180107e964f2b2',
            'query' => 'Warsaw'
        ]);

        $weatherData = $response->json();

        return view('weather', compact('weatherData'));
    }
}