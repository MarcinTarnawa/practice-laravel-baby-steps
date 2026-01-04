<x-layout :menu="$menu">
    {{-- 1. Sprawdzamy, czy API zwróciło błąd --}}
    @if(isset($weatherData['success']) && $weatherData['success'] === false)
        <div style="color: red; padding: 20px; border: 1px solid red;">
            <h3>Wystąpił problem!</h3>
            <p>Błąd: {{ $weatherData['error']['info'] }}</p>
        </div>
    @elseif(isset($weatherData['location'])) {{-- 2. Jeśli dane istnieją, wyświetlamy je --}}
        
        <h1>Pogoda dla {{ $weatherData['location']['name'] }}</h1>

        <div class="weather-info">
            <p><strong>Kraj:</strong> {{ $weatherData['location']['country'] }}</p>
            <p><strong>Temperatura:</strong> {{ $weatherData['current']['temperature'] }}°C</p>
            <p><strong>Opis:</strong> {{ $weatherData['current']['weather_descriptions'][0] }}</p>
            <img src="{{ $weatherData['current']['weather_icons'][0] }}" alt="Ikona pogody">
        </div>

        <hr>
        <h3>Szczegóły:</h3>
        <ul>
            <li>Wilgotność: {{ $weatherData['current']['humidity'] }}%</li>
            <li>Odczuwalna: {{ $weatherData['current']['feelslike'] }}°C</li>
            <li>Wiatr: {{ $weatherData['current']['wind_speed'] }} km/h</li>
        </ul>

    @else {{-- 3. Zabezpieczenie na wypadek braku jakichkolwiek danych --}}
        <p>Brak danych do wyświetlenia.</p>
    @endif
    
</x-layout>