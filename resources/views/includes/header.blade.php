@php

$links = config('header_links');

@endphp


<header>
    <div>
        <img src="{{ asset('images/dc-logo.png') }}" />
    </div>
    <div class="list-cont">
        <ul>
            <li><a href="{{ route('characters') }}">CHARACHTERS</a></li>
            <li><a href="#">COMICS</a></li>
            <li><a href="#">MOVIES</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">GAMES</a></li>
            <li><a href="#">COLLECTIEBILITES</a></li>
            <li><a href="#">VIDEOS</a></li>
            <li><a href="#">FANS</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">SHOP</a></li>
        </ul>
    </div>
</header>
