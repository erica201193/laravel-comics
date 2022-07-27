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
            
        </div>
    </div>

@endsection