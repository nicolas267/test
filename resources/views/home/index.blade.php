@extends('layouts.app_front')

@section('content')
	<!-- Main Content - start -->
	<main>
		<!-- Frontpage Slider -->
		<div class="frontslider-wrap">
			<div class="responisve-container">
				<div class="slider" id="front-slider">
					<div class="slide">
						<img 	src="{{Request::root()}}/frontend_template/HTML/img/front-slider/1.png"
								data-position="45,430" data-in="fade" data-delay="0" data-out="fade" alt="American Legends">
						<p 		class="caption1"			
								data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">AMERICAN</p>
						<p 		class="caption2" 	
								data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">LEGENDS</p>		
					</div>
					<div class="slide">
						<img 	src="{{Request::root()}}/frontend_template/HTML/img/front-slider/2.png"
								data-position="50,518" data-in="fade" data-delay="0" data-out="fade" alt="Legendary Bike">
						<p 		class="caption1"			
								data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">OFFROAD</p>
						<p 		class="caption2" 	
								data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">KING</p>	
					</div>
					<div class="slide">
						<img 	src="{{Request::root()}}/frontend_template/HTML/img/front-slider/3.png"
								data-position="21,480" data-in="fade" data-delay="0" data-out="fade" alt="Dream Car">
						<p 		class="caption1"			
								data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">DREAM</p>
						<p 		class="caption2" 	
								data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">CARS</p>	
					</div>
				</div>
			</div>
		</div>


		<!-- Categories List -->
		<div class="cont">
		<ul class="frontcategs">
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg1.png" alt="">
					</span>
					<p>Automobiles</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg2.png" alt="">
					</span>
					<p>Motorcycles</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg3.png" alt="">
					</span>
					<p>ATVs</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg4.png" alt="">
					</span>
					<p>Snowmobiles</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg5.png" alt="">
					</span>
					<p>UTVs</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg6.png" alt="">
					</span>
					<p>Scooters</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg7.png" alt="">
					</span>
					<p>Watercrafts</p>
				</a>
			</li>
		</ul>
		</div>


		<!-- Frontpage Filter -->
		<div class="frontsearch-wrap">
			<div class="cont frontsearch">
				<h2>Search</h2>
				<p class="frontsearch-count">21900 ITEMS</p>
				<div class="frontsearch-wrap">
					<div class="frontsearch-selects">
						<div class="dropdown-wrap frontsearch-select">
							<p class="dropdown-title frontsearch-select-ttl">Motorcycles</p>
							<ul class="dropdown-list">
								<li>
									<a href="#">Choose Type</a>
								</li>
		 						<li>
									<a href="#">Automobiles</a>
								</li>
								<li class="active">
									<a href="#">Motorcycles</a>
								</li>
								<li>
									<a href="#">ATVs</a>
								</li>
								<li>
									<a href="#">Snowmobiles</a>
								</li>
								<li>
									<a href="#">UTVs</a>
								</li>
								<li>
									<a href="#">Scooters</a>
								</li>
								<li>
									<a href="#">Watercrafts</a>
								</li>
							</ul>
						</div>
						<div class="dropdown-wrap frontsearch-select">
							<p class="dropdown-title frontsearch-select-ttl">Enzo</p>
							<ul class="dropdown-list">
								<li>
									<a href="#">Choose Model</a>
								</li>
								<li>
									<a href="#">Jetmax</a>
								</li>
								<li>
									<a href="#">Speeder</a>
								</li>
								<li>
									<a href="#">PCG</a>
								</li>
								<li>
									<a href="#">Sanchez</a>
								</li>
								<li>
									<a href="#">Vader</a>
								</li>
								<li class="active">
									<a href="#">Enzo</a>
								</li>
								<li>
									<a href="#">Nex</a>
								</li>
							</ul>
						</div>
						<div class="dropdown-wrap frontsearch-select">
							<p class="dropdown-title frontsearch-select-ttl">GT-Z600</p>
							<ul class="dropdown-list">
								<li>
									<a href="#">Choose Version</a>
								</li>
								<li>
									<a href="#">GT-Z10</a>
								</li>
								<li>
									<a href="#">GT-Z400</a>
								</li>
								<li class="active">
									<a href="#">GT-Z600</a>
								</li>
								<li>
									<a href="#">H-200</a>
								</li>
								<li>
									<a href="#">H-300</a>
								</li>
								<li>
									<a href="#">F10</a>
								</li>
								<li>
									<a href="#">F20</a>
								</li>
								<li>
									<a href="#">A120</a>
								</li>
							</ul>
						</div>
						<div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
							<p id="range_year_ttl" class="dropdown-title frontsearch-select-ttl">2013 - 2016</p>
							<ul class="dropdown-list">
								<li>
									<input type="text" id="range_year" value="">
								</li>
							</ul>
						</div>
						<div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
							<p id="range_cost_ttl" class="dropdown-title frontsearch-select-ttl">$200 - $14.000</p>
							<ul class="dropdown-list">
								<li>
									<input type="text" id="range_cost" value="">
								</li>
							</ul>
						</div>
					</div>

					</div>
				</div>
				<span class="frontsearch-line1"></span>
				<span class="frontsearch-line2"></span>
			</div>
		</div>




		<!-- Special Deals Items -->
		<div class="specials-wrap">
			<div class="cont specials">
				<h2>Special Deals</h2>
				<p class="specials-count">350 ITEMS</p>
				<div class="specials-list">
					<div class="special special-pseudo">
						<a href="#" class="special-link"></a>
					</div>
					<div class="special special-first">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec1.jpg" alt="">
							</p>
							<h3><span>Nulla lacinia lectus</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Suspensions</a>
							<span class="special-price">$200</span>
							<del>$400</del>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec2.jpg" alt="">
							</p>
							<h3><span>Praesent amet mollis</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Brakes</a>
							<span class="special-price">$312</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec3.jpg" alt="">
							</p>
							<h3><span>Mauris suscipit tellus</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Gauges</a>
							<span class="special-price">$230.50</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec4.jpg" alt="">
							</p>
							<h3><span>Suspendisse lobortis</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Filters</a>
							<span class="special-price">$1290</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec5.jpg" alt="">
							</p>
							<h3><span>Nam iaculis risus nisi</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Sprockets</a>
							<span class="special-price">$1180</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec6.jpg" alt="">
							</p>
							<h3><span>Sed fermentum elit</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Spark Plugs</a>
							<span class="special-price">$305</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec7.jpg" alt="">
							</p>
							<h3><span>Mauris suscipit tellus</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Springs</a>
							<span class="special-price">$230.30</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
				</div>
				<p class="special-more">
					<a href="#">show more</a>
				</p>
				<span class="special-line1"></span>
				<span class="special-line2"></span>
			</div>
		</div>
		<!-- Popular Items -->
		<div class="populars-wrap">
			<div class="cont populars">
				<h2>Popular</h2>
				<p class="populars-count">7 ITEMS</p>
				<div class="populars-list">
					<div class="popular">
						<a href="product.html" class="popular-link">
							<p class="popular-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/pop1.jpg" alt="">
							</p>
							<h3><span>Suspendisse lobortis</span></h3>
						</a>
						<p class="popular-info">
							<a href="#" class="popular-categ">Helmets</a>
							<span class="popular-price">$290</span>
							<a href="#" class="popular-add">+ Add to cart</a>
						</p>
					</div>
					<div class="popular">
						<a href="product.html" class="popular-link">
							<p class="popular-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/pop2.jpg" alt="">
							</p>
							<h3><span>Nulla lacinia lectus</span></h3>
						</a>
						<p class="popular-info">
							<a href="#" class="popular-categ">Filtres</a>
							<span class="popular-price">$1180</span>
							<a href="#" class="popular-add">+ Add to cart</a>
						</p>
					</div>
					<div class="popular">
						<a href="product.html" class="popular-link">
							<p class="popular-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/pop3.jpg" alt="">
							</p>
							<h3><span>Praesent amet mollis</span></h3>
						</a>
						<p class="popular-info">
							<a href="#" class="popular-categ">Batteries</a>
							<span class="popular-price">$312</span>
							<a href="#" class="popular-add">+ Add to cart</a>
						</p>
					</div>
					<div class="popular">
						<a href="product.html" class="popular-link">
							<p class="popular-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/pop4.jpg" alt="">
							</p>
							<h3><span>Mauris suscipit tellus</span></h3>
						</a>
						<p class="popular-info">
							<a href="#" class="popular-categ">Boots</a>
							<span class="popular-price">$230.50</span>
							<a href="#" class="popular-add">+ Add to cart</a>
						</p>
					</div>
					<div class="popular">
						<a href="product.html" class="popular-link">
							<p class="popular-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/pop5.jpg" alt="">
							</p>
							<h3><span>Suspendisse lobortis</span></h3>
						</a>
						<p class="popular-info">
							<a href="#" class="popular-categ">Breaks</a>
							<span class="popular-price">$1290</span>
							<a href="#" class="popular-add">+ Add to cart</a>
						</p>
					</div>
					<div class="popular">
						<a href="product.html" class="popular-link">
							<p class="popular-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/pop6.jpg" alt="">
							</p>
							<h3><span>Nam iaculis risus nisi</span></h3>
						</a>
						<p class="popular-info">
							<a href="#" class="popular-categ">Bearings</a>
							<span class="popular-price">$1180</span>
							<a href="#" class="popular-add">+ Add to cart</a>
						</p>
					</div>
					<div class="popular">
						<a href="product.html" class="popular-link">
							<p class="popular-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/pop7.jpg" alt="">
							</p>
							<h3><span>Sed fermentum elit</span></h3>
						</a>
						<p class="popular-info">
							<a href="#" class="popular-categ">Parts</a>
							<span class="popular-price">$305</span>
							<a href="#" class="popular-add">+ Add to cart</a>
						</p>
					</div>
					<div class="popular">
						<a href="product.html" class="popular-link">
							<p class="popular-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/pop8.jpg" alt="">
							</p>
							<h3><span>Mauris suscipit tellus</span></h3>
						</a>
						<p class="popular-info">
							<a href="#" class="popular-categ">Lights</a>
							<span class="popular-price">$230.30</span>
							<a href="#" class="popular-add">+ Add to cart</a>
						</p>
					</div>
				</div>
				<p class="popular-more">
					<a href="#">show more</a>
				</p>
				<span class="popular-line1"></span>
				<span class="popular-line2"></span>
			</div>
		</div>
	</main>
	<!-- Main Content - end -->
@endsection

