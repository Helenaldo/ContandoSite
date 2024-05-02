<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8" />
        <title>Contando | @yield( 'title' )</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Bluetec Saas Software Startup Website Template" name="description" />
        <meta content="" name="keywords" />
        <meta content="" name="author" />

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- CSS Files
    ================================================== -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/animate.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- color scheme -->
        <link id="colors" href="/assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/coloring.css" rel="stylesheet" type="text/css" />

        @yield('css')

    </head>

    <body>
        <div id="wrapper">
            <!-- header begin -->
                @include( 'partials.header' )
            <!-- header close -->

            <!-- content begin -->
                @yield('content')
            <!-- content close -->

            <!-- footer begin -->
            @include('partials.footer')
            <!-- footer close -->

            <div id="preloader">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                    <div class="bounce4"></div>
                    <div class="bounce5"></div>
                    <div class="bounce6"></div>
                    <div class="bounce7"></div>
                    <div class="bounce8"></div>
                </div>
            </div>
        </div>

        <!-- Javascript Files
    ================================================== -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/wow.min.js"></script>
        <script src="/assets/js/jquery.isotope.min.js"></script>
        <script src="/assets/js/easing.js"></script>
        <script src="/assets/js/owl.carousel.js"></script>
        <script src="/assets/js/validation.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/assets/js/enquire.min.js"></script>
        <script src="/assets/js/jquery.stellar.min.js"></script>
        <script src="/assets/js/jquery.plugin.js"></script>
        <script src="/assets/js/typed.js"></script>
        <script src="/assets/js/jquery.countTo.js"></script>
        <script src="/assets/js/jquery.countdown.js"></script>
        <script src="/assets/js/designesia.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        @yield('js')


    </body>
</html>
