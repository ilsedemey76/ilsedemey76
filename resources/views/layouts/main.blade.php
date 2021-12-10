<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--@routes-->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--  <title>Ielse - beton - homemade - webshop</title>
        <meta name="description" content="Op zoek naar een geweldige collectie handgemaakte betonproducten? Enkel eigen ontwerpen.">-->
        {!! Meta::toHtml() !!}
        <link rel="canonical" href="{{ url()->current() }}" />

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


        <!-- https://fontawesome.com/ -  Place your kit's code here -->
        <script src="https://kit.fontawesome.com/8f3fea64f8.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-13014826-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-13014826-1');
        </script>

    </head>
    <body>
    <div id="app">
        @include('partials.header.main')
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
        @include ('partials.footer.main')
    </div>


{{--        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>--}}
{{--        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>--}}

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')

    </body>
</html>

