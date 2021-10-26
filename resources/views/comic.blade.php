@extends('layout.main')

@section('title', $comic['title'])

@section('contenuto')
    <div id="card-detail">
        <div class="description">
            <h1>{{ $comic['title'] }}</h1>
            <p>US Price {{ $comic['price'] }}</p>
            <p>{{ $comic['description'] }}</p>
        </div>
        <div class="img">
            <img src="{{asset('images/adv.jpg')}}" alt="">
            
        </div>
        
        
    </div>
@endsection