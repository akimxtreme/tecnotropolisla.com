<?php
require_once('views/header.php');
require_once('views/menu-es.php');
// PAISES EN ESPAÑOL
$paises=array("Afganistán", "Akrotiri", "Albania", "Alemania", "Andorra", "Angola", "Anguila", "Antártida", "Antigua y Barbuda", "Antillas Neerlandesas", "Arabia Saudí", "Arctic Ocean", "Argelia", "Argentina", "Armenia", "Aruba", "Ashmore andCartier Islands", "Atlantic Ocean", "Australia", "Austria", "Azerbaiyán", "Bahamas", "Bahráin", "Bangladesh", "Barbados", "Bélgica", "Belice", "Benín", "Bermudas", "Bielorrusia", "Birmania Myanmar", "Bolivia", "Bosnia y Hercegovina", "Botsuana", "Brasil", "Brunéi", "Bulgaria", "Burkina Faso", "Burundi", "Bután", "Cabo Verde", "Camboya", "Camerún", "Canadá", "Chad", "Chile", "China", "Chipre", "Clipperton Island", "Colombia", "Comoras", "Congo", "Coral Sea Islands", "Corea del Norte", "Corea del Sur", "Costa de Marfil", "Costa Rica", "Croacia", "Cuba", "Dhekelia", "Dinamarca", "Dominica", "Ecuador", "Egipto", "El Salvador", "El Vaticano", "Emiratos Árabes Unidos", "Eritrea", "Eslovaquia", "Eslovenia", "España", "Estados Unidos", "Estonia", "Etiopía", "Filipinas", "Finlandia", "Fiyi", "Francia", "Gabón", "Gambia", "Gaza Strip", "Georgia", "Ghana", "Gibraltar", "Granada", "Grecia", "Groenlandia", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Ecuatorial", "Guinea-Bissau", "Guyana", "Haití", "Honduras", "Hong Kong", "Hungría", "India", "Indian Ocean", "Indonesia", "Irán", "Iraq", "Irlanda", "Isla Bouvet", "Isla Christmas", "Isla Norfolk", "Islandia", "Islas Caimán", "Islas Cocos", "Islas Cook", "Islas Feroe", "Islas Georgia del Sur y Sandwich del Sur", "Islas Heard y McDonald", "Islas Malvinas", "Islas Marianas del Norte", "IslasMarshall", "Islas Pitcairn", "Islas Salomón", "Islas Turcas y Caicos", "Islas Vírgenes Americanas", "Islas Vírgenes Británicas", "Israel", "Italia", "Jamaica", "Jan Mayen", "Japón", "Jersey", "Jordania", "Kazajistán", "Kenia", "Kirguizistán", "Kiribati", "Kuwait", "Laos", "Lesoto", "Letonia", "Líbano", "Liberia", "Libia", "Liechtenstein", "Lituania", "Luxemburgo", "Macao", "Macedonia", "Madagascar", "Malasia", "Malaui", "Maldivas", "Malí", "Malta", "Man, Isle of", "Marruecos", "Mauricio", "Mauritania", "Mayotte", "México", "Micronesia", "Moldavia", "Mónaco", "Mongolia", "Montserrat", "Mozambique", "Namibia", "Nauru", "Navassa Island", "Nepal", "Nicaragua", "Níger", "Nigeria", "Niue", "Noruega", "Nueva Caledonia", "Nueva Zelanda", "Omán", "Pacific Ocean", "Países Bajos", "Pakistán", "Palaos", "Panamá", "Papúa-Nueva Guinea", "Paracel Islands", "Paraguay", "Perú", "Polinesia Francesa", "Polonia", "Portugal", "Puerto Rico", "Qatar", "Reino Unido", "República Centroafricana", "República Checa", "República Democrática del Congo", "República Dominicana", "Ruanda", "Rumania", "Rusia", "Sáhara Occidental", "Samoa", "Samoa Americana", "San Cristóbal y Nieves", "San Marino", "San Pedro y Miquelón", "San Vicente y las Granadinas", "Santa Helena", "Santa Lucía", "Santo Tomé y Príncipe", "Senegal", "Seychelles", "Sierra Leona", "Singapur", "Siria", "Somalia", "Southern Ocean", "Spratly Islands", "Sri Lanka", "Suazilandia", "Sudáfrica", "Sudán", "Suecia", "Suiza", "Surinam", "Svalbard y Jan Mayen", "Tailandia", "Taiwán", "Tanzania", "Tayikistán", "TerritorioBritánicodel Océano Indico", "Territorios Australes Franceses", "Timor Oriental", "Togo", "Tokelau", "Tonga", "Trinidad y Tobago", "Túnez", "Turkmenistán", "Turquía", "Tuvalu", "Ucrania", "Uganda", "Unión Europea", "Uruguay", "Uzbekistán", "Vanuatu", "Venezuela", "Vietnam", "Wake Island", "Wallis y Futuna", "West Bank", "World", "Yemen", "Yibuti", "Zambia", "Zimbabue");
?>
        <!-- ********************************************************************************************* -->
    <!-- Start Page Banner -->
		<div class="page-banner" style="padding:15px 0; margin-top: 25px; margin-bottom: 20px; background: url(images/slide-02-bg.jpg) center #AB0300;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 style="color:#FFF; font-weight:700;">Contacto</h2>
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
                  Mensaje enviado exitosamente
		  <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/952977142/?label=uNHpCJP7-l8Q9o21xgM&amp;guid=ON&amp;script=0"/>
                </div>
            <?php endif; ?>			
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Contáctanos</span></h4>
				
				<!-- Start Contact Form -->
				<div id="contact-form" class="contatct-form">
					<div class="loader"></div>
					<form action="contact/contacto.php" class="contactForm" name="cform" method="post">
						<div class="row">
							<div class="col-md-4">
								<label for="name">Nombre<span class="required">*</span></label>
								  
								<input id="name" name="name" type="text" value="" size="30" required>
							</div>
							<div class="col-md-4">
								<label for="e-mail">Email<span class="required">*</span></label>
								
								<input id="e-mail" name="email" type="text" value="" size="30" required>
							</div>
							<div class="col-md-4">
								<label for="empresa">Nombre de Empresa<span class="required">*</span></label>
                                
								<input id="empresa" name="empresa" type="text" value="" size="30" required>
							</div>
							
							<div class="col-md-4">
								<label for="pais">Código de Área + País<span class="required">*</span></label>
                                 <?php                                    
                                    /*echo "<select class='form-control' name='pais'>";
                                    for($i=0;$i<count($paises);$i++){ 
                                        echo "<option value='$paises[$i]'>$paises[$i]</option>";
                                    }
                                    echo "</select>";*/
                                    include_once('codigo-area.php');
                                 ?>
								
							</div>
							<div class="col-md-4">
								<label for="name">Teléfono<span class="required">*</span></label>
                                
								<input id="telefono" name="telefono" type="text" maxlength="12" required>
							</div>
							
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="message">Mensaje</label>
								<span class="message-missing">Escriba su mensaje</span>
								<textarea id="message" name="message" cols="45" rows="10"></textarea>
								<input type="submit" name="submit" class="button" id="submit_btn" value="Enviar Mensaje" required>
								<!-- Campo Oculto "es" Español -->
								<input type="hidden" name="idioma" value="es">
							</div>
						</div>
					</form>
				</div>
				<!-- End Contact Form -->
				
			</div>
			
			<div class="col-md-4">
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Información</span></h4>
				
				<!-- Some Info -->
				<p>En Tecnotropolis LLC estamos para servirte. No dudes en contactarnos y ayudaremos a tu negocio a crecer.</p>
				
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:10px;"></div>
				
				<!-- Info - Icons List -->
				<ul class="icons-list">
					<li><i class="fa fa-globe">  </i> <strong>Dirección:</strong> 2051 NW 112th, Av Suite 119. Miami, Florida. 33172 </li>
					<li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@tecnotropolisla.com</li>
					<li><i class="fa fa-mobile"></i> <strong>Teléfono:</strong> +1 786 332.28.16</li>
				</ul>                
				
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:15px;"></div>
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Horario de Trabajo</span></h4>
				
				<!-- Info - List -->
				<ul class="list-unstyled">
					<li><strong>Lunes - Viernes</strong> : de 9am a 5pm</li>
					<li><strong>Sábado - Domingo</strong> : Cerrado</li>
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
require_once('views/footer-es.php');
require_once('views/footer.php');
?>


