
@extends('app')
@section('title')
Accueil
@endsection('title')

@section('contenu')

<?php if (!isset($_GET['url'])) { ?>
    <!-- #header-wrap -->
   
  <section class="header-video p-0">
          <div id="hero_video">
              <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                  <div class="intro_title">
                      <h3 class="animated fadeInDown">Bienvenue au Guichet Municipal <br>de la <span>Commune de Libreville</span></h3>
                  <!--	<p class="animated fadeInDown">City Tours / Tour Tickets / Tour Guides</p>
                      <a href="#" class="animated fadeInUp button_intro">View Tours</a>
                      <a href="#" class="animated fadeInUp button_intro outline hidden-sm hidden-xs">View Tickets</a>-->
                  </div>
              </div>
          </div>
          <img src="assets/assets/img/video_fix.png" alt="Image" class="header-video--media" data-video-src="" data-teaser-source="assets/video/mbengue" data-provider="" data-video-width="854" data-video-height="480">
      </section>
      <!-- End Header video -->
      <?php } else {
    include('template/banner_inside.php');
  } ?>
  
  
  <!-- ACTIONS -->
  <section class="no-padding text-light bg-whit" style="margin-top:-135px;z-index:99">
      <div class="container">
          <div class="row no-gutters"> 
  
              <div class="col-lg-4 col-md-4 text-center bg-color">
                  <a href="connexion.php">
                      <div class="feature-box f-boxed style-3" data-bgcolor="rgba(0,0,0,.3)">
                          <i class="bg-green i-boxed fa fa-address-card"></i>
                          <div class="text">
                              <h4>Mon Compte Municipal</h4>
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                          </div>
                          <i class="wm fa fa-address-card"></i>
                      </div>
                  </a>
              </div>
  
              <div class="col-lg-4 col-md-4 text-center bg-color">
                  <a href="#">
                      <div class="feature-box f-boxed style-3" data-bgcolor="rgba(0,0,0,.1)">
                          <i class="bg-green i-boxed icofont-newspaper"></i>
                          <div class="text">
                              <h4>Publications légales</h4>
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                          </div>
                          <i class="wm icofont-newspaper"></i>
                      </div>
                  </a>
              </div>
  
              <div class="col-lg-4 col-md-4 text-center bg-color">
                  <a href="#">
                      <div class="feature-box f-boxed style-3" data-bgcolor="rgba(0,0,0,.4)">
                          <i class="bg-green i-boxed fa fa-users"></i>
                          <div class="text">
                              <h4>Besoin d'aide ?</h4>
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                          </div>
                          <i class="wm fa fa-users"></i>
                      </div>
                  </a>
              </div>
          </div>
      </div>
  </section>
  
  
  <!-- PRESTATION -->
  <section class="relative z1000 ">
      <div class="container">
          <div class="row mt-10f0 my-4">
              <div class="col-md-6 offset-sm-3">
                  <div class="text-center">
                      <h2>Prestations <span class="text-green">Aux Usagers</span></h2>
                      <div class="small-border"></div>
                  </div>
              </div>
              <div class="col-md-4 my-3 wow fadeInRight" data-wow-delay=".2s">
                  <a href="{{route ('etat-civil')}}">
                      <div class="mask rounded">
                          <div class="cover rounded">
                              <div class="">
                                  <h3 class="mb-lg-1"><span>Etat Civil</span></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                  consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>                                
                                  <a href="{{route ('etat-civil')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                              </div>
                          </div>
                          <img src="assets/img/services/1.jpg" alt="" class="img-responsive">
                      </div>
                  </a>
              </div>
  
              <div class="col-md-4 my-3 wow fadeInRight" data-wow-delay=".4s">
                  <a href="{{route ('attestation-certif')}}">
                      <div class="mask rounded">
                          <div class="cover rounded">
                              <div class="">
                                  <h3 class="mb-lg-1"><span>Attestations & Certificats</span></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                  consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                  <a href="{{route ('attestation-certif')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                              </div>
                          </div>
                          <img src="assets/img/services/2.jpg" alt="" class="img-responsive">
                      </div>
                  </a>
              </div>
  
              <div class="col-md-4 my-3 wow fadeInRight" data-wow-delay=".6s">
                  <a href="{{route ('commerce-entre')}}">
                      <div class="mask rounded">
                          <div class="cover rounded">
                              <div class="">
                                  <h3 class="mb-lg-1"><span>Commerces & Entreprises</span></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                  consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                  <a href="{{route ('commerce-entre')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                              </div>
                          </div>
                          <img src="assets/img/services/3.jpg" alt="" class="img-responsive">
                      </div>
                  </a>
              </div>
  
  
          </div>
      </div>
  </section>
  
  
  <!-- EXPERIENCE -->
  <!-- Slider --
  <div id="full-slider-wrapper">
              <div id="layerslider" style="width:100%;height:600px;">
                  <!-- first slide --
                  <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
                      <img src="assets/img/slides/slide_1.jpg" class="ls-bg" alt="Slide background">
                      <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Affordable Paris Tours</h3>
                      <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">City Tours / Tour Tickets / Tour Guides</p>
                      <a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='all_tour_list.html'>Read more</a>
                  </div>
  
                  <!-- second slide --
                  <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                      <img src="assets/img/slides/slide_2.jpg" class="ls-bg" alt="Slide background">
                      <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">More than 100 tours available</h3>
                      <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">Historic Buildings / Open Bus Tours / Museums Guides</p>
                      <a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='all_tour_list.html'>Read more</a>
                  </div>
  
                  <!-- third slide --
                  <div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
                      <img src="assets/img/slides/slide_3.jpg" class="ls-bg" alt="Slide background">
                      <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Discover fantastic places</h3>
                      <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">We offer a variety of services and options</p>
                      <a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='all_tour_list.html'>Read more</a>
                  </div>
  
                  <!-- fourth slide --
                  <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:14;">
                      <img src="assets/img/slides/slide_4.jpg" class="ls-bg" alt="Slide background">
                      <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">CityTours provides tour guides</h3>
                      <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">Visit museum with a dedicated tour guide</p>
                      <a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='all_tour_list.html'>Read more</a>
                  </div>
  
              </div>
          </div> -->
  
          <div class="tp-banner-container">
              <div class="tp-banner">
                  <ul>
                      <!-- SLIDE  -->
                      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                          <!-- MAIN IMAGE -->
                          <img src="assets/img/slides/slide-0.jpeg" alt="slidebg1" data-lazyload="assets/img/slides/slide-0.jpeg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                          <!-- LAYER NR. 1 
                          <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" 
                          data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                          data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">LIBREVILLE, Ville Attractive
                          </div>-->
                          
                      </li>
                      <!-- SLIDE  -->
                      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                          <!-- MAIN IMAGE -->
                          <img src="assets/img/slides/slide-1.jpeg" alt="slidebg1" data-lazyload="assets/img/slides/slide-1.jpeg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                          <!-- LAYER NR. 1 
                          <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" 
                          data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                          data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">CENTRE D'AFFAIRES
                          </div>-->
                          
                      </li>
  
                      <!-- SLIDE  -->
                      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                          <!-- MAIN IMAGE -->
                          <img src="assets/img/slides/slide-2.jpeg" alt="slidebg1" data-lazyload="assets/img/slides/slide-2.jpeg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                          <!-- LAYER NR. 1 
                          <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" 
                          data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                          data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">LIBREVILLE
                          </div>-->
                          
                      </li>
  
                      <!-- SLIDE  -->
                      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                          <!-- MAIN IMAGE -->
                          <img src="assets/img/slides/slide-1.jpeg" alt="slidebg1" data-lazyload="assets/img/slides/slide-1.jpeg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                          <!-- LAYER NR. 1 
                          <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" 
                          data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                          data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">LIBREVILLE
                          </div>-->
                          
                      </li>
  
  
                  </ul>
                  <div class="tp-bannertimer tp-bottom"></div>
              </div>
          </div>
          <!-- End Slider -->
  
  <!-- GALLERIER -->
  
  <div class="bg-white">
          <div class="container margin_60">
              <div class="row small-gutters categories_grid">
                  <div class="col-sm-12 col-md-6">
                      <a href="all_tours_list.html">
                          <img src="assets/img/img_cat_home_1.jpg" alt="" class="img-fluid">
                          <div class="wrapper">
                              <h2>Hotel de ville</h2>
                              <p>1150 Locations</p>
                          </div>
                      </a>
                  </div>
                  <div class="col-sm-12 col-md-6">
                      <div class="row small-gutters mt-md-0 mt-sm-2">
                          <div class="col-sm-6">
                              <a href="all_tours_list.html">
                                  <img src="assets/img/img_cat_home_2.jpg" alt="" class="img-fluid">
                                  <div class="wrapper">
                                      <h2>Tours</h2>
                                      <p>800 Locations</p>
                                  </div>
                              </a>
                          </div>
                          <div class="col-sm-6">
                              <a href="all_hotels_list.html">
                                  <img src="assets/img/img_cat_home_3.jpg" alt="" class="img-fluid">
                                  <div class="wrapper">
                                      <h2>Hotels</h2>
                                      <p>650 Locations</p>
                                  </div>
                              </a>
                          </div>
                          <div class="col-sm-12 mt-sm-2">
                              <a href="all_restaurants_list.html">
                                  <img src="assets/img/img_cat_home_4.jpg" alt="" class="img-fluid">
                                  <div class="wrapper">
                                      <h2>Restaurants</h2>
                                      <p>1132 Locations</p>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/categories_grid-->
          </div>
          <!-- /container -->
      </div>
      <!-- /white_bg -->
  
  
      <!-- FAQS -->
      <section aria-label="section">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-center">
                      <h2>Informations <span class="text-green">Pratiques</span></h2>
                      <div class="small-border"></div>
                  </div>
  
                  <div class="col-md-6">
                      <!-- Accordion -->
                      <div id="accordion-1" class="accordion">
  
                          <!-- Accordion item 1 -->
                          <div class="card">
                              <div id="heading-a1" class="card-header bg-white shadow-sm border-0">
                                  <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a1" aria-expanded="false" aria-controls="collapse-a1" class="d-block position-relative text-dark collapsible-link py-2">Organiser son mariage</a></h6>
                              </div>
                              <div id="collapse-a1" aria-labelledby="heading-a1" data-parent="#accordion-1" class="collapse">
                                  <div class="card-body p-4">
                                      <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                      <a href="" class="btn btn-warning mt-2">en savoir plus</a>
                                  </div>
                              </div>
                          </div>
  
                          <!-- Accordion item 2 -->
                          <div class="card">
                              <div id="heading-a2" class="card-header bg-white shadow-sm border-0">
                                  <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a2" aria-expanded="false" aria-controls="collapse-a2" class="d-block position-relative collapsed text-dark collapsible-link py-2">Déclaration de naissance</a></h6>
                              </div>
                              <div id="collapse-a2" aria-labelledby="heading-a2" data-parent="#accordion-1" class="collapse">
                                  <div class="card-body p-4">
                                      <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                      <a href="" class="btn btn-warning mt-2">en savoir plus</a>
                                  </div>
                              </div>
                          </div>
  
                          <!-- Accordion item 3 -->
                          <div class="card">
                              <div id="heading-a3" class="card-header bg-white shadow-sm border-0">
                                  <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a3" aria-expanded="false" aria-controls="collapse-a3" class="d-block position-relative collapsed text-dark collapsible-link py-2">Demande d'acte de naissance</a></h6>
                              </div>
                              <div id="collapse-a3" aria-labelledby="heading-a3" data-parent="#accordion-1" class="collapse">
                                  <div class="card-body p-4">
                                      <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                      <a href="" class="btn btn-warning mt-2">en savoir plus</a>
                                  </div>
                              </div>
                          </div>
  
                      </div>
                  </div>
                  
  
                  <div class="col-md-6">
                      <!-- Accordion -->
                      <div id="accordion-2" class="accordion">
  
                          <!-- Accordion item 1 -->
                          <div class="card">
                              <div id="heading-b1" class="card-header bg-white shadow-sm border-0">
                                  <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b1" aria-expanded="false" aria-controls="collapse-b1" class="d-block position-relative text-dark collapsible-link py-2">Attestation de domicile</a></h6>
                              </div>
                              <div id="collapse-b1" aria-labelledby="heading-b1" data-parent="#accordion-2" class="collapse">
                                  <div class="card-body p-4">
                                      <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                      <a href="#" class="btn btn-warning mt-2">en savoir plus</a>
                                  </div>
                              </div>
                          </div>
  
                          <!-- Accordion item 2 -->
                          <div class="card">
                              <div id="heading-b2" class="card-header bg-white shadow-sm border-0">
                                  <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b2" aria-expanded="false" aria-controls="collapse-b2" class="d-block position-relative collapsed text-dark collapsible-link py-2">Licence de débit de boisson</a></h6>
                              </div>
                              <div id="collapse-b2" aria-labelledby="heading-b2" data-parent="#accordion-2" class="collapse">
                                  <div class="card-body p-4">
                                      <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                      <a href="#" class="btn btn-warning mt-2">en savoir plus</a>
                                  </div>
                              </div>
                          </div>
  
                          <!-- Accordion item 3 -->
                          <div class="card">
                              <div id="heading-b3" class="card-header bg-white shadow-sm border-0">
                                  <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b3" aria-expanded="false" aria-controls="collapse-b3" class="d-block position-relative collapsed text-dark collapsible-link py-2">Vignettes taxis</a></h6>
                              </div>
                              <div id="collapse-b3" aria-labelledby="heading-b3" data-parent="#accordion-2" class="collapse">
                                  <div class="card-body p-4">
                                      <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                      <a href="#" class="btn btn-warning mt-2">en savoir plus</a>
                                  </div>
                              </div>
                          </div>
  
                      </div>
                  </div>
                          <a href="{{route ('faqs')}}" class="animated fadeInUp button_intro mx-auto mt-4">voir plus</a>
  
              </div>
          </div>
      </section>




@endsection('contenu')