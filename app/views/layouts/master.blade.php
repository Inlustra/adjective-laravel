<html>
    <head>
      <!--Import materialize.css-->
        @section('header')
          {{ HTML::style('css/materialize.css'); }}
          <title>@yield('title','Adjective Laravel')</title>
        @show
    </head>
    <body>
        @section('sidebar')
        <ul id="slide-out" class="side-nav fixed">
           <li><a href="#!">First Sidebar Link</a></li>
           <li><a href="#!">Second Sidebar Link</a></li>
           <li class="no-padding">
             <ul class="collapsible collapsible-accordion">
               <li>
                 <div class="collapsible-header">Dropdown<i class="mdi-navigation-arrow-drop-down"></i></div>
                 <div class="collapsible-body">
                   <ul>
                     <li><a href="#!">First Dropdown Link</a></li>
                     <li><a href="#!">Second Dropdown Link</a></li>
                     <li><a href="#!">Third Dropdown Link</a></li>
                     <li><a href="#!">Fourth Dropdown Link</a></li>
                   </ul>
                 </div>
               </li>
             </ul>
           </li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        @show
        @yield('content')
        {{ HTML::script('js/jquery-2.1.3.min.js'); }}
        {{ HTML::script('js/bin/materialize.min.js'); }}
        @yield('post-load')

        <script>
          $(".button-collapse").sideNav({edge: 'left'});

  $('.collapsible').collapsible();
        </script>
    </body>
</html>