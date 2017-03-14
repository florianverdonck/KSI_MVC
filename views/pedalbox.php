<!DOCTYPE html><!--[if IE 8 ]>
<html lang="en" class="no-js ie8"></html>
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"></html>
<![endif]-->
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Single Product e-Commerce HTML Template">
		<meta name="author" content="createIT">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
		<meta name="format-detection" content="telephone=no">
		<link rel="shortcut icon" href="<?php echo PATH_IMAGES; ?>content/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo PATH_IMAGES; ?>content/favicon.png">
		<title>KSI Engineering - Découvrez le complément ultime pour votre véhicule</title>
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>style_blue.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>unslider.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>custom.css">
		<link rel="stylesheet" href="<?php echo PATH_JS; ?>jquery.jqplot.min.css">
		<!--[if lt IE 9]>
		<script src="<?php echo PATH_JS; ?>html5shiv.min.js"></script>
		<script src="<?php echo PATH_JS; ?>respond.min.js"></script>
		<script src="<?php echo PATH_JS; ?>es5-shim.min.js"></script><![endif]-->
	</head>
	<body class="cssAnimate smartphone">
		<div class="ct-preloader">
			<div class="ct-preloader-inner">
				<div class="ct-preloader-logo">
					<img src="<?php echo PATH_IMAGES; ?>content/drone/distrupt-logo-dark.png" alt="">
					<h6 class="ct-preloader-title">Please wait, loading...</h6>
					<div class="loading">
						<div class="loading-line"></div>
						<div class="loading-break loading-dot-1"></div>
						<div class="loading-break loading-dot-2"></div>
						<div class="loading-break loading-dot-3"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="ct-cart">
			<div class="ct-cart__inner">
				<div class="ct-cart__button ct-js-cart__button"><i class="fa fa-shopping-cart"></i></div>
				<div class="ct-cart__message"><i class="fa fa-thumbs-o-up"></i></div>
				<div class="ct-cart__product"></div>
			</div>
		</div>
		<div id="ct-js-wrapper" class="ct-js-wrapper ct-pageWrapper">
			<!-- Navigation-->
			<nav data-height="80" class="navbar navbar-default navbar-light navbar-desktop navbar--animated navbar-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ul class="navbar-buttons list-unstyled list-inline pull-right">
								<li><a href="#order" data-scroll="#order" class="btn-group btn-group--separated"><span class="btn btn-xs btn-transparent btn--white btn-separated">mon véhicule</span><span class="btn btn-xs btn-transparent btn--white btn-separated"><i class="fa fa-search"></i></span></a></li>
							</ul>
							<ul role="menu" class="nav navbar-nav ct-navbar--fadeIn">
								<li class="nav-item"><a href="#features" data-scroll="#features">Accueil</a></li>
								<li class="nav-item"><a href="#features" data-scroll="#features">Boîtier additionnel</a></li>
								<li class="nav-item"><a href="#product" data-scroll="#product">Module accélerateur</a></li>
								<li class="nav-item"><a href="about-us.html">FAQ</a></li>
								<li class="nav-item"><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<header data-background="<?php echo PATH_PICS; ?>rs6_gray.jpg" data-height="60%" class="ct-header darken">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<img src="<?php echo PATH_PICS; ?>logo_500px.png" class="logoHeaderPedalBox" style="height:100px; display:block; padding-bottom: 20px;" alt="">
								<h3 class="ct-header-title">PedalBox</h3>
							</div>
						</div>
					</div>
				</div>
			</header>
			<?php include(PATH_VIEWS . "vehicleSelect.php"); ?>
			<section id="moreinfo">
				<div class="ct-gallery--col2">
					<div class="ct-gallery-item">
						<figure class="ct-imageBox ct-imageBox--inline ct-imageBox--left">
							<img src="<?php echo PATH_PICS; ?>more-col.jpg" alt="">
							<figcaption>
								<div class="inner">
									<div class="inner-cell">
										<div class="ct-imageBox-icon"><i class="fa fa-adn"></i></div>
									</div>
									<div class="inner-cell">
										<div class="ct-imageBox-content">
											<p>Boîtiers additionnels intelligents et adaptatifs</p>
											<a href="faq.html" class="btn btn-transparent btn--withIcon btn--motiveColor">KSI PowerBox<i class="fa fa-caret-right"></i></a>
										</div>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="ct-gallery-item">
						<figure class="ct-imageBox ct-imageBox--inline">
							<img src="<?php echo PATH_IMAGES; ?>content/smartphone/more-col2.jpg" alt="">
							<figcaption>
								<div class="inner">
									<div class="inner-cell">
										<div class="ct-imageBox-icon"><i class="fa fa-map-o"></i></div>
									</div>
									<div class="inner-cell">
										<div class="ct-imageBox-content">
											<p>Optimisation de l'accélérateur</p>
											<a href="shop-locator.html" class="btn btn-transparent btn--withIcon btn--motiveColor">KSI PedalBox<i class="fa fa-caret-right"></i></a>
										</div>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
			</section>
			<section>
			<div class="container">
				<div class="col-md-8 col-md-offset-2 ct-u-padding-top-60 ct-u-padding-bottom-100">
					<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
						<h3 class="h1 ct-sectionHeader-title text-center"><small>KS<span class="ct-u-colorMotive ct-u-color--accent">I</span> PedalBox</small></h3>
						<h4 class="ct-sectionHeader-subtitle" style="padding-bottom: 20px;">Profitez d'une réponse instantanée de l'accélérateur, d'un moteur plus souple et d'un agrément de conduite sans pareil.</h4>
						<div class="col-md-6">
							<ul class="ct-list-decorated">
								<li><span>Améliore le temps de réponse</span>
								</li>
								<li><span>+ de couple bas dans les tours</span>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="ct-list-decorated">
								<li><span>Certifié EMC</span>
								</li>
								<li><span>Sans risque pour le moteur</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<section>
			<section data-background="<?php echo PATH_PICS; ?>gaspedal.jpg" class="ct-header">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="ct-sectionHeader ct-sectionHeader--typeLight ct-sectionHeader--subtitleItalic text-center">
								<h3 class="ct-sectionHeader-title" style="padding-top: 100px;">1 bouton, 3 configurations.</h3>
								<h4 class="ct-sectionHeader-subtitle" style="padding-bottom: 100px;">Grâce à la technologie MultiProfile™, changez de profil de configuration de l'accélérateur d'un simple appui sur la télécommande.</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="ct-u-margin-top-20--minus ct-u-padding-both-100">
				<div class="container">
					<div class="row">
							<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
								<h3 class="ct-sectionHeader-title">Une réponse instantanée de l'accélérateur.</h3>
								<h4 class="ct-sectionHeader-subtitle">Toute la puissance du véhicule disponible directement grâce à l'optimisation du signal de l'accélérateur.</h4>
							</div>
					</div>
					<div class="row" style="padding-top: 50px;">
						<div class="col-md-4 col-md-offset-1 text-center"><div id="chartdiv" style="height:300px;width:100%"></div></div>
						<div class="col-md-6 col-md-offset-1">
							<h4 class="ct-sectionHeader-subtitle" style="padding-top: 40px; color: #5f5f5f; font-size: medium;">Un véritable complément au boîtier additionnel, le PedalBox permet d'adapter la sensibilité de l'accélérateur et la réactivité du moteur.</h4>
							<h4 class="ct-sectionHeader-subtitle text-center" style="padding-top: 30px; color: #5f5f5f; font-size: medium;"><strong>+10%  d'accélération</strong><br>
								de 0 à 60 km/h, ex : Toyota Landcruiser 4.2 TD
							</h4>
						</div>
					</div>
					
				</div>
			</section>
			<section data-background="#1A1A1A" data-height="40%" class="ct-header ct-u-padding-both-100">
				<div class="container">
					<div class="row">
						<div class="col-md-6 ct-u-padding-both-40">
							<div class="ct-sectionHeader ct-sectionHeader--typeLight text-center">
								<h3 class="ct-sectionHeader-title">Installation en 5 minutes</h3>
								<h4 class="ct-sectionHeader-subtitle">En suivant le guide ou la vidéo explicative d'installation, l'installation prend à peine quelques minutes. Une seule fiche à brancher et le tour est joué.</h4>
							</div>
						</div>
						<div class="col-md-6 text-center">
							<img src="<?php echo PATH_PICS; ?>gaspedal-detail.png" />
						</div>
					</div>
				</div>
			</section>
			<section class="ct-u-margin-top-20--minus ct-u-padding-both-100">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
								<h3 class="ct-sectionHeader-title">Certification EMC, la garantie de sécurité.</h3>
							</div>
						</div>
					</div>
					<div class="row ct-u-padding-top-40">
						<div class="col-md-3 col-md-offset-2 text-center ct-u-padding-top-50"><img src="<?php echo PATH_PICS; ?>tuv_emc.png" alt="" class=""></div>
						<div class="col-md-5">
							<h4 class="ct-sectionHeader-subtitle" style="padding-top: 20px; color: #5f5f5f; font-size: medium; vertical-align: middle;">Nos technologies sont homologuées pour pouvoir être installées sur des véhicules de tous types sans danger. Comme le KSI PedalBox ne change pas les caractéristiques techniques de votre véhicules, il n'est pas nécessaire de passer d'autres homologations ou même de déclarer cette installation à votre assureur.</h4>
						</div>
					</div>
				</div>
			</section>
			<?php include(PATH_VIEWS . "vehicleSelect.php"); ?>
			<?php include(PATH_VIEWS . "footer.php"); ?>
		</div>
		<!-- Mobile Menu //-->
		<div class="ct-menu-mobile">
			<nav class="navbar navbar-dark">
				<div class="container">
					<div class="row">
						<div class="col-xs-4 col-sm-4 hidden-xs">
							<ul class="list-unstyled list-inline ct-socials--rounded">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-xs-7 col-sm-4">
							<div class="navbar-header"><a href="index.html" class="navbar-brand"><img src="<?php echo PATH_IMAGES; ?>content/beacon/distrupt-logo-light.png" alt=""></a></div>
						</div>
						<div class="col-xs-5 col-sm-4">
							<ul role="menu" class="nav navbar-nav">
								<li class="ct-productCart-link"><a><i class="fa fa-shopping-cart"></i></a>
								</li>
								<li class="nav-item-toggle"><a><i class="fa fa-bars"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="navbar-beacon">
			<ul class="list-unstyled">
				<li class="nav-item dropdown">
					<a href="#">Home<i class="fa fa-angle-double-down"></i></a>
					<ul role="menu" class="dropdown-menu">
						<li class="nav-item"><a href="index3.html">Smartwatch</a></li>
						<li class="nav-item"><a href="index.html">Drone</a></li>
						<li class="nav-item"><a href="index5.html">Smartphone</a></li>
						<li class="nav-item"><a href="index2.html">Beacon</a></li>
						<li class="nav-item"><a href="index4.html">VR</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="#features" data-scroll="#features">Features</a></li>
				<li class="nav-item"><a href="#product" data-scroll="#product">Product</a></li>
				<li class="nav-item dropdown">
					<a href="services.html">Pages<i class="fa fa-angle-double-down"></i></a>
					<ul role="menu" class="dropdown-menu">
						<li class="nav-item"><a href="services.html">Services</a></li>
						<li class="nav-item"><a href="404.html">404 page</a></li>
						<li class="nav-item"><a href="press-kit.html">Press kit</a></li>
						<li class="nav-item"><a href="shop-locator.html">Shop locator</a></li>
						<li class="nav-item"><a href="faq.html">FAQ</a></li>
						<li class="nav-item"><a href="investors.html">Investors</a></li>
						<li class="nav-item"><a href="privacy-policy.html">Privacy Policy</a></li>
						<li class="nav-item"><a href="terms-conditions.html">Terms & conditions</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="about-us.html">About us</a></li>
				<li class="nav-item"><a href="contact-us.html">Contact</a></li>
			</ul>
			<ul class="list-unstyled list-inline ct-socials--rounded">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
		<!-- JavaScripts-->
		<script src="<?php echo PATH_JS; ?>disrupt.min.js"></script>
		<script src="<?php echo PATH_JS; ?>main.js"></script>
		<script src="assets/form/js/contact-form.js"></script>
		<!-- Plugins-->
		<script src="<?php echo PATH_JS; ?>plugins/lightgallery/lightgallery-all.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/lightgallery/init.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/imagesloaded.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/init.js"></script>
		<script src="<?php echo PATH_JS; ?>unslider-min.js"></script> 
		<script src="<?php echo PATH_JS; ?>jquery.jqplot.min.js"></script>
		<script src="<?php echo PATH_JS; ?>vehicleSelect.js"></script> 

		<script>
			jQuery(document).ready(function($) {
				$('.my-slider').unslider({
					arrows: false
				});
			});
			
			
			var accelOri = [[0,0],[10,0.55],[20,0.95],[30,1.55],[40,2.05],[50,2.45],[60,2.95],[70,3.58],[80,4.05],[90,4.44],[100,5]];
			var accelOpti  = [[0,0],[10,1],[20,1.75],[30,2.75],[40,3.5],[50,4],[60,4.2],[70,4.4],[80,4.6],[90,4.8],[100,5]];
			
			var chart;
			
			setTimeout(function() {
			var $ = jQuery;
			chart = $.jqplot('chartdiv',  [ accelOri, accelOpti ], {
				animate: true,
				animateReplot: false,
				seriesDefaults: {
					showMarker: false,
				},
				axesDefaults: {
					showTicks: true,
					showTickMarks: false
				},
				grid:{
					borderColor:'transparent',
					background: 'transparent',
					shadow:false,
					drawBorder:false,
					shadowColor:'transparent'
				},
				axes : {
					xaxis: {
						tickInterval: 0,
						drawMajorGridlines: true,
						drawMinorGridlines: true,
						drawMajorTickMarks: false,
						rendererOptions: {
							tickInset: 0,
							minorTicks: 0
						},
						tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
						tickOptions: {
							fontSize: '10pt',
							textColor: "#999"
						},
						pad: 0,
						label: '% d\'accélérateur',
						labelOptions: {
							fontFamily: 'Open Sans',
							fontSize: '9pt',
							textColor: "#999"
						}
			
					},
					yaxis: {
						tickOptions: {
							formatString: "%'d",
							fontSize: '10pt',
							textColor: "gray"
						},
						rendererOptions: {
							forceTickAt0: false,
							alignTicks: false,
						},
						min:0,
						max:5,
						label: 'Volts',
						labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
						labelOptions: {
							fontFamily: 'Open Sans',
							fontSize: '9pt',
							textColor: "#00bcdf"
						}
					},
				},
				series: [
					{
						color: "gray",
						yaxis: 'yaxis',
						rendererOptions: {
							smooth: true,
						}
					},
					{
						color: "#00bcdf",
						yaxis: 'yaxis',
						rendererOptions: {
							smooth: true
						}
					}
				]
			});
			
			
			},1000);
			
		</script>
	</body>
</html>