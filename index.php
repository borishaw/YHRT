﻿<?php
$active = 'index';
include('dep/top.php');
?>

<div class="wrapper">
	
	 <div class="menu-btn" id="trigger-overlay" type="button"></div>
	 <div class="logo"></div>
	
	 <div class="main">
		  

	 <section id="home">
		 <div class="just_pattern" ></div>
		 
		 <div class="home-content">
			<div class="big-text big-text-center">Your HR Team</div>
			<div class="small-text small-text-center">Your trusted strategic HR business partner</div>
		 </div>
		 
		 <div id="wrapper-slider">
			 <div id="controls">
				 <div class="prev"></div>
				 <div class="next"></div>
			 </div>
		 </div>
		 
		 <div class="scroll-btn"><p>scroll</p></div>
		 
	 </section>
	
	
	 <section id="about">
		 <div class="just_pattern" ></div>
	 
		<div class="about-content">
			<div class="big-text big-text-section" ><span>about us</span></div>
			<p class="small-text">Your HR Team is a boutique style Human Resource consulting firm that enables organizations to drive business success by focusing on their most valuable investment, “Their People”.</p>
			<div class="link1"><div class="cl-effect-20"><a href="about.php"><span data-hover="Find out more">Find out more</span></a></div>
			</div>
		</div>
		
					
		 			
	 </section>		
	 
	 <section id="services">
		 <div class="just_pattern" ></div>
		 <div class="services-content">
			<div class="big-text big-text-section" ><span>services</span></div>
			<p class="small-text small-text-bottom-right" >
			  Your HR Team provides you with tailored, cost-effective solutions for your human capital needs.
			</p>
			<div class="link1"><div class="cl-effect-20"><a href="services-corporate.php"><span data-hover="Find out more">Corporations</span></a></div></div>	
			<div class="link1"><div class="cl-effect-20"><a href="services-individual.php"><span data-hover="Find out more">Individuals</span></a></div></div>	
			<div class="link1"><div class="cl-effect-20"><a href="services-workshop.php"><span data-hover="Find out more">Workshops</span></a></div></div>	
		 </div>
		 		
		 	
	 </section>	
	
	
	 <section id="contact">
		 <div class="social-wrap">
			 <ul class="social">
				 <li class="facebook"><a target="_blank" href="https://www.facebook.com/Your-HR-Team-154593174559374" class="entypo-facebook"></a></li>
				 <li class="linked-in"><a target="_blank" href="https://www.linkedin.com/company/10170185" class="entypo-linkedin"></a></li>
				 <li class="instagram"><a target="_blank" href="https://www.instagram.com/yourhrteam/" class="entypo-instagrem"></a></li>
			 </ul>
		 </div>	
	
			 <div id="map"></div>	
			  
			 <div class="contact-content">
				<?php include ('dep/contact-form.php') ?>
				<div class="contact-wrap">
					<p><strong>Visit Us:</strong> 2574 St. Clair Ave W., Toronto, ON M6N 1L8</p>
					<p><strong>Mail Us:</strong> <a href="mailto:info@yourhrteam.ca" title="Mail Us">info@yourhrteam.ca</a></p>
					<p><strong>Call Us:</strong> Gurpreet: 647-988-4674	Maha: 647-967-7588</p>
				</div>
			 </div>
				 
	 </section>	

	 
	 	 </div>
 </div>		


 
<?php include('dep/footer.php'); ?>

<script type="text/javascript">
	
	$(document).ready(
		function() {  
			
			$('[data-typer-targets]').typer();
			
		});
	
</script>


</body>
</html>