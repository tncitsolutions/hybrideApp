<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/logo.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- COMMON CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/vendors.css" rel="stylesheet">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="assets/rev-slider-files/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/rev-slider-files/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/rev-slider-files/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/rev-slider-files/css/navigation.css">

    <!-- CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/custom2.css" rel="stylesheet">
    <link id="colors" href="assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/colors/coloring.css" rel="stylesheet" type="text/css" />

    <link href="assets/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="assets/css/extralayers.css" rel="stylesheet">
    <link href="assets/layerslider/css/layerslider.css" rel="stylesheet">


    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
</head>

<body class="">

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave" style="display:none;">
            <!-- <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div> -->
        </div>

    </div>
    <!--End Preload -->


    <div class="layer"></div>
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-6"><i class="fa fa-phone"></i><strong> 0000</strong></div>
                    <div class="col-6">
                        <ul id="top_links">
                            <!--<li><a href="#sign-in-dialog" id="access_link">Connexion</a></li>-->
                            <!--<li><a href="wishlist.html" id="wishlist_link">Inscription</a></li>-->
                            
                            @if (Auth::guest())
                            <li><a href="{{route ('login')}}"><i class="fa fa-user"></i> Connexion</a></li>
                            <li><a href="{{route ('register')}}"><i class="fa fa-arrow-right"></i> Inscription</a></li>
                            @else
                            {{ Auth::user()->name }}
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Déconnexion</a></li>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
            
                            @endif

                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->

        <!-- header begin -->

        <div class="container">
            <div class="row">
                <!-- <div id="logo" class="mt-2 d-lg-none">
                        <a href="index.php"><img src="img/logo.png" width="80" height="80" alt="" class="logo_normal"></a>
                    </div> -->
                <div class="col-3">
                    <div id="logo_home">
                        <h1><a href="/" title="Guichet Municipale">Guichet Municipale</a></h1>
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="assets/img/logo.png" width="80" height="80" alt="Guichet Municipale">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Démarches & Infos Pratiques <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="{{route ('etat-civil')}}">État Civil</a></li>
                                    <li><a href="{{route ('attestation-certif')}}">Attestations & Certificats</a></li>
                                    {{--
                                        <li class="third-level"><a href="javascript:void(0);">Attestations & Certificats </a>
                                            <ul>
                                                <li><a href="{{route ('attestation')}}">Attestations</a></li>
                                                <li><a href="{{route ('certificat')}}">Certificats</a></li>
                                            </ul>
                                        </li>
                                        --}}
                                    <li><a href="{{route ('commerce-entre')}}">Commerces & Entreprises</a></li>
                                    <li><a href="">Autres démarches</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Actualités</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div><!-- container -->

    </header>

    <!-- Banniere pour les pages internes -->
    @yield('banniere2')

    <!-- Contenu -->
    <main>
        @yield('contenu')
    </main>

    <!-- Footer -->
    <footer class="">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Besoin d'aide ?</h3>
                    <a href="tel://" id="phone">+241 423 445 99</a>
                    <a href="mailto:help@citytours.com" id="email_footer">help@example.com</a>
                </div>
                <div class="col-md-4">
                    <h3>Démarches & Infos Pratiques</h3>
                    <ul>
                        <li><a href="index.php">État Civil</a></li>
                        <li><a href="index.php">Attestation & Certificat</a></li>
                        <li><a href="index.php">Commerces & Entreprises</a></li>
                        <li><a href="index.php">Autres démarches</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Autres</h3>
                    <ul>
                        <li><a href="#">Connexion</a></li>
                        <li><a href="#">Inscription</a></li>
                        <li><a href="#">Faqs</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Communes</h3>
                    <ul>
                        <li><a href="#">Libreville</a></li>
                        <li><a href="#">Owendo</a></li>
                        <li><a href="#">Akanda</a></li>
                        <li><a href="#">Port-Gentil</a></li>
                    </ul>
                </div>

            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="fa-icon-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-icon-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <p>© Guichet Municipale 2021</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- Search Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
        <form role="search" id="searchform" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="icon_set_1_icon-78"></i>
            </button>
        </form>
    </div><!-- End Search Menu -->

    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>
                Connexion
            </h3>
        </div>
        <form>
            <div class="sign-in-wrapper">
                <!--<a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>-->
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <label class="container_check">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right"><a id="forgot" href="javascript:void(0);">Mot de passe oublier?</a></div>
                </div>
                <div class="text-center"><input type="submit" value="Me Connecter" class="btn_login"></div>
                <div class="text-center">
                    Vous n'avez pas de compte ? <a href="javascript:void(0);">Inscription</a>
                </div>
                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>












    <!-- Common scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/common_scripts_min.js"></script>
    <script src="assets/js/functions.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/revolution_func.js"></script>
    <script src="assets/js/theia-sticky-sidebar.js"></script>
    <script>
        jQuery('#sidebar').theiaStickySidebar({
            additionalMarginTop: 80
        });
    </script>
    <script>
        $('#faq_box a[href^="#"]').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
                location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 115
                    }, 800);
                    return false;
                }
            }
        });
    </script>
    <script src="assets/js/tabs.js"></script>
    <script>
        new CBPFWTabs(document.getElementById('tabs'));
    </script>

    <!-- Video header scripts -->
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/video_header.js"></script>
    <script>
        HeaderVideo.init({
            container: $('.header-video'),
            header: $('.header-video--media'),
            videoTrigger: $("#video-trigger"),
            autoPlayVideo: false
        });
    </script>


    <!-- Javascript Files
    ================================================== -->
    <script src="assets/js/vend/bootstrap.min.js"></script>
    <script src="assets/js/vend/wow.min.js"></script>
    <script src="assets/js/vend/jquery.isotope.min.js"></script>
    <script src="assets/js/vend/easing.js"></script>
    <script src="assets/js/vend/owl.carousel.js"></script>
    <script src="assets/js/vend/validation.js"></script>
    <script src="assets/js/vend/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vend/enquire.min.js"></script>
    <script src="assets/js/vend/jquery.stellar.min.js"></script>
    <script src="assets/js/vend/jquery.plugin.js"></script>
    <script src="assets/js/vend/typed.js"></script>
    <script src="assets/js/vend/jquery.countTo.js"></script>
    <script src="assets/js/vend/jquery.countdown.js"></script>
    <script src="assets/js/vend/typed.js"></script>
    <script src="assets/js/vend/designesia.js"></script>

</body>

</html>