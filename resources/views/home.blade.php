
@extends('template.layout')

@section('content')
    <section class="game-wrapper">
        <div class="container">
            <div class="tag">
                <h3>Current Series</h3>
            </div>

            @foreach($comics as $value)
            <div class="game__item">
                <figure>
                  <img class="game__image" src="{{ $value['thumb'] }}" alt="" />
                </figure>
            
                <h4 class="game__title">{{ $value['title'] }}</h4>
            </div>
            @endforeach

            <button>
                Load More
            </button>
        </div>
    </section>
@endsection