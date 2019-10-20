<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>

    <body>
        <div id="page-loader" class="fade show"><span class="spinner"></span></div>

        <div id="page-container" class="fade">
            @yield('content')
        </div>

        @include('includes.page-js')
    </body>
</html>
