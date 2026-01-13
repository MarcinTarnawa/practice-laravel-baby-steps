@props(['item'])

<a href="{{ $item['href'] }}" 
   {{ $attributes->merge(['class' => request()->fullUrlIs(url($item['href'])) ? 'active' : '']) }}>
    {{ $item['title'] }}
</a>