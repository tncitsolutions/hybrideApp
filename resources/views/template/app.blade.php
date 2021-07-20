<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <title>Priva - Insurance Company Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Priva - Insurance Company Website Template" name="description" />
        <meta content="" name="keywords" />
        <meta content="" name="author" />

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- CSS Files
    ================================================== -->
        <link href="assets/css/jpreloader.css" rel="stylesheet" type="text/css">
        <link id="bootstrap" href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link id="bootstrap-grid" href="assets/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
        <link id="bootstrap-reboot" href="assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- color scheme -->
        <link id="colors" href="assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/coloring.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div id="wrapper">
          @include('template.topbar')

            <!-- header begin -->
          @include('template.header')
            <!-- header close -->
            <!-- content begin -->
            <div class="no-bottom no-top" id="content">
                <div id="top"></div>

                {{-- START CONTENTS --}}
               @yield('content')
               @yield('tarifs')
               {{-- END CONTENTS --}}
            </div>
            <!-- content close -->

            <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
            @include('template.footer')
            <!-- footer close -->


        </div>

       

        <!-- Javascript Files
    ================================================== -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jpreLoader.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.isotope.min.js"></script>
        <script src="assets/js/easing.js"></script>
        <script src="assets/js/owl.carousel.js"></script>
        <script src="assets/js/validation.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/enquire.min.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/jquery.plugin.js"></script>
        <script src="assets/js/typed.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/jquery.countdown.js"></script>
        <script src="assets/js/typed.js"></script>
        <script src="assets/js/designesia.js"></script>

        <script>
        $(function () {
            // jquery typed plugin
            $(".typed").typed({
                stringsElement: $('.typed-strings'),
                typeSpeed: 100,
                backDelay: 1500,
                loop: true,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false,
                callback: function () { null; },
                resetCallback: function () { newTyped(); }
            });
        });
    </script>       

    </body>
</html>
