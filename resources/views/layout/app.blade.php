<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body>
    <div id="app">
        
        @include('layout.sidebar')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>@yield('main_title')</h3>
            </div>
            {{-- <div class="page-heading">
                <a href="@yield('link')" class="btn btn-success">@yield('button')</a>
            </div> --}}
            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">RangTua</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @include('layout.footer')
</body>

</html>