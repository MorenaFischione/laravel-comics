<header>
    <figure>
        <img src="{{ asset('images/dc-logo.png')}}" alt="">
    </figure>
    <ul>
        @foreach ($links as $link)
            <li class="{{request()->routeIs($link['route']) ? 'active' : ''}}" ><a href="{{route($link['route'])}}"></a>{{ $link['text']}}</li>
        @endforeach
    </ul>
</header>