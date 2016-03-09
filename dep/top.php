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
	<link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">


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
					<li><a href="services.php">Services</a></li>
					<li><a href="index.php#4">Contact</a></li>
				</ul>
			</nav>
			
				
			
		</div> 
		