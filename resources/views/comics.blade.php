@extends('layout.main')

@section('title', 'Comics')

@section('contenuto')
    <main class="container">
        <div class="jumbotron">
            <img class="img-jb" src="{{asset('images/jumbotron.jpg')}}" alt="immagine jambo">
            <button>Current Series</button>
        </div>
        <div class="container-cards">

            @foreach ($cards as $card)
                <div class="card"  >
                    <a href="{{ route('comic', ['id' => $loop-> index]) }}">
                        <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
                        <h5>{{$card['title']}}</h5>
                    </a>
                </div>
            @endforeach
            
        </div>
    </main>
@endsection