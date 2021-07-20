@extends('app')
@section('title')
Faqs
@endsection('title')

@section('banniere2')
<section class="parallax-window" data-parallax="scroll" data-image-src="img/librevillehoteldeville1400x470.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
        <div class="animated fadeInDown">
            <h1 class="text-warning">Informations Pratiques</h1>
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
					<li>Faqs
					</li>
				</ul>
			</div>
		</div>
		<!-- Position -->


		<div class="container margin_60">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">

					<div class="box_style_2 d-none d-sm-block">
						<i class="icon_set_1_icon-57"></i>
						<h4>Besoin <span>d'aide ?</span></h4>
						<a href="tel://004542344599" class="phone">+45 423 445</a>
						<small>Lundi à Vendredi 9h - 16h</small>
					</div>

					<!--End sticky -->
					<div class="box_style_2 bg-dark d-none d-sm-block" style="height:400px">
						<h4> <span>Pub</span></h4>
					</div>

					<div class="theiaStickySidebar pt-4">
						<div class="box_style_cat" id="faq_box">
							<ul id="cat_nav">
								<li><a href="#payment" class="active"><i class="icon_set_1_icon-95"></i>Etat Civil</a>
								</li>
								<li><a href="#tips"><i class="icon_set_1_icon-95"></i>Attestations & Certificats</a>
								</li>
								<li><a href="#reccomendations"><i class="icon_set_1_icon-95"></i>Commercerces & Entreprises</a>
								</li>
								<li><a href="#terms"><i class="icon_set_1_icon-95"></i>Termes et conditons</a>
								</li>
								<li><a href="#booking"><i class="icon_set_1_icon-95"></i>Autres</a>
								</li>
								<li><a href="#transfers"><i class="icon_set_1_icon-95"></i>Transfers</a>
								</li>
								<li><a href="#pricing"><i class="icon_set_1_icon-95"></i>Prix</a>
								</li>
								<li><a href="#privacy"><i class="icon_set_1_icon-95"></i>Vie Privée</a>
								</li>
							</ul>
						</div>
					</div>


				</aside>
				<!--End aside -->
				<div class="col-lg-9" id="faq">
					<div id="payment" class="accordion_styled">
					<h3 class="margin_top">Etat Civil</h3>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#payment" href="#collapseOne_payment">Anim pariatur cliche reprehenderit?<i class="indicator icon-minus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseOne_payment" class="collapse show" data-parent="#payment">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#payment" href="#collapseTwo_payment">Parsnip lotus root celery?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseTwo_payment" class="collapse" data-parent="#payment">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#payment" href="#collapseThree_payment">Beet greens peanut salad?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseThree_payment" class="collapse" data-parent="#payment">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>
					<!--End payment -->

					<div id="tips" class="accordion_styled">
					<h3>Attestations & Certificats</h3>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#tips" href="#collapseOne_tips">Anim pariatur cliche reprehenderit?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseOne_tips" class="collapse" data-parent="#tips">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#tips" href="#collapseTwo_tips">Parsnip lotus root celery?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseTwo_tips" class="collapse" data-parent="#tips">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#tips" href="#collapseThree_tips">Beet greens peanut salad?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseThree_tips" class="collapse" data-parent="#tips">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>
					<!--End tips -->

					<div id="reccomendations" class="accordion_styled">
					<h3>Commercerces & Entreprises</h3>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#reccomendations" href="#collapseOne_reccomendations">Anim pariatur cliche reprehenderit?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseOne_reccomendations" class="collapse" data-parent="#reccomendations">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#reccomendations" href="#collapseTwo_reccomendations">Parsnip lotus root celery?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseTwo_reccomendations" class="collapse" data-parent="#reccomendations">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#reccomendations" href="#collapseThree_reccomendations">Beet greens peanut salad?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseThree_reccomendations" class="collapse" data-parent="#reccomendations">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>
					<!--End reccomendations -->

					<div id="terms" class="accordion_styled">
					<h3>Termes et conditions</h3>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#terms" href="#collapseOne_terms">Anim pariatur cliche reprehenderit?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseOne_terms" class="collapse" data-parent="#terms">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#terms" href="#collapseTwo_terms">Parsnip lotus root celery?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseTwo_terms" class="collapse" data-parent="#terms">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#terms" href="#collapseThree_terms">Beet greens peanut salad?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseThree_terms" class="collapse" data-parent="#terms">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>
					<!--End terms -->

					<div id="booking" class="accordion_styled">
					<h3>Autres</h3>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#booking" href="#collapseOne_booking">Anim pariatur cliche reprehenderit?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseOne_booking" class="collapse" data-parent="#booking">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#booking" href="#collapseTwo_booking">Parsnip lotus root celery?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseTwo_booking" class="collapse" data-parent="#booking">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#booking" href="#collapseThree_booking">Beet greens peanut salad?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseThree_booking" class="collapse" data-parent="#booking">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>
					<!--End booking -->

					<div id="transfers" class="accordion_styled">
					<h3>Transfers</h3>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#transfers" href="#collapseOne_transfers">Anim pariatur cliche reprehenderit?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseOne_transfers" class="collapse" data-parent="#transfers">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#transfers" href="#collapseTwo_transfers">Parsnip lotus root celery?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseTwo_transfers" class="collapse" data-parent="#transfers">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#transfers" href="#collapseThree_transfers">Beet greens peanut salad?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseThree_transfers" class="collapse" data-parent="#transfers">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>
					<!--End transfers -->

					<div id="pricing" class="accordion_styled">
					<h3>Prix</h3>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#pricing" href="#collapseOne_pricing">Anim pariatur cliche reprehenderit?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseOne_pricing" class="collapse" data-parent="#pricing">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#pricing" href="#collapseTwo_pricing">Parsnip lotus root celery?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseTwo_pricing" class="collapse" data-parent="#pricing">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#pricing" href="#collapseThree_pricing">Beet greens peanut salad?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseThree_pricing" class="collapse" data-parent="#pricing">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>
					<!--End pricing -->

					<div id="privacy" class="accordion_styled">
					<h3>Vie Privée</h3>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#privacy" href="#collapseOne_privacy">Anim pariatur cliche reprehenderit?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseOne_privacy" class="collapse" data-parent="#privacy">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#privacy" href="#collapseTwo_privacy">Parsnip lotus root celery?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseTwo_privacy" class="collapse" data-parent="#privacy">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4>
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#privacy" href="#collapseThree_privacy">Beet greens peanut salad?<i class="indicator icon-plus float-right"></i></a>
								</h4>
							</div>
							<div id="collapseThree_privacy" class="collapse" data-parent="#privacy">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>
					<!--End privacy -->
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