@extends('layout.main')

@section('title', $comic['title'])

@section('contenuto')
    <div id="card-detail">
        
        <div class="description">
            <h1>{{ $comic['title'] }}</h1>
            <div class="wrapper-buy">
                <div class="price">
                    <p>US Price {{ $comic['price'] }}</p>
                    <p>AVAILABLE</p>
                </div>
                <div class="check">
                    <p>Check Available <i class="fas fa-angle-down"></i></p>
                </div>
            </div>
            <p>{{ $comic['description'] }}</p>
        </div>
        <div class="img">
            <img src="{{asset('images/adv.jpg')}}" alt="immagine di superman che vola">
        </div>
    </div>
    <div class="wrapper-detail">
        <div class="talent">
            <h3>Talent</h3>
           
            <h5>Art by:</h5>
            @foreach ($comic['artists'] as $artist )
                <p> {{ $artist }}, </p>
            @endforeach

            <h5>Writen by:</h5>
            @foreach ($comic['writers'] as $writer)
            <p> {{ $writer }}, </p>
            @endforeach
        </div>
    </div>
@endsection

@section('cdn-import')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
@endsection