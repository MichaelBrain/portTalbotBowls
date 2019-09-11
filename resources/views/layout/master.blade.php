<!doctype html> 
<html lang="{{ app()->getLocale() }}"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
       <meta name="csrf-token" content="{{ csrf_token() }}">

        @section('head')
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
            <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

            <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @show

        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        
        <title>Port Talbot IBC</title>  
    </head>
 
    <body>

        <div class="wrapper">

            @include('component.nav')

            <div id="main" class="container .clear-top">

                @yield('content')

            </div>
        </div>

        <footer class="footer">
            @include('component.footer')
        </footer>
    </body>
</html>