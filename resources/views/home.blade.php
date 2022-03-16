@php

$icons = config('bluebar_icon');

@endphp


@extends('layout.main')

@section('content')
    <main>
        <button id="top-button">CURRENT SERIES</button>

        <div class="container-no-flex">
            <div class="row">
                @foreach ($comics as $index => $comic)
                    <figure class="card-class">
                        <a href="{{ route('comic', ['id' => $index]) }}">
                            <img src="{{ $comic['thumb'] }}" alt="thumb" />
                        </a>
                        <figcaption>{{ $comic['title'] }}</figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
        <button id="lower-bottom">LOAD MORE</button>
        <div class="blue-bar">
            <ul>
                @foreach ($icons as $icon)
                    <li>
                        <img src="{{ $icon['url'] }}" alt="thumb" />
                        <span>{{ $icon['text'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
