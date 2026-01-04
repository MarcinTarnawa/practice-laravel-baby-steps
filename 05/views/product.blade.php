<x-layout :menu="$menu">
<br>
   <h1>Product Page</h1>
        <h2>{{$product['title']}} </h2>
    <ul>
       <li>Name: {{ $product['title'] }} </li>
       <li>Cost: {{ $product['cost'] }} </li>  
    </ul>
<a href="/product">Back</a>
</x-layout>