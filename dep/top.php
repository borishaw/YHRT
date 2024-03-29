<?php date_default_timezone_set('America/Los_Angeles'); ?>
<!DOCTYPE html <?php if ($active=='index') { echo("class='index-page'"); } ?>>
<!--[if IE 8]><html class="no-js lt-ie9 <?php if ($active=='index') { echo('index-page'); } ?>" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js <?php if ($active=='index') { echo('index-page'); } ?>" lang="en"><!--<![endif]-->
<head>

	<meta charset="utf-8">
	<title>Your HR Team</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicons/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicons/manifest.json">
	<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#c5232d">
	<link rel="shortcut icon" href="favicons/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="Your HR Team">
	<meta name="application-name" content="Your HR Team">
	<meta name="msapplication-TileColor" content="#c5232d">
	<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
	<meta name="msapplication-config" content="favicons/browserconfig.xml">
	<meta name="theme-color" content="#c5232d">


	<!-- Fonts & Icons -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Montserrat:400,700"/>
	<link rel="stylesheet" href="http://weloveiconfonts.com/api/?family=entypo"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/main.css"/>
	
	<?php if($active=='about'){ ?>
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />
	<?php } ?>
	
    <!--[if lte IE 8]>
        <script src="js/html5.js"></script>
    <![endif]-->

	<!--Form Handling-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
	
</head>
<body>
	
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>


	<!-- Primary Page Layout -->

 		<div class="overlay overlay-contentscale">
		 <div class="just_pattern" ></div>
		
			<div class="logo1"></div>
		
			<button type="button" class="overlay-close">Close</button>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li>
						<a data-toggle="collapse" href="#serviceSections" aria-expanded="false" aria-controls="serviceSections">Services</a>
						<div class="collapse" id="serviceSections">
							<div class="well">
							  <a href="services-corporate.php">Corporations</a> / <a href="services-individual.php">Individuals</a> / <a href="services-workshop.php">Workshops</a>
							</div>
						 </div>
					</li>
					<li><a href="index.php#4">Contact</a></li>
				</ul>
			</nav>
			
				
			
		</div> 
		