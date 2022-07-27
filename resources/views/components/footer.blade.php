@php
            $comicsLinks = [
                "Characters",
                "Comics",
                "Movies",
                "TV",
                "Games",
                "Videos",
                "News",
];
            $shopLinks = [
                "Shop DC",
                "Shop C Collectibles",
];
            $dcLinks = [
                "Terms Of Use",
                "Privacy policy (New)",
                "Ad Choices",
                "Advertising",
                "Jobs",
                "Subscriptions",
                "Talent Workshops",
                "CPSC Certificates",
                "Ratings",
                "Shop Help",
                "Contact Us",
];
            $sitesLinks = [
                "DC",
                "MAD Magazine",
                "DC Kids",
                "DC Universe",
                "DC Power Visa",
];
            $socialLinks = [
                [
                    "name" => "Facebook",
                    "href" => "#",
                    "url" => "footer-facebook.png" 
                ],
                [
                    "name" => "Twitter",
                    "href" => "#",
                    "url" => "footer-twitter.png" 
                ],
                [
                    "name" => "You Tube",
                    "href" => "#",
                    "url" => "footer-youtube.png" 
                ],
                [
                    "name" => "Pinterest",
                    "href" => "#",
                    "url" => "footer-pinterest.png" 
                ],
                [
                    "name" => "Periscope",
                    "href" => "#",
                    "url" => "footer-periscope.png" 
                ]
];
@endphp

<div>
    <div class="footer-bg-image">
        <div class="container">
            <div class="row text-light justify-content-between">
                <div class="col-4 d-flex py-5">
                    <div class="col">
                    <h5 class="text-uppercase fw-bold">Dc comics</h5>
                    <ul class="list-unstyled">
                        @foreach ($comicsLinks as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>

                    <h5 class="text-uppercase fw-bold">Shop</h5>
                    <ul class="list-unstyled">
                        @foreach ($shopLinks as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <h5 class="text-uppercase fw-bold">Dc</h5>
                    <ul class="list-unstyled">
                        @foreach ($dcLinks as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <h5 class="text-uppercase fw-bold">Sites</h5>
                    <ul class="list-unstyled">
                        @foreach ($sitesLinks as $link)
                            <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                </div>
                </div>
                <div class="col-6 p-0 logo-container">
                    <img src="{{ asset("images/dc-logo-bg.png") }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey">
        <div class="container">
            <div class="row justify-content-between align-items-center py-1">
                <div class="col-2">
                    <a href="#" class="text-uppercase fw-bold signup-btn">Sign-up now!</a>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <a href="#" class="text-uppercase fw-bold follow-btn ">Follow us</a>

                    <a class="p-1">
                        @foreach ($socialLinks as $link)
                        <img src="{{ asset('images/') . '/' . $link['url'] }}" alt="">
                        @endforeach
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>