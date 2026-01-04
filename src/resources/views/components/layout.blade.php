<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Moja pierwsza strona w Laravel</title>
<style>
    .active { font-weight: bold; color: gray; }
    nav ul { list-style: none; display: flex; gap: 15px; }
    footer { margin-top: 50px; border-top: 1px solid #ccc; }
</style>
</head>
<body>
    Menu  
        @foreach($menu as $item)
        
                <a href="{{ $item['href'] }}" 
                    class="{{ request()->is(trim($item['href'], '/')) || (request()->is('/') && $item['href'] == '/') ? 'active' : '' }}">
                    {{ $item['title'] }}
                </a>
            
        @endforeach
        <br>
    Logo 
    
        {{ $slot }}
    <footer>
            @foreach($menu as $item)
                <li>
                    <a href="{{ $item['href'] }}" 
                        class="{{ request()->is(trim($item['href'], '/')) || (request()->is('/') && $item['href'] == '/') ? 'active' : '' }}">
                        {{ $item['title'] }}
                    </a>
                </li>
            @endforeach
    </footer>

</body>
</html>