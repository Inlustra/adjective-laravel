<html>
    <head>
      <!--Import materialize.css-->
        @section('header')
          {{ HTML::style('css/materialize.css'); }}
          <title>@yield('title','Adjective Laravel')</title>
        @show
    </head>
    <body>
        @section('content')

        @show
        {{ HTML::script('js/jquery-2.1.3.min.js'); }}
        {{ HTML::script('js/bin/materialize.min.js'); }}
        @yield('post-load')
    </body>
</html>