<?php
require_once('views/header.php');
require_once('views/menu-en.php');
?>
        <!-- ********************************************************************************************* -->
    <!-- Start Page Banner -->
		<div class="page-banner" style="padding:15px 0; margin-top: 25px; margin-bottom: 20px; background: url(images/slide-02-bg.jpg) center #AB0300;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 style="color:#FFF; font-weight:700;">Contact</h2>
					</div>
					
                    
				</div>
			</div>
		</div>
		<!-- End Page Banner -->
		
		<div class="container">
						<div class="row">
			
			<div class="col-md-8">
				<?php if(isset($_GET['msn'])): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Message sent successfully.
		  <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/952977142/?label=uNHpCJP7-l8Q9o21xgM&amp;guid=ON&amp;script=0"/>
                </div>
            <?php endif; ?>
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Contact Us</span></h4>
				
				<!-- Start Contact Form -->
				<div id="contact-form" class="contatct-form">
					<div class="loader"></div>
					<form action="contact/contacto.php" class="contactForm" name="cform" method="post">
						<div class="row">
							<div class="col-md-4">
								<label for="name">Name<span class="required">*</span></label>
								<span class="name-missing">Name Required</span>  
								<input id="name" name="name" type="text" value="" size="30" required>
							</div>
							<div class="col-md-4">
								<label for="e-mail">Email<span class="required">*</span></label>
								<span class="email-missing">Email Required</span> 
								<input id="e-mail" name="email" type="text" value="" size="30" required>
							</div>
                                          <div class="col-md-4">
                                                <label for="empresa">Company<span class="required">*</span></label>
                                
                                                <input id="empresa" name="empresa" type="text" value="" size="30" required>
                                          </div>							
							<div class="col-md-4">
								<label for="pais">Area Code + Country<span class="required">*</span></label>
                                                   <?php                                  
                                                      
                                                      include_once('codigo-area-en.php');
                                                   ?>
								
							</div>
                                          <div class="col-md-4">
                                                <label for="name">Phone<span class="required">*</span></label>
                                <span class="phone-missing">Phone Required</span> 
                                                <input id="telefono" name="telefono" type="text" value="" size="30" required>
                                          </div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="message">Message</label>
								<span class="message-missing">Message Required</span>
								<textarea id="message" name="message" cols="45" rows="10"></textarea>
								<input type="submit" name="submit" class="button" id="submit_btn" value="Send Message" required>
								<!-- Campo Oculto "en" Ingles -->
								<input type="hidden" name="idioma" value="en">
							</div>
						</div>
					</form>
				</div>
				<!-- End Contact Form -->
				
			</div>
			
			<div class="col-md-4">
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Information</span></h4>
				
				<!-- Some Info -->
				<p>In Tecnotropolis LLC We are here to serve. Please contact us and we will help your business grow.</p>
				
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:10px;"></div>
				
				<!-- Info - Icons List -->
				<ul class="icons-list">
					<li><i class="fa fa-globe">  </i> <strong>Address:</strong> 2051 NW 112th, Av Suite 119. Miami, Florida. 33172 </li>
					<li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@tecnotropolisla.com</li>
					<li><i class="fa fa-mobile"></i> <strong>Phone:</strong> +1 786 332.28.16</li>
				</ul>                
				
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:15px;"></div>
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Working Hours</span></h4>
				
				<!-- Info - List -->
				<ul class="list-unstyled">
					<li><strong>Monday - Friday</strong> : de 9am a 5pm</li>
					<li><strong>Saturday - Sunday</strong> : Closed</li>
				</ul>
				
			</div>
			
		</div>
         <!-- Divider -->
					<div class="hr1" style="margin-bottom:25px;"></div>
				<!-- Start Map -->
		<div id="map" style="margin-bottom:25px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.3200450759077!2d-80.37638380000001!3d25.793013499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9bea57e6d8e19%3A0x698c2d45c85ee56!2s2051+NW+112th+Ave+%23119%2C+Miami%2C+FL+33172%2C+EE.+UU.!5e0!3m2!1ses!2sve!4v1421256821465" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
        </div>
		
<!-- End Map -->
			</div>
<?php
require_once('views/footer-en.php');
require_once('views/footer.php');
?>

