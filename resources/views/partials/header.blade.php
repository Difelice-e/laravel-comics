<?php 
$navLink = [
    [
        'id'=>'Characters',
        'href'=>'#'
    ],
    [
        'id'=>'Comics',
        'href'=>'#'
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
        'href'=>'#'
    ]
];
?>

<header>
    <div class="container">
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
          </ul>
        </nav>
      </div>
</header>