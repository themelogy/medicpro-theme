<!--Fonts-->
<script type="text/javascript">
    WebFontConfig = {
        google: {
            families: [
                'Open+Sans:400,400italic,500,500italic,600,600italic,700,700italic:latin-ext',
                'Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic:latin-ext'
            ]
        },
        timeout: 2000
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<!--jQuery-->
{!! Theme::script("js/jquery-2.1.3.min.js") !!}
{!! Theme::script("js/bootstrap.min.js") !!}
{!! Theme::script("vendors/owl.carousel/js/owl.carousel.min.js") !!}
{!! Theme::script("vendors/counterup/jquery.counterup.min.js") !!}
{!! Theme::script("vendors/waypoints/waypoints.min.js") !!}
{!! Theme::script("vendors/flexslider/jquery.flexslider-min.js") !!}
{!! Theme::script("vendors/rs-plugin/js/jquery.themepunch.tools.min.js") !!}
{!! Theme::script("vendors/rs-plugin/js/jquery.themepunch.revolution.min.js") !!}
{!! Theme::script("js/theme.js") !!}
{!! Theme::script("js/revs.js") !!}


@stack('js-stack')
@stack('js-inline')
