<?php 
$navLink = [
    [
        'id'=>'Characters',
        'href'=>'#'
    ],
    [
        'id'=>'Comics',
        'href'=>'/'
    ],
    [
        'id'=>'Movies',
        'href'=>'#'
    ],
    [
        'id'=>'Tv',
        'href'=>'#'
    ],
    [
        'id'=>'Games',
        'href'=>'#'
    ],
    [
        'id'=>'Collectibles',
        'href'=>'#'
    ],
    [
        'id'=>'Videos',
        'href'=>'#'
    ],
    [
        'id'=>'Fans',
        'href'=>'#'
    ],
    [
        'id'=>'News',
        'href'=>'#'
    ],
    [
        'id'=>'Shop',
        'href'=>'/shop'
    ],
    // [
    //     'id'=>'Shop',
    //     'routeName'=>'shop.index',
    //     'routeParams' => []
    // ]
];
?>

<header>
    <div class="banner">
        <div class="container container-banner">
            <ul class="banner-list">
                <li>DC Power Visa</li>
                <li>Additional DC Sites</li>
            </ul>
        </div>
        
    </div>

    <div class="container container-header">
        <picture class="logo">
          <img src="/img/dc-logo.png" alt="logo" />
        </picture>
  
        <nav class="main-nav">
          <ul>
            @foreach($navLink as $value)
            <li class="nav__item">
              <a href="{{ $value['href'] }}">{{ $value['id'] }}</a>
            </li>
            @endforeach
            
            {{-- @foreach($navLinks as $link)
                <li class="{{ Request::route()->getName() == $value['routeName'] ? 'active nav__item' : 'nav__item'}}">
                    <a href="{{ route($value['routeName'], $value['routeParams']) }}">{{ $value['id'] }}</a>
                </li>
            @endforeach --}}
          </ul>
        </nav>
      </div>
</header>