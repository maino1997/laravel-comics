@extends('layout.main')

@section('content')
    <main>
        <div class="jumbodron"></div>
        <button id="top-button">CURRENT SERIES</button>

        <div class="container-no-flex">
            <div class="row">
                @foreach ($comics as $comic)
                    <figure class="card-class">
                        <img src="{{ $comic['thumb'] }}" alt="thumb" />
                        <figcaption>{{ $comic['title'] }}</figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
        <button>LOAD MORE</button>
    </main>
@endsection
