<!doctype html>
@yield('html', '<html') lang="{{ LaravelLocalization::getCurrentLocale() }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.default.hreflang')
    <link rel="icon" type="image/png" href="{{ asset('images/build/dl-favicon-flame.png') }}">
    <link href="{{ elixir('css/app.css') }}" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ elixir('js/app.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/picturefill/2.0.0/picturefill.min.js"></script>
    <script>
        if (!Modernizr.flexbox) {
            window.location.href = "http://dragonlancers.com/browser";
        }
        $(function(){
            $.stellar({
                horizontalScrolling: false,
                verticalOffset: 40
            });
        });
        smoothScroll.init(
                {
                    speed: 1000,
                    easing: 'easeInOutCubic'
                }
        );
    </script>
        @yield('head')
    <a href="https://plus.google.com/111624196448495342344" rel="publisher" style="display: none;">Google+</a>

</head>
<body>

    @include('layouts.default.nav')

    <section class="container">

        @yield('content')

        @include('layouts.default.footer')

    </section>

    <script src="{{ asset('/js/social.min.js') }}" async="async"></script>
    @yield('footer')
</body>
</html>