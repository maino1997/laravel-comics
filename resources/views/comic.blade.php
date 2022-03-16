@extends('layout.main')

@section('content')
    <section id="comic">
        <div class="separator-bar"></div>
        <div class="container">
            <div class="col-8">
                <h2>{{ $comic['title'] }}</h2>
                <div class="green-bar">
                    <span><span class="light">Price:</span>{{ $comic['price'] }} </span>
                    <div class="right">
                        <span class="light">AVAILABLE</span>
                        <span class="border">Check Availability</span>
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="col-4">
                <img src="../images/adv.jpg" alt="adv">
            </div>
        </div>
    </section>
@endsection
