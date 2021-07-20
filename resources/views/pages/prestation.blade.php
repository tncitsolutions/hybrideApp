@extends('app')
@section('title')
Prestation
@endsection('title')
@section('banniere2')
<section class="parallax-window" data-parallax="scroll" data-image-src="assets/img/librevillehoteldeville1400x470.jpg" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
			<div class="animated fadeInDown">
				<h1 class="text-warning">Prestation</h1>
				<p>Acte de naissance</p>
			</div>
		</div>
	</section>
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
					<li>Acte de naissance</li>
				</ul>
			</div>
		</div>
		<!-- Position -->

		<div class="container margin_60">

			<div class="row">
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
					
					<div class="box_style_2 d-none d-sm-block">
						<i class="icon_documents_alt mb-3"></i>
						<h4>Débuter la <span>procédure</span></h4>
						<a href="{{route ('prestation-form')}}" class="animated fadeInUp button_intro">en ligne</a>
						<small></small>
					</div>

					<div class="bg-dark" style="height:400px">
						<h4> <span>Pub</span></h4>
						
					</div>
				</aside>
				<!--End aside -->

				<div class="col-lg-9">
				<div class="mb-4">
					<h2>Demande d'acte de naissance</h2>
					<p>C'est un document qui aide à établir la carte nationnale d'identité, permis de conduire, passeport et autres documents administratifs. Il permet l'inscription des enfants à 
					l'école tout comme l'acte sur les listes électorales</p>					
					
					<h5>Quand peut-on faire cette démarche ?</h5>
					<p>Dans les 3 jours de l’accouchement pour les enfants nés dans les communes et chefs-lieux de 
					district et, dans les autres, dans le délai d’1 mois (art 169 Code Civil).</p>

					<h5>A qui s’adresser ? quelle administration ?</h5>
					<p>Dans le centre d'état civil du lieu de naissance de l'enfant (mairie, préfecture, sous-préfecture).</p>

					<h5>Que doit contenir le dossier ?</h5>
					<p>- Pièce d’identité des géniteurs (père et mère) ; carte de séjour pour les parents non gabonais.</p>
					<p>- Certificat d’accouchement ou bulletin de naissance délivré par l’hôpital (une simple déclaration si la naissance a eu lieu à domicile).</p>
					
					<h5>Coût de la procédure ?</h5>
					<p>La taxe municipale est de 2.000 fcfa.</p>

					<h5>Durée de la procédure ?</h5>
					<p>De quelques jours à quelques semaines selon les mairies.</p>
					
					<h5>Qui peut déclarer une naissance et faire une demande d'acte de naissance ?</h5>
					<p>- Le père, la mère ou leur représentant.</p>
					<p>- Le médecin ou la sage femme qui a assisté à l'accouchement.</p>
					
					<h5>Et après?</h5>
					<p>Après il faut s'occuper de l'enfant, l'éduquer et l'aimer !.</p>
				</div>

				<div class="">
					<h3>Formulaires téléchargeable</h3>
					<table class="table">
                        <thead class="">
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Fichier</td>
                            <td><a href="#">Telecharger</a></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Fichier</td>
                            <td><a href="#">Telecharger</a></td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Fichier</td>
                              <td><a href="#">Telecharger</a></td>
                            </tr>
                          <tr>
                            <td>4</td>
                            <td>Fichier</td>
                            <td><a href="#">Telecharger</a></td>
                          </tr>
                        </tbody>
                      </table>
				</div>

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
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->

@endsection('contenu')