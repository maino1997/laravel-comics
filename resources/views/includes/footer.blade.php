@php

$first_list = config('footer_links_first');
$second_list = config('footer_links_second');
$third_list = config('footer_links_third');
$fourth_list = config('footer_links_fourth');

@endphp


<footer>
    <div class="container">
        <div class="big-col">
            <div class="col">
                <h2>DC COMICS</h2>
                <ul>
                    @foreach ($first_list as $link)
                        <li><a href="{{ $link['route_name'] }}">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>

                <h2>SHOP</h2>
                <ul>
                    @foreach ($second_list as $link)
                        <li><a href="{{ $link['route_name'] }}">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h2>DC</h2>
                <ul>
                    @foreach ($third_list as $link)
                        <li><a href="{{ $link['route_name'] }}">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h2>SITES</h2>
                <ul>
                    @foreach ($fourth_list as $link)
                        <li><a href="{{ $link['route_name'] }}">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="big-col">
            <img src="{{ asset('images/dc-logo-bg.png') }}" alt="dc-logo" id="logo-dc">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="left flex-center">
                <a href="#">Sign Up Now</a>
            </div>
            <div class="right">
                <ul>
                    <li>
                        <h3>FOLLOW US</h3>
                    </li>
                    <li>
                        <img src="{{ asset('images/footer-facebook.png') }}" />
                        <img src="{{ asset('images/footer-periscope.png') }}" />
                        <img src="{{ asset('images/footer-pinterest.png') }}" />
                        <img src="{{ asset('images/footer-twitter.png') }}" />
                        <img src="{{ asset('images/footer-youtube.png') }}" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
