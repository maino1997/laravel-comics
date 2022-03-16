@php

$icons = config('bluebar_icon');

@endphp



@extends('layout.main')

@section('content')
    <section id="comic">
        <div class="strict-container">
            <figure class="card-class">
                <img src="{{ $comic['thumb'] }}" alt="thumb" class="immagine" />
            </figure>
        </div>
        <div class="separator-bar"></div>
        <div class="strict-container">
            <div class="col-8">
                <h2>{{ $comic['title'] }}</h2>
                <div class="green-bar">
                    <span><span class="light">Price:</span>{{ $comic['price'] }} </span>
                    <div class="right">
                        <span class="light">AVAILABLE</span>
                        <span class="border">Check Availability</span>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="col-4">
                <img src="../images/adv.jpg" alt="adv">
            </div>
        </div>
        <section id="bottom-comic">
            <div class="strict-container">
                <div class="col-5">
                    <h3>Talent</h3>
                    <div class="info-box">
                        <div class="title">Art By</div>
                        <div class="art">
                            @foreach ($comic['artists'] as $artist)
                                <span class="artists">{{ $artist }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="title">Written By</div>
                        <div class="art">
                            @foreach ($comic['writers'] as $writer)
                                <span class="artists">{{ $writer }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <h3>Spec</h3>
                    <div class="info-box">
                        <div class="title">Series:</div>
                        <div class="art serie">
                            {{ $comic['series'] }}
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="title">Us Price:</div>
                        <div class="art ">
                            {{ $comic['price'] }}
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="title">On Sale Date:</div>
                        <div class="art ">
                            {{ $comic['sale_date'] }}
                        </div>
                    </div>
                </div>
        </section>
        <div class="blue-bar">
            <div class="strict-container">
                <ul>
                    @foreach ($icons as $icon)
                        <li>
                            <span>{{ $icon['text'] }}</span>
                            <img src="{{ $icon['url'] }}" alt="thumb" />
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
