@php

if(!function_exists("truncateTitle")) {
    function truncateTitle($string) {
    if (str_contains($string, "#"))
    {
        return substr($string, 0, strpos($string, "#"));
    } else {
        return $string;
    }
}
}
@endphp

<div class="product-card">
    <div class="py-2 image-container">
        <img src="{{ $thumb }}" alt="">
        <div class="card-price">{{ $price }}</div>      
    </div>
    <div class="pt-3 text-uppercase">{!! truncateTitle($product["title"]) !!}</div>

</div>
