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
						<h2>BLU PHONE	<?php //if (isset($_GET['movil'])) { echo $_GET['movil']; } ?></h2>
					</div>			

					<div class="col-md-6">
					<?php buscadorMovil(); ?>						
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Banner -->
		<!--<form action="blu-compare/"><input type="hidden" name="movil" value=""><button class="btn btn-system btn-black" type="submit"></button></form>-->
		<div class="container">
				<div class="row sidebar-page" style="padding-top:50px;">
					<div class="col-md-3 sidebar left-sidebar">
					<!-- Categories Widget -->
					<?php menuMovil(); ?>
					</div>					
					<div class="col-md-9 page-content">
					<?php 
						if (isset($_GET['movil'])) { 
							searchMovilURL($_GET['movil']);									
						}		
					?>						
					</div>
					
				</div>		
		</div>

<?php
require_once('footer.php');
require_once('footer-bottom.php');
?>