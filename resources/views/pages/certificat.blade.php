
@extends('app')
@section('title', 'Certificats')

@section('banniere2')
<section class="parallax-window" data-parallax="scroll" data-image-src="img/librevillehoteldeville1400x470.jpg" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
			<div class="animated fadeInDown">
				<h1 class="text-warning">Certificats</h1>
			</div>
		</div>
	</section>
@endsection('banniere2')

@section('contenu')
	<!-- End section -->

		<div id="position">
			<div class="container">
				<ul>
					<li><a href="index.php">Accueil</a>
					</li>
					<li>Démarches & Infos Pratiques
					</li>
					<li>Attestations & Certificats</li>
					<li>Certificats</li>
				</ul>
			</div>
		</div>
		<!-- Position -->

		<div class="container margin_60">

			<div class="row">

				<div class="col-lg-9">
					<!--< href="#" class="animated fadeInUp button_intro m-2"></a>
					<a href="#" class="animated fadeInUp button_intro m-2"></a>
					<a href="#" class="animated fadeInUp button_intro m-2"></a>-->


					<section class="relative z1000 no-top">
						<div class="">
							<div class="row mt-10f0">
								
								<div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".2s">
									<a href="{{route ('prestation')}}">
										<div class="mask rounded">
											<div class="cover">
												<div class="">
													<h3 class="mb-lg-1"><span>Attestation d’accueil</span></h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
													<a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
												</div>
											</div>
											<img src="img/services/1.jpg" alt="" class="img-responsive">
										</div>
									</a>
								</div>

								<div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".4s">
									<a href="{{route ('prestation')}}">
									<div class="mask rounded">
										<div class="cover rounded">
											<div class="">
												<h3 class="mb-lg-1"><span>Certificat de vie</span></h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                				<a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
											</div>
										</div>
										<img src="img/services/2.jpg" alt="" class="img-responsive">
									</div>
									</a>
								</div>

								<div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".6s">
								<a href="{{route ('prestation')}}">

									<div class="mask rounded">
										<div class="cover rounded">
											<div class="">
												<h3 class="mb-lg-1"><span>Certificat de vie commune</span></h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                				<a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
											</div>
										</div>
										<img src="img/services/3.jpg" alt="" class="img-responsive">
									</div>
								</div>

								<div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".2s">
									<a href="{{route ('prestation')}}">
										<div class="mask rounded">
											<div class="cover rounded">
												<div class="">
													<h3 class="mb-lg-1"><span>Certificat de changement de résidence</span></h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                				<a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
												</div>
											</div>
											<img src="img/services/1.jpg" alt="" class="img-responsive">
										</div>
									</a>
								</div>

								<div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".4s">
									<a href="{{route ('prestation')}}">
									<div class="mask rounded">
										<div class="cover rounded">
											<div class="">
												<h3 class="mb-lg-1"><span>Attestation de domicile</span></h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                				<a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
											</div>
										</div>
										<img src="img/services/2.jpg" alt="" class="img-responsive">
									</div>
									</a>
								</div>

								<div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".6s">
								<a href="{{route ('prestation')}}">

									<div class="mask rounded">
										<div class="cover rounded">
											<div class="">
												<h3 class="mb-lg-1"><span>Légalisation de signature</span></h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                				<a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
											</div>
										</div>
										<img src="img/services/3.jpg" alt="" class="img-responsive">
									</div>
								</div>

								<div class="col-md-6 col-lg-4 my-3 wow fadeInRight" data-wow-delay=".2s">
									<a href="{{route ('prestation')}}">
										<div class="mask rounded">
											<div class="cover rounded">
												<div class="">
													<h3 class="mb-lg-1"><span>Copie conforme</span></h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                				<a href="{{route ('prestation')}}" class="btn-custom invert mx-auto" style="margin-top:-25px">en savoir plus</a>
												</div>
											</div>
											<img src="img/services/1.jpg" alt="" class="img-responsive">
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
						<a href="tel://004542344599" class="phone">+45 423 445</a>
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
