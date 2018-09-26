
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('include.header')
  </head>

  <body>

    @include('include.navtop')

    <div class="container">

      @include('include.headr')

      <div class="row">

        @yield('content')

        
        @include('include.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    
      @include('include.footer')
    

  </body>
</html>
