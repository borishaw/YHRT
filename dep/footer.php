<?php if($active!='index') { ?>
	<div id="footer">	
		<div class="container">
			<div class="sixteen columns">
				<div class="footer-social">
					<ul>
						<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<p>&copy; <?php echo date("Y"); ?> Your HR Team, Designed & Developed by <a href="http://www.ankitdesigns.com" target="_blank">Ankit Designs</a>.</p> 
			</div>
		</div>
	</div>	
<?php } ?>
	
	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/1.3.0/retina.min.js"></script>	
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.typer.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/onepage-scroll/1.3.1/jquery.onepage-scroll.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js"></script>
<script type="text/javascript" src="js/demo7.js"></script>

<?php if($active=='index') { ?>
	<script type="text/javascript" src="js/mb.bgndGallery.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 		
	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript" src="js/modal.min.js"></script>
	<script type="text/javascript" src="js/contact.js"></script>
	<script type="text/javascript" src="js/template.js"></script>
<?php } ?>

<?php if($active=='about' || $active=='services') { ?>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.7/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/scrollReveal.js"></script>
	<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script> 
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script> 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.fs.tipper.min.js"></script>

<?php } ?>

	<script type="text/javascript"> 

	//Preloader
		$(window).load(function() {
			$("#status").fadeOut();
			$("#preloader").delay(350).fadeOut("slow");
		}) 
		

		


	</script>	
	



