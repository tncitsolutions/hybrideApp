@extends('app')
@section('title')
Connexion
@endsection('title')



@section('contenu')

<div class="container-fluid login" id="hero">
	<div class="container" style="padding-top:50px;padding-bottom:50px;">
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<div id="" class="">
					<div class="">
						<div class="row justify-content-center">
							<div class="col-xl-6 col-md-6 col-12">
								<div id="login">
									<div class="text-center mb-5"><img src="img/logo.png" alt="Image" width="160" height="160"></div>
									<form class="row">

										<div class="form-group col-lg-12">
											<label>Téléphne</label>
											<input type="tel" class="form-control" name="" placeholder="">
										</div>
										<div class="form-group col-lg-12">
											<label>Mot de passe</label>
											<input type="password" class="form-control" name="" id="password1" placeholder="">
										</div>
										<div id="pass-info" class="clearfix"></div>
										<!-- CONNEXION -->
										<div class="form-group col-lg-12">
											<input type="submit" class="btn btn-success mt-2 col-12" value="Me Connecter">
										</div>
										<div class="text-center">
											Vous n'avez pas de compte ? <a href="{{route ('inscription')}}">S'inscrire</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- End col lg-9 -->

			<aside class="col-lg-3 mardin_60,j" style="margin-top:120px">
				<!-- <p>
						<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</p> -->
				<!--End filters col-->
				<div class="box_style_1">
					<h4>Address <span><i class="icon-pin pull-right"></i></span></h4>
					<p>
						Place Charles de Gaulle, 75008 Paris
					</p>
					<hr>
					<h4>Help center <span><i class="icon-help pull-right"></i></span></h4>
					<p>
						Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie.
					</p>
					<ul id="contact-info">
						<li>+ 61 (2) 8093 3400 / + 61 (2) 8093 3402</li>
						<li><a href="#">info@domain.com</a>
						</li>
					</ul>
				</div>
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