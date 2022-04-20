
@extends('template.layout')

@section('content')
    <section class="game-wrapper">
        <div class="container">
            <div class="tag">
                <h3>Current Series</h3>
            </div>

            @foreach($comics as $indice => $value)

            <a class="game__item" href="{{ route('prodotti.show', ['id' => $indice]) }}">
                <figure>
                  <img class="game__image" src="{{ $value['thumb'] }}" alt="" />
                </figure>
            
                <h4 class="game__title">{{ $value['title'] }}</h4>
            </a>

            @endforeach

            <button>
                Load More
            </button>
        </div>
    </section>
@endsection