@extends('app')
@section('title')
Prestation
@endsection('title')


@section('contenu')

<div class="container-fluid login" id="hero" style="background-image:url('assets/img/bg-form.png')">
	<div class="container" style="padding-top:120px">
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<div id="" class="">
					<div class="">
						<div class="row">
							<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 mx-auto">
							<div id="login">
								<div class="text-center mb-3"><img src="assets/img/logo.png" alt="Image" width="160" height="160">
								<br>
									<h2 classsf="text-center mx-auto">Déclaration de naissance</h2>
								</div>
									<hr>
								<form class="row" method="post" action="{{route ('paiement')}}">
								<!-- Informations du lieu de naissance -->
								<div class="col-lg-12">
										<h4 classsf="">Informations du lieu de naissance</h4>
									</div>
									<div class="form-group col-lg-6">
										<label>Province</label>
										<input type="text" class=" form-control" name="" placeholder="">
									</div>
									<div class="form-group col-lg-6">
										<label>Ville</label>
										<input type="text" class=" form-control" name="" placeholder="">
									</div>
									<div class="form-group col-lg-6">
										<label>Arrondissement</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Hopital</label>
											<input type="text" class=" form-control"  name=""placeholder="">
										</div>

									<!-- Informations de l'enfant -->
										<div class="col-lg-12">
											<h4 classsf="">Informations de l'enfant</h4>
										</div>
										<div class="form-group col-lg-6">
											<label>Date de naissance</label>
											<input type="date" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Heure de naissance</label>
											<input type="time" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>sexe</label>
											<select class="form-control">
												<option>Masculin</option>
												<option>Feminin</option>
											</select>
										</div>
										<div class="form-group col-lg-6">
											<label>Nom</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Prénom (s)</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>

									<!-- Informations de la mère -->
										<div class="col-lg-12">
											<h4 classsf="">Informations de la père</h4>
										</div>
										<div class="form-group col-lg-6">
											<label>Nom</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Prénom (s)</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Date de naissance</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Lieu de naissance</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Profession</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Nationalité</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Coutume</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>

									<!-- Informations de la père -->
										<div class="col-lg-12">
											<h4 classsf="">Informations de la mère</h4>
										</div>
										<div class="form-group col-lg-6">
											<label>Nom</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Prénom (s)</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Date de naissance</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Lieu de naissance</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Profession</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Nationalité</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-6">
											<label>Coutume</label>
											<input type="text" class=" form-control" name="" placeholder="">
										</div>

										<!-- ENREGISTREMENT -->
										<div class="form-group col-lg-12">
											<input type="submit" class="btn btn-success mt-3 col-12"  value="Enregistrer">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- End col lg-9 -->

			<aside class="col-lg-3 margin_60">
				<!-- <p>
					<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
				</p> -->
				<!--End filters col-->
				<div class="box_style_2 d-none d-sm-block mt-lg-5">
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
</div>
<!-- End container -->

@endsection('contenu')