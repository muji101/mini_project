<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    .container{
        font-family: 'Jost', sans-serif;
    }
    .slide-text{
        font-family: 'Playfair Display', serif;
    }
    body a{
        color: rgb(15, 15, 15);
    }
    </style>

    @include('../layout.header')
    <title>Hello, world!</title>
</head>
<body>

    <div class="container">
    @include('pages.layout.navbar')


    @include('pages.layout.slide')

    @yield('content')
    
    @include('../layout.footer')

    <script>
        new Splide( '.splide', {
        type  : 'loop',
        rewind: true,
        autoplay: true,
        } ).mount();
    </script>
    </div>
    
</body>
</html>
