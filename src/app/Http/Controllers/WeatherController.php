<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;


class WeatherController extends Controller
{
   public function index() {
        // Pobieramy dane z API
        $apiKey = config('services.moje_api.key');
        $response = Http::get('http://api.weatherstack.com/current', [
            'access_key' => $apiKey,
            'query' => 'Warsaw'
        ]);

        // Sprawdzamy czy zapytanie się powiodło i zamieniamy na tablicę
        $weatherData = $response->json();

        // Przekazujemy dane do widoku
        return view('weather', compact('weatherData'));
    }
}