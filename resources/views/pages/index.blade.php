<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('../layout.header')
    <title>Hello, world!</title>
  </head>
  <body>
  
    <div class="container">
      @include('pages.layout.navbar')


      @include('pages.layout.slide')

      @include('pages.layout.article')
      
      
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
