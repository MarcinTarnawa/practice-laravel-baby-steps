<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja pierwsza strona w Laravel</title>
    <style>
        .active {
            font-weight: bold;
            color: gray;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        footer {
            margin-top: 50px;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    Menu 
    <nav>
        <ul>
        @foreach($menu as $item)
           <li> <x-nav-link :item="$item" /></li> 
        @endforeach
        </ul>
    </nav>
    
    Logo 

    {{ $slot }}

    <footer>
        <ul>
            @foreach($menu as $item)
                <li>
                    <x-nav-link :item="$item" />
                </li>
            @endforeach
        </ul>
    </footer>
</body>

</html>