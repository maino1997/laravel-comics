@php

$links = config('header_links');

@endphp


<header>
    <div>
        <img src="{{ asset('images/dc-logo.png') }}" />
    </div>
    <div class="list-cont">
        <ul>
            @foreach ($links as $link)
                <li><a href="{{ route($link['link']) }}">{{ $link['text'] }}</a></li>
            @endforeach
        </ul>
    </div>
</header>
