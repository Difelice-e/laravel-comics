@extends('template.layout')


@section('content')

<main class="product-page">
    <div class="blue-band">
        <div class="container">
            <img src="{{ $comic['thumb'] }}" alt="" class="comic-img">
        </div>
    </div>

    <div class="comic-wrapper">
        <div class="container">
            <div class="comic-info">
                <h1>{{$comic['title']}}</h1>
                <div class="price-wrapper">
                    <div class="comic-price">
                        <p>U.S. Price: <span class="price">{{$comic['price']}}</span></p>
                        <span>Available</span>
                    </div>
                    <div class="available">
                        <p>Check Availability</p>
                    </div>
                </div>
                <p class="comic-description">
                    {{$comic['description']}}
                </p>
            </div>
            <div class="adv">
                <h2 class="adv-title">Advertisment</h2>
                <img src="img/adv.jpg" alt="" class="adv-img">
            </div>
            
        </div>
    </div>

    <div class="comic-specs">
        <div class="container">
            <div class="talent-specs">
                 <h3>Talent</h3>
                 <div class="talent-info">
                     <h5>Art by:</h5>
                     <p>
                         @foreach ($comic['artists'] as $value)
                         <a href="">{{$value}}</a>
                         @endforeach
                     </p>
                 </div> 
                 <div class="talent-info">
                    <h5>Written by:</h5>
                    <p>
                        @foreach ($comic['writers'] as $value)
                         <a href="">{{$value}}</a>
                        @endforeach
                    </p>
                </div>   
            </div>

            <div class="talent-specs">
                <h3>Specs</h3>
                <div class="talent-info">
                    <h5>Series:</h5>
                    <p><a class="series" href="">{{$comic['series']}}</a></p>
                </div> 
                <div class="talent-info">
                    <h5>U.S. Price:</h5>
                    <p>{{$comic['price']}}</p>
                </div> 
                <div class="talent-info">
                    <h5>On Sale Date:</h5>
                    <p>{{$comic['sale_date']}}</p>
                </div> 
            </div>

            <div class="site-banner">
                <ul>
                    <li>
                        Digital Comics
                        <img src="img/buy-comics-digital-comics.png" alt="">
                    </li>
                    <li>
                        Shop DC
                        <img src="img/buy-comics-digital-comics.png" alt="">
                    </li>
                    <li>
                        Comic Shop Location
                        <img src="img/buy-comics-digital-comics.png" alt="">
                    </li>
                    <li>
                        Subscription
                        <img src="img/buy-comics-digital-comics.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>

@endsection