
<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt12">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img alt="" class="logo" src="assets/images/logo-light.png" />
                                <img alt="" class="logo-2" src="assets/images/logo.png" />
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li>
                                <a href="index.html">Acceuil<span></span></a>
                                {{-- <ul>
                                        <li><a href="index.html">Homepage 1</a></li>
                                        <li><a href="index-2.html">Homepage 2</a></li>
                                        <li><a href="index-3.html">Homepage 3</a></li>
                                        <li><a href="index-4.html">Homepage 4</a></li>
                                        <li><a href="index-5.html">Homepage 5</a></li>
                                        <li><a href="index-6.html">Homepage 6</a></li>
                                        <li><a href="index-7.html">Homepage 7</a></li>
                                        <li><a href="index-8.html">Homepage 8</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul> --}}
                            </li>
                            </li>
                            <li>
                                <a href="#">Procédure<span></span></a>
                                <ul>
                                    <li><a href="insurance-details-1.html">Life Insurance</a></li>
                                    <li><a href="insurance-details-2.html">Home Insurance</a></li>
                                    <li><a href="insurance-details-3.html">Auto Insurance</a></li>
                                    <li><a href="insurance-details-4.html">Health Insurance</a></li>
                                    <li><a href="insurance-details-5.html">Business Insurance</a></li>
                                    <li><a href="insurance-details-6.html">Condo Insurance</a></li>
                                    <li><a href="insurance-1.html">All Insurance Layout 1</a></li>
                                    <li><a href="insurance-2.html">All Insurance Layout 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Offres<span></span></a>
                                <ul>
                                    <li><a href="{{ url('/tarifs') }}">tarifs</a></li>
                                    <li><a href="why-choose-us.html">Why Choose Us</a></li>
                                    <li><a href="careers.html">Careers</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>

                            {{-- <li>
                                    <a href="#">Contact<span></span></a>
                                    <ul>
                                        <li><a href="news.html">Blog</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="login-2.html">Login 2</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </li> --}}
                            {{-- <li>
                                    <a href="#">A propos de <span></span></a>
                                    <ul>
                                        <li><a href="icons-font-awesome.html">Font Awesome Icons</a></li>
                                        <li><a href="icons-elegant.html">Elegant Icons</a></li>
                                        <li><a href="icons-etline.html">Etline Icons</a></li>
                                        <li><a href="alerts.html">Alerts</a></li>
                                        <li><a href="accordion.html">Accordion</a></li>
                                        <li><a href="modal.html">Modal</a></li>
                                        <li><a href="progress-bar.html">Progress Bar</a></li>
                                        <li><a href="tabs.html">Tabs</a></li>
                                        <li><a href="counters.html">Counters</a></li>
                                    </ul>
                                </li> --}}
                        </ul>
                    </div>
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/admin') }}" class="btn-custom invert med">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn-custom invert med">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn-custom invert med">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                    <div class="de-flex-col">
                        <div class="h-phone"><span>Need&nbsp;Help?</span><i
                                class="fa fa-phone id-color-secondary"></i> 1 200 300 9000</div>
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>