<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Gérer son argent" />
<meta name="author" content="Jean-Michel LY" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name') }} - @yield('title')</title>

<link rel="icon" href="{{{ asset('favicon.ico') }}}">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="{{ asset('css/plugins/jquery-ui.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/theme/style.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/theme/style-responsive.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/theme/red.css') }}" rel="stylesheet">

<script src="{{ asset('js/plugins/pace.min.js') }}"></script>

@stack('css')
