{!! seo_helper()->render() !!}

<!--Favicons-->
<link rel="apple-touch-icon" sizes="57x57" href="{{ Theme::url('favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ Theme::url('favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ Theme::url('favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ Theme::url('favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ Theme::url('favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ Theme::url('favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ Theme::url('favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ Theme::url('favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ Theme::url('favicon/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ Theme::url('favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ Theme::url('favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ Theme::url('favicon/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ Theme::url('favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ Theme::url('favicon/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ Theme::url('favicon/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,500,500italic,600,600italic,700,700italic:latin-ext&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic:latin-ext&display=swap" rel="stylesheet">

<!--Bootstrap and Other Vendors-->
{!! Theme::style("css/bootstrap.min.css") !!}
{!! Theme::style("css/bootstrap-theme.min.css") !!}
{{--{!! Theme::style("vendors/owl.carousel/css/owl.carousel.min.css") !!}--}}
{{--{!! Theme::style("vendors/owl.carousel/css/owl.theme.default.min.css") !!}--}}
{{--{!! Theme::style("vendors/flexslider/flexslider.css") !!}--}}
<!--Mechanic Styles-->
{!! Theme::style("css/style.css?v=1") !!}
{!! Theme::style("css/responsive.css?v=1") !!}

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WDVLBX8');</script>
<!-- End Google Tag Manager -->
