<html>
<head>
    <!--Import materialize.css-->
    @section('header')
        {{ HTML::script('js/jquery-2.1.3.min.js'); }}
        {{ HTML::script('js/jquery.autocomplete.min.js'); }}
        {{ HTML::style('css/new/materialize.min.css'); }}
        {{ HTML::style('css/materialize.css'); }}
        {{ HTML::style('css/adjective.css'); }}


        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.0/js/materialize.min.js"></script>
        {{ HTML::script('js/toasts.js'); }}

        {{ HTML::script('js/materialize.js'); }}
        {{ HTML::script('js/toasts.js'); }}
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

{{ HTML::script('js/forms.js'); }}
{{ HTML::script('js/dropdown.js'); }}
{{ HTML::script('js/cards.js'); }}
</body>
</html>