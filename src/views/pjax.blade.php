
<link rel="stylesheet" href="{{ asset('plugin/pjax/css/nprogress.css') }}">
<script type="text/javascript" src="{{ asset('plugin/pjax/js/jquery.pjax.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugin/pjax/js/nprogress.js') }}"></script>
<script>
    $(document).ready(function()
    {
        $(document).pjax('a', 'body');

        $(document).on('pjax:start', function() {
            NProgress.start();
        });
        $(document).on('pjax:end', function() {
            NProgress.done();
            self.siteBootUp();
        });
    });
</script>