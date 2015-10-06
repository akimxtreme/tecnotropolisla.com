<?php
require_once('header.php');
require_once('menu.php');
require_once('../referencia-moviles/querys.php');
?>

		<!-- Start Page Banner -->
		<div class="page-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>Móviles <?php if (isset($_POST['movil'])) { echo $_POST['movil']; } ?></h2>
					</div>			

					<div class="col-md-6">
					<?php buscadorMovil(); ?>						
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Banner -->

		<div class="container">
				<div class="row sidebar-page" style="padding-top:50px;">
					<div class="col-md-3 sidebar left-sidebar">
					<!-- Categories Widget -->
					<?php menuMovil(); ?>
					</div>
					<div class="col-md-9 page-content">
						<div class="row">							
							<?php 
								if (isset($_POST['movil'])) { 
									searchMovil($_POST['movil']);									
								}else {
									// Start All Moviles
									allMovil();
									// End All Moviles
								}			
							?>							
						</div>
					</div>
				</div>		
		</div>

<?php
require_once('footer.php');
require_once('footer-bottom.php');
?>