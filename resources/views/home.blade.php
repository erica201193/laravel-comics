@php
$bannerLinks = [
                [
                    "name" => "DIGITAL COMICS",
                    "href" => "#",
                    "url" => "buy-comics-digital-comics.png" 
                ],
                [
                    "name" => "DC MERCHANDISE",
                    "href" => "#",
                    "url" => "buy-comics-merchandise.png" 
                ],
                [
                    "name" => "SUBSCRIPTION",
                    "href" => "#",
                    "url" => "buy-comics-subscriptions.png" 
                ],
                [
                    "name" => "COMIC SHOP LOCATOR",
                    "href" => "#",
                    "url" => "buy-comics-shop-locator.png" 
                ],
                [
                    "name" => "DC POWER VISA",
                    "href" => "#",
                    "url" => "buy-dc-power-visa.svg" 
                ]
];
@endphp

@extends('layouts.public')

@section('page_title', "DC Comics")


@section('page_content')
    <div class="bg-main">
        <div class="products-container">

            <div class="jumbo-bg-image">
                <img src="{{ asset("images/jumbotron.jpg") }}" alt="">
            </div>
    
            <div class="container">
                <div class="main-series-title">
                    <h5 class="text-uppercase" >Current series</h5>
                </div>
                <div class="row row-cols-6">
    
                    @foreach ($products as $product)
                        <div class="col pt-2 pb-4">
                            @include('components.card', $product)
                        </div>
                    @endforeach
    
                </div>
            </div>

            <div class="bg-blue">
                <div class="container">
                    <div class="row text-light py-5">

                        @foreach ($bannerLinks as $link)
                            <div class="col d-flex justify-content-center align-items-center">
                                <img src="{{ asset('images/') . '/' . $link['url'] }}" alt="">
                                <a href="#" class="text-light text-decoration-none ps-2">{{ $link["name"] }}</a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            
        </div>
    </div>

@endsection