<?php
require_once('header.php');
require_once('menu.php');
?>
        <!-- ********************************************************************************************* -->
    <!-- Start Page Banner -->
		<div class="page-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Contacts</h2>
					</div>
					
                    
				</div>
			</div>
		</div>
		
		<!-- End Page Banner -->		
        
		<div class="container">
			<br>
			<div class="row">			
			
			<div class="col-md-5">

								<h4 class="classic-title"><span>Information</span></h4>

								<!-- Accordion -->
								<div class="panel-group" id="accordion">

									<!-- Start Accordion 1 -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse-4">
													<i class="fa fa-angle-up control-icon"></i>
													<i class="fa fa-info"></i> Info
												</a>
											</h4>
										</div>
										<div id="collapse-4" class="panel-collapse collapse in">
											<div class="panel-body">
												<!-- Some Info -->
											<p>In TECNOTROPOLIS LLC we are here to serve you. Visit, call or write to us. Do not hesitate to contact us and a specialist will support you in your request.</p>
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:10px;"></div>
				
				<!-- Info - Icons List -->
				<ul class="icons-list">
					<li><i class="fa fa-globe">  </i> <strong>Street Address:</strong> 2051 NW 112th, Av Suite 119. Miami, Florida. 33172 </li>
					<li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@tecnotropolisla.com</li>
					<li><i class="fa fa-tablet"></i> <strong>Phone:</strong> +1 786 332.28.16</li>
				</ul> 
											</div>
										</div>
									</div>
									<!-- End Accordion 1 -->

									<!-- Start Accordion 2 -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse-5" class="collapsed">
													<i class="fa fa-angle-down control-icon"></i>
													<i class="fa fa-clock-o"></i> Working Hours
												</a>
											</h4>
										</div>
										<div id="collapse-5" class="panel-collapse collapse">
											<div class="panel-body">												
				
												<!-- Info - List -->
												<ul class="list-unstyled">
													<li><strong>Monday - Friday</strong> : de 9am a 5pm</li>
													<li><strong>Saturday - Sunday</strong> : Closed</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Accordion 2 -->

									<!-- Start Accordion 3 -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse-6" class="collapsed">
													<i class="fa fa-angle-down control-icon"></i>
													<i class="fa fa-certificate"></i> Our Offices
												</a>
											</h4>
										</div>
										<div id="collapse-6" class="panel-collapse collapse">
											<div class="panel-body">
											<?php
											require_once('slider-oficina.php');	
											?>										
											</div>
											</div>
										</div>
									</div>
									<!-- End Accordion 3 -->

			</div>
								<!-- End Accordion -->

			
			

			<div class="col-md-7">	
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
				<div id="contact-form" class="contact-form">
					<div class="loader"></div>
					<form action="contact/contacto.php" class="contactForm" name="cform" method="post">
						<div class="row">
							<div class="col-md-4">
								<label for="name">Name<span class="required">*</span></label>
								  
								<input id="name" name="name" type="text" value="" size="30" required>
							</div>
							<div class="col-md-4">
								<label for="e-mail">Email<span class="required">*</span></label>
								
								<input id="e-mail" name="email" type="text" value="" size="30" required>
							</div>
							<div class="col-md-4">
								<label for="empresa">Company<span class="required">*</span></label>
                                
								<input id="empresa" name="empresa" type="text" value="" size="30" required>
							</div>
							
							<div class="col-md-4">
								<label for="pais">Area Code + Country<span class="required">*</span></label>
                                 <?php                                   
                                    include_once('codigo-area.php');
                                 ?>
								
							</div>
							<div class="col-md-4">
								<label for="name">Phone<span class="required">*</span></label>
                                
								<input id="telefono" name="telefono" type="text" maxlength="12" required>
							</div>
							
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="message">Message</label>
								<span class="message-missing">Escriba su mensaje</span>
								<textarea id="message" name="message" cols="45" rows="10"></textarea>
								<input type="submit" name="submit" class="button" id="submit_btn" value="Send Message" required>
								<!-- Campo Oculto "es" Español -->
								<input type="hidden" name="idioma" value="es">
							</div>
						</div>
					</form>
				</div>
				<!-- End Contact Form -->
				
			</div>

			
		</div>
		
				
				<!-- Start Map -->
		<div id="map" style="margin-bottom:25px;margin-top:25px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.3200450759077!2d-80.37638380000001!3d25.793013499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9bea57e6d8e19%3A0x698c2d45c85ee56!2s2051+NW+112th+Ave+%23119%2C+Miami%2C+FL+33172%2C+EE.+UU.!5e0!3m2!1ses!2sve!4v1421256821465" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
        </div>
		
<!-- End Map -->
			</div>
			<br>
			
        
<?php
require_once('footer.php');
require_once('footer-bottom.php');
?>


