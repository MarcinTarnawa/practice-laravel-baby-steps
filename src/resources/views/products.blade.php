<x-layout>
<br>      
 <h2>Products Page</h2>
    <ul>
        @foreach($product as $item)
            <li>
                <a href="/product/{{ $item['id'] }}">{{ $item['title'] }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>