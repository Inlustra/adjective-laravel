<html>
    <head>
      <!--Import materialize.css-->
        @section('header')
          {{ HTML::style('css/materialize.css'); }}
          {{ HTML::style('css/adjective.css'); }}
          <title>@yield('title','Adjective Laravel')</title>
        @show
    </head>
    <body>
            <div class="nav-wrapper">
                @include('admin.topbar')
            </div>

            <div class="sidebar sidebar-color">
            	@include('admin.sidebar')
            </div>
            
            <div class="content">
                <div class="inner-content">
                    @yield('content')
                </div>
            </div>
        {{ HTML::script('js/jquery-2.1.3.min.js'); }}
        {{ HTML::script('js/bin/materialize.min.js'); }}
        @yield('post-load')
        <script>
			$(".button-collapse").sideNav();
			$(document).ready(function(){
				$('.collapsible').collapsible({
					accordion : false
    });
  });
      
        </script>
    </body>
</html>