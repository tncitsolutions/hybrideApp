@extends('app')
@section('title')
Actualiés
@endsection('title')
@section('banniere2')
<section class="parallax-window" data-parallax="scroll" data-image-src="img/librevillehoteldeville1400x470.jpg" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
			<div class="animated fadeInDown">
				<h1 class="text-warning">Paiement</h1>
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
					<li>Prestation</li>
					<li>Paiement</li>
				</ul>
			</div>
		</div>
		<!-- Position -->

		<div class="container margin_60">
			<div class="checkout-page">

				<ul class="default-links">
					<li>Vous avez un compte? <a href="#sign-in-dialog" id="access_link">Se connecter</a>
					</li>
				</ul>

				<div class="row">
					<div class="col-lg-7">

						<div class="billing-details">
							<div class="shop-form">
								<form method="post">
									<div class="default-title">
										<h2>Information de paiement</h2>
									</div>
									<div class="row">
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>First name <sup>*</sup>
											</label>
											<input type="text" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Last name <sup>*</sup>
											</label>
											<input type="text" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-12 col-sm-12 col-xs-12">
											<label>Company name</label>
											<input type="text" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Email Address <sup>*</sup>
											</label>
											<input type="email" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Phone <sup>*</sup>
											</label>
											<input type="text" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-12 col-sm-12 col-xs-12">
											<label>Address <sup>*</sup>
											</label>
											<input type="text" name="field-name" value="" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-12 col-sm-12 col-xs-12">
											<label>Country <sup>*</sup>
											</label>
											<select name="country" class="form-control">
												<option>United Kingdom (UK)</option>
												<option>Pakistan</option>
												<option>USA</option>
												<option>CANADA</option>
												<option>INDIA</option>
											</select>
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Zip / Postal Code</label>
											<input type="text" name="code" value="" placeholder="Zip / Postal Code" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>City <sup>*</sup>
											</label>
											<select name="state" class="form-control">
												<option>City</option>
												<option>Maharshtra</option>
												<option>NY</option>
												<option>ALabama</option>
												<option>Mexico</option>
											</select>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<label class="container_check">
												Créer un compte ?
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<label>Order note</label>
											<textarea placeholder="Notes about your order, e.g. special notes for delivery" class="form-control"></textarea>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!--End Billing Details-->
					</div>
					<!--End Col-->

					<div class="col-lg-5">
						<div class="your-order">
							<div class="default-title">
								<h2>Somme à Payer</h2>
							</div>
							<ul class="orders-table">
								<li class="table-header clearfix">
									<div class="col">
										<h4>Paiement du service</h4>
										<h5>Demande d'acte de naissance</h5>
									</div>
									<div class="col second">
										<h4>Cout: <span class="text-success">25.000</span></h4>
									</div>
								</li>
							</ul>
							<div class="coupon-code">
								<div class="form-group">
									<div class="field-group">
										<input type="text" name="code" value="" placeholder="Coupon Code" class="form-control">
									</div>
									<div class="field-group btn-field">
										<button type="submit" class="btn_cart_outine">Apply</button>
									</div>
								</div>
							</div>
						</div>
						<!--End Your Order-->

						<div class="place-order">
							<div class="default-title">
								<h2>Mode de paiement</h2>
							</div>
							<div class="payment-options">
								<ul>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-1" checked>
											<label for="payment-1">Cheque Payment<span class="small-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span>
											</label>
										</div>
									</li>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-2">
											<label for="payment-2">Direct Bank Transfer</label>
										</div>
									</li>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-3">
											<label for="payment-3">Airtel Money<img src="img/airtel-money.png" width="20px" alt="">
											</label>
										</div>
									</li>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-3">
											<label for="payment-3">Moov Money <img src="img/moov-money2.png" width="20px" class="img-fluid" alt="">
											</label>
										</div>
									</li>
									<form>
										<div class="form-group col-lg-6">
											<input type="tel" class=" form-control" name="" placeholder="">
										</div>
									</form>
									<!--<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-3">
											<label for="payment-3">Paypal<img src="img/credit-card-icon.png" alt="">
											</label>
										</div>
									</li>-->
								</ul>
							</div>
							<button type="button" class="btn_full">Payer <i class="icon-left"></i>
							</button>
						</div>
						<!--End Place Order-->

					</div>
				</div>
			</div>
		</div>
		<!-- End Container -->


@endsection('contenu')