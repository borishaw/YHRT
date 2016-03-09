<?php
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
			<div class="small-text small-text-center">Your trusted strategic HR business partner.</div>
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
			<div class="link1"><div class="cl-effect-20"><a href="services.php"><span data-hover="Find out more">Find out more</span></a></div></div>	
		 </div>
		 		
		 	
	 </section>	
	
	
	 <section id="contact">
		 <div class="social-wrap">
			 <ul class="social">
				 <li class="facebook"><a href="#" class="entypo-facebook"></a></li>
				 <li class="linked-in"><a href="#" class="entypo-linkedin"></a></li>
			 </ul>
		 </div>	
	
			 <div id="map"></div>	
			  
			 <div class="contact-content">
				<p class="contact-cta">We would love to hear from you. If you have any questions about our services and are interested in a complimentary consultation regarding what we can do for your business, <i>Please Contact Us Today.</i></p>
				<form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
					 <label for="name">Your Name: * 
						 <span class="error" id="err-name">please enter name</span>
					 </label>
					 <input name="name" id="name" type="text" />
					 <label for="email">Your Email: * 
						 <span class="error" id="err-email">please enter e-mail</span>
						 <span class="error" id="err-emailvld">e-mail is not a valid format</span>
					 </label>
					 <input name="email" id="email" type="text" />
					 <label for="message">Your Message:</label>
					 <textarea name="message" id="message"></textarea>
					 <div id="button-con"><button class="send_message" id="send">Submit</button></div>	
					 <div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
					 <div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
					 <div class="error" id="err-state"></div>
				 </form>
				<div class="contact-wrap">
					<p><strong>Visit Us:</strong> 2574 St. Clair Ave W., Toronto, ON M6N 1L8</p>
					<p><strong>Mail Us:</strong> <a href="mailto:info@yourhrteam.ca" title="Mail Us">info@yourhrteam.ca</a></p>
					<p><strong>Call Us:</strong> Gurpreet: 647-988-4674	Maha: 647-967-7588</p>
				</div>
			 </div>
				 
	 </section>	

	 
	 	 </div>
 </div>		

<div id="modal-1" class="mb-modal">
 <h5>SEND US A MESSAGE</h5>
				 <form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
					 <label for="name">Your Name: * 
						 <span class="error" id="err-name">please enter name</span>
					 </label>
					 <input name="name" id="name" type="text" />
					 <label for="email">Your Email: * 
						 <span class="error" id="err-email">please enter e-mail</span>
						 <span class="error" id="err-emailvld">e-mail is not a valid format</span>
					 </label>
					 <input name="email" id="email" type="text" />
					 <label for="message">Your Message:</label>
					 <textarea name="message" id="message"></textarea>
					 <div id="button-con"><button class="send_message" id="send">Submit</button></div>	
					 <div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
					 <div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
					 <div class="error" id="err-state"></div>
				 </form>
				 <div id="ajaxsuccess">Successfully sent!!</div>	 
 <div class="close-modal">&#215;</div>
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