
@extends('app')

@section('title')
Etat Civil
@endsection('title')

@section('banniere2')
<section class="parallax-window" data-parallax="scroll" data-image-src="assets/img/librevillehoteldeville1400x470.jpg" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
			<div class="animated fadeInDown">
				<h1 class="text-warning">Etat Civil
</h1>
			</div>
		</div>
</section>
<!-- End section -->
@endsection('banniere2')

@section('contenu')


<div id="position">
    <div class="container">
        <ul>
            <li><a href="index.php">Accueil</a>
            </li>
            <li>Démarches & Infos Pratiques
            </li>
            <li>État Civil</li>
        </ul>
    </div>
</div>
<!-- Position -->

<div class="container margin_60">
    <div class="row">


        <div class="col-lg-9">

            <section class="relative z1000 no-top">
                <div class="">
                    <div class="row mt-10f0">

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".2s">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Organiser son mariage</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/1.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Demande d’acte de mariage</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/2.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".6s">
                            <a href="{{route ('prestation')}}">

                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Location de salle</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/3.jpg" alt="" class="img-responsive">
                                </div>
                        </div>


                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".2s">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Reconnaissance</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/1.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Déclaration de naissance</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/2.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".6s">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Demande d’acte de naissance</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/3.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Décès et transcription</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/2.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".4s">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Demande d’actes d’état civil</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/3.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".6s">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Changement de nom / prénom</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/1.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".2s">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Achat ou renouvellement de concession funéraire</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/2.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".4s">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Duplicata de livret de famille</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/3.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".6s">
                            <a href="{{route ('prestation')}}">
                                <div class="mask rounded">
                                    <div class="cover rounded">
                                        <div class="">
                                            <h3 class="mb-lg-1"><span>Ouverture/fermeture registre d’état civil</span></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            <a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
                                        </div>
                                    </div>
                                    <img src="assets/img/services/3.jpg" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>


            <!-- <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><span class="page-link">1<span class="sr-only">(current)</span></span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav> -->
            <!-- end pagination-->

        </div>
        <!-- End col lg-9 -->
        
        <aside class="col-lg-3">
            <!-- <p>
                <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
            </p> -->

            <!--End filters col-->
            <div class="box_style_2 d-none d-sm-block">
                <i class="icon_set_1_icon-57"></i>
                <h4>Besoin <span>d'aide ?</span></h4>
                <a href="tel://004542344599" class="phone">+45 423 </a>
                <small>Lundi à Vendredi 9h - 16h</small>
            </div>

            <div class="bg-dark d-none d-sm-block" style="height:400px">
                <h4> <span>Pub</span></h4>

            </div>
        </aside>
        <!--End aside -->
    </div>
    <!-- End row -->
</div>
<!-- End container -->


@endsection('contenu')
