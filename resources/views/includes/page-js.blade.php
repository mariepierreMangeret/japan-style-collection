<script src="{{ asset('js/plugins/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/plugins/js.cookie.js') }}"></script>
<script src="{{ asset('js/theme/default.js') }}"></script>
<script src="{{ asset('js/theme/apps.js') }}"></script>
<script src="{{ asset('js/theme/dashboard-v2.js') }}"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>

@stack('scripts')