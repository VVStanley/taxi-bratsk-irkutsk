<!doctype html>
<html dir="ltr" lang="ru-RU" class="no-js">
<head>

    <!-- meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $title }}</title>
    <meta name="keywords" content="{{ $keywords }}" />
    <meta name="description" content="{{ $description }}">

    <!-- Open Graph Protocol meta tags. -->
    <meta property="og:locale" content="ru"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Такси Иркутск-Братск"/>
    <meta property="og:description" content="description"/>
    <meta property="og:site_name" content="Такси"/>
    <meta property="og:url" content="taxi-bratsk-irkutsk.ru"/>
    <meta property="og:image" content=""/>

    <!--  Desktop Favicons  -->
    <link rel="icon" type="image/png" href="/images/favicon.png" sizes="32x32">

    <!-- Google Fonts CSS Stylesheet // More here http://www.google.com/fonts#UsePlace:use/Collection:Open+Sans -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- ***** Boostrap Custom / Addons Stylesheets ***** -->
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" media="all">

    <!-- Font Awesome icons library -->
    <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/sliders/ios/style.css" type="text/css" media="all">

    <!-- ***** Main + Responsive & Base sizing CSS Stylesheet ***** -->
    <link rel="stylesheet" href="/css/template.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/base-sizing.css" type="text/css" media="all">

    <!-- Custom CSS Stylesheet (where you should add your own css rules) -->
    <link rel="stylesheet" href="/css/custom.css" type="text/css" />
    <link rel="stylesheet" href="/css/main.css" type="text/css" />

    <!-- Modernizr Library -->
    <script type="text/javascript" src="/js/modernizr.min.js"></script>

    <!-- jQuery Library -->
    <script type="text/javascript" src="/js/jquery.js"></script>

</head>

<body class="preloader">

<!-- Page Wrapper -->
<div id="page_wrapper">

    @include('header')

    @include('about')

    @include('timetable')

    @include('route')

    @include('advantages')

    @include('gallery')

    @include('action')

    @include('footer')

    @include('popup')

</div>

<!-- ToTop trigger -->
<a href="#" id="totop">НАВЕРХ</a>
<!--/ ToTop trigger -->

<!-- JS FILES // These should be loaded in every page -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/kl-plugins.js"></script>

<!-- Required js script for iOS Slider -->
<script type="text/javascript" src="/js/plugins/_sliders/ios/jquery.iosslider.min.js"></script>

<!-- Required js trigger for iOS Slider -->
<script type="text/javascript" src="/js/trigger/slider/ios/kl-ios-slider.js"></script>

<!-- Slick required js script for Partners Carousel element -->
<script type="text/javascript" src="/js/plugins/_sliders/slick/slick.js"></script>

<!-- Required js trigger for Partners Carousel & Screenshot Box Carousel element -->
<script type="text/javascript" src="/js/trigger/kl-slick-slider.js"></script>

<!-- Required script for Photo gallery alternative (Caroufredsel) -->
<script type="text/javascript" src="js/plugins/_sliders/caroufredsel/jquery.carouFredSel-packed.js"></script>

<!-- Custom Kallyas JS codes -->
<script type="text/javascript" src="/js/kl-scripts.js"></script>

<!-- Custom user JS codes -->
<script type="text/javascript" src="/js/kl-custom.js"></script>

<script type="text/javascript" src="/js/main.js"></script>

</body>
</html>
