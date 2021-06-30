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
    <div class="d-flex justify-content-end my-4 position-sticky top-0" style="z-index: 10">
        <div class="col-md-4">
            <form action="/search" method="get">
                <div class="input-group">
                    <input type="search" name="search" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>
        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="sidebar-link btn btn-danger text-dark w-100">
                <i class="bi bi-box-arrow-left text-dark"></i>
                <span>Logout</span>
            </button>
        </form> --}}
    </div>
    

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
