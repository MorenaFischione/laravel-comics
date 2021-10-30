@extends('layout.main')

@section('title', $comic['title'])

@section('contenuto')

    {{-- Jambotron con immagine --}}
    <div class="jambotron">
        <img class="img-jb" src="{{asset('images/jumbotron.jpg')}}" alt="immagine jambo">
    </div>
    {{-- Section con dettaglio della singola card --}}
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
    {{-- section con specifiche della card selezionata --}}
    <section class="detail">
        <div class="wrapper-detail">
            <div class="talent">
                <h3>Talent</h3>
                <div class="art-by">
                    <div class="title-talent">
                        <h5>Art by:</h5>
                    </div>
                    <div class="artists">
                        @foreach ($comic['artists'] as $artist )
                            <a href="#"><span> {{ $artist }}, </span></a>
                        @endforeach
                    </div>
                </div>

                <div class="writen">
                    <div class="title-talent">
                        <h5>Writen by:</h5>
                    </div>
                    <div class="writers">
                        @foreach ($comic['writers'] as $writer)
                        <a href="#"><span> {{ $writer }}, </span></a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="specs">
                <h3>Spects</h3>
                <div class="series">
                    <h5>Writen by:</h5>
                    <p> {{$comic['series']}} </p>
                </div>
                <div class="us-price">
                    <h5>US Price:</h5>
                    <p> {{$comic['price']}} </p>
                </div>
                <div class="date">
                    <h5>On Sale Date:</h5>
                    <p> {{$comic['sale_date']}} </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('cdn-import')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
@endsection