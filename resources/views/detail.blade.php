@extends('template.layout')


@section('content')

<main class="product-page">
    <div class="blue-band">
        <div class="container">
            <img src="" alt="" class="comic-img">
        </div>
    </div>

    <div class="comic-wrapper">
        <div class="container">
            <div class="comic-info">
                <h1>{{$comic['title']}}</h1>
                <div class="price-wrapper">
                    qua va inserito il prezzo
                </div>
                <p class="comic-description"></p>
            </div>
            <div class="adv">
                <h2 class="adv-title">Advertising</h2>
                <img src="" alt="" class="adv-img">
            </div>
            
        </div>
    </div>

    <div class="comic-specs">
        <div class="container">
            <div class="talent">
                 <h3>Talent</h3>
                 <div class="talent-info">
                     <h5>Art by:</h5>
                     <p></p>
                 </div> 
                 <div class="talent-info">
                    <h5>Written by:</h5>
                    <p></p>
                </div>   
            </div>

            <div class="specs">
                <h3>Specs</h3>
                <div class="talent-info">
                    <h5>Series:</h5>
                    <p></p>
                </div> 
                <div class="talent-info">
                    <h5>U.S. Price:</h5>
                    <p></p>
                </div> 
                <div class="talent-info">
                    <h5>On Sale Date:</h5>
                    <p></p>
                </div> 
            </div>

            <div class="site-banner">
                <ul>
                    <li>Digital Comics</li>
                    <li>Shop DC</li>
                    <li>Comic Shop Location</li>
                    <li>Subscription</li>
                </ul>
            </div>
        </div>
    </div>
</main>

@endsection