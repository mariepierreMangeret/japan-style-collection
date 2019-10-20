<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
        @yield('css')

        <script src="{{ asset('js/plugins/pace.min.js') }}"></script>
    </head>

    <body>
        <div id="page-loader" class="fade show"><span class="spinner"></span></div>

        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            @include('includes.navbartop')
            @include('includes.navbarleft')

            <div id="content" class="content">
                @if(session()->has('ok'))
                    <div class="alert alert-success fade show"><span class="close" data-dismiss="alert">×</span>
                        <strong>Success!</strong> {!! session('ok') !!}
                    </div>
                @endif

                @yield('content')
            </div>

            @include('includes.panelright')

            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>

        @include('includes.page-js')
        @yield('javascript')
    </body>
</html>
