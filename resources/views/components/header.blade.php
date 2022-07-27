@php
$navLinks = ["CHARACTERS", "COMICS", "MOVIES", "TV", "GAMES", "COLLECTIBLES", "VIDEOS", "FANS", "NEWS", "SHOP"];
@endphp

<div class="container">
    <div class="row py-4">
        <div class="col-1 g-0 d-flex">
            <img src="{{ asset('images/dc-logo.png') }}" alt="" class="logo">
        </div>
    
        <div class="col d-flex justify-content-end align-items-center">
            <ul class="nav h-100 ">
                @foreach ($navLinks as $link)
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link my-nav-link text-center" aria-current="page" href="#">
                        {{ $link }}
                        <div class="select-underline"></div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>