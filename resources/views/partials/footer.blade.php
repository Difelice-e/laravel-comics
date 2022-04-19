<?php 

$socialLink = [
    [
        'name'=>'facebook',
        'href'=>'#',
        'icon'=>'img/footer-facebook.png'
    ],
    [
        'name'=>'twitter',
        'href'=>'#',
        'icon'=>'img/footer-twitter.png'
    ],
    [
        'name'=>'youtube',
        'href'=>'#',
        'icon'=>'img/footer-youtube.png'
    ],
    [
        'name'=>'pinterest',
        'href'=>'#',
        'icon'=>'img/footer-pinterest.png'
    ],
    [
        'name'=>'periscope',
        'href'=>'#',
        'icon'=>'img/footer-periscope.png'
    ]
];

$footerMenu = [
    [
        'title'=>'DC Comics',
        'links'=>[
            [
                'name'=>'Characters',
                'href'=>'#'
            ],
            [
                'name'=>'Comics',
                'href'=>'#'
            ],
            [
                'name'=>'Movies',
                'href'=>'#'
            ],
            [
                'name'=>'TV',
                'href'=>'#'
            ],
            [
                'name'=>'Games',
                'href'=>'#'
            ],
            [
                'name'=>'Videos',
                'href'=>'#'
            ],
            [
                'name'=>'News',
                'href'=>'#'
            ]
        ]
    ],
    [
        'title'=>'Shop',
        'links'=>[
            [
                'name'=>'Shop DC',
                'href'=>'#'
            ],
            [
                'name'=>'Shop DC Collectibles',
                'href'=>'#'
            ],
        ]
    ],
    [
        'title'=>'DC',
        'links'=>[
            [
                'name'=>'Terms Of Use',
                'href'=>'#'
            ],
            [
                'name'=>'Privacy Policy (new)',
                'href'=>'#'
            ],
            [
                'name'=>'Ad Choices',
                'href'=>'#'
            ],
            [
                'name'=>'Advertising',
                'href'=>'#'
            ],
            [
                'name'=>'Jobs',
                'href'=>'#'
            ],
            [
                'name'=>'Subscriptions',
                'href'=>'#'
            ],
            [
                'name'=>'Talent Workshop',
                'href'=>'#'
            ],
            [
                'name'=>'CPSC Certificates',
                'href'=>'#'
            ],
            [
                'name'=>'Ratings',
                'href'=>'#'
            ],
            [
                'name'=>'Shop Help',
                'href'=>'#'
            ],
            [
                'name'=>'Contact Us',
                'href'=>'#'
            ]
        ]
    ],
    [
        'title'=>'Sites',
        'links'=>[
            [
                'name'=>'DC',
                'href'=>'#'
            ],
            [
                'name'=>'MAD Magazine',
                'href'=>'#'
            ],
            [
                'name'=>'DC Kids',
                'href'=>'#'
            ],
            [
                'name'=>'DC Universe',
                'href'=>'#'
            ],
            [
                'name'=>'DC Power Visa',
                'href'=>'#'
            ]
        ]
    ]
];

?>

<footer>
    <div class="footer__link">
        <div class="container">
            <ul class="nav__menu">

                @foreach($footerMenu as $value)
                <li>
                    <h4 class="link-title">{{ $value['title'] }}</h4>
                    <ul class="nav__link">

                        @foreach($value['links'] as $links)
                        <li>
                            <a :href="{{ $links['href'] }}">{{ $links['name'] }}</a>
                        </li>
                        @endforeach

                    </ul>      
                </li>
                @endforeach

            </ul>
        </div>
    </div>

    <div class="footer__social">
        <div class="container">
            <button>
                <a href="#">
                    Sign-up now!
                </a>
            </button>

            <ul class="social__link">
                <li>
                    <a href="#">FOLLOW US</a>
                </li>  
                
                @foreach($socialLink as $social)
                <li>
                    <a href="{{ $social['href'] }}">
                        <img src="{{ asset($social['icon']) }}" alt="">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>