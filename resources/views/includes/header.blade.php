@php

$links = config('header_links');

@endphp


<header>
    <div class="header-top">
        <div class="container-no-flex">
            <div class="header-top-content">
                <span>DC POWER VISA</span>
                <span>ADDITIONAL DC SITES</span>
            </div>
        </div>
    </div>
    <div class="header-bar">

        <div>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/dc-logo.png') }}" />
            </a>
        </div>
        <div class="list-cont">
            <ul>
                @foreach ($links as $link)
                    <li><a class="{{ request()->routeIs($link['link']) ? 'active' : '' }}"
                            href="{{ route($link['link']) }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="jumbodron"></div>
</header>
