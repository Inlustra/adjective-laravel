<html>
<head>
    <!--Import materialize.css-->
    @section('header')
        {{ HTML::style('css/new/materialize.min.css'); }}
        {{ HTML::style('css/materialize.css'); }}
        {{ HTML::style('css/adjective.css'); }}

        {{ HTML::script('js/jquery-2.1.3.min.js'); }}
        {{ HTML::script('js/jquery.autocomplete.min.js'); }}
        <title>@yield('title','Adjective Laravel')</title>
    @show
</head>
<body>
<div class="nav-wrapper">
    @include('layouts.topbar')
</div>

<div class="sidebar">
    @include('layouts.sidebar')
</div>

<div class="content">
    <div class="inner-content">
        @yield('content')
    </div>
</div>
@yield('post-load')
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.0/js/materialize.min.js"></script>

{{ HTML::script('js/bin/materialize.min.js'); }}
{{ HTML::script('js/toasts.js'); }}
<script>
    $(document).ready(function () {
        $(".button-collapse").sideNav();
        $('.collapsible').collapsible({accordion: true});
    });
</script>
</body>
</html>