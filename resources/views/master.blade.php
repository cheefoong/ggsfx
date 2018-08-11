<!DOCTYPE html>

<html>
    <head>
        <title> @yield('title') </title>
        {{ Html::style('bootstrap-3.3.7/css/bootstrap.min.css') }}
        {{ Html::style('bootstrap-3.3.7/css/bootstrap-theme.min.css') }}
        {{ HTML::script('jquery-3.3.1.min.js') }}
        {{ HTML::script('bootstrap-3.3.7/js/bootstrap.min.js') }}

    </head>
    <body>
        
        @include('shared.navbar')
        
        @yield('content')
        
    </body>
</html>
