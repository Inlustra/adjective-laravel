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
        @section('sidebar')
         <ul id="slide-out" class="side-nav fixed">
         <li id="logo">
         <div  class="valign-wrapper">
               <a href="#!"><h4 class="logo-title">Adjective</h4></a>
               <div class="valign-wrapper" id="logo-icon">
               <span class="valign logo-adjective">S</span>
               </div>
         </div>
         <div class="clear"></div>
         </li>
           <li><a href="#!">First Sidebar Link</a></li>
           <li><a href="#!">Second Sidebar Link</a></li>
           <li class="no-padding">
             <ul class="collapsible collapsible-accordion">
               <li>
                 <div class="collapsible-header">Courses<i class="mdi-navigation-arrow-drop-down"></i></div>
                 <div class="collapsible-body">
                   <ul>
                     <li>
                        <a href="#!">
                            <div class="item">
                                Enterprise Web Development
                                <div class="subtitle">
                                COMP-1642
                                </div>
                            </div>
                        </a>
                     </li>
                     <li>
                         <a href="#!">
                             <div class="item">
                                 Final Year Project
                             </div>
                         </a>
                     </li>
                     <li>
                         <a href="#!">
                             <div class="item">
                                  Advanced Programming
                                  <div class="subtitle">
                                  COMP-4941
                                  </div>
                             </div>
                         </a>
                     </li>
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