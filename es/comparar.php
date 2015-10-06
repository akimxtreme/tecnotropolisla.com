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
						<h2>Blu Compare <?php if (isset($_POST['movil'])) { echo $_POST['movil']; } ?></h2>
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
						<h4 class="classic-title text-right"><span><i class="fa fa-tablet"></i> Blu Compare</span></h4>
						<div class="row">	

							<?php 
							for ($i=1; $i <= 3; $i++) { 								
							?>						
							<div class="col-md-4 service-box service-center">
								<div class="panel panel-default">
								  <div class="panel-heading">
								    <h3 class="panel-title" style="margin: 10px auto">COMPARACION <i class="fa fa-retweet"></i>
	 1</h3>
								  </div>
								  <div class="panel-body">
								    <form action="blu-compare/" style="margin:20px auto 80px auto;">							
										<div class="input-group">							        
									        <input name="movil" id="movil" type="text" autocomplete="off" class="form-control" onkeyup="url(this.value)" placeholder="Comparar con...">
									        <span class="input-group-btn">
									        <button class="btn btn-default" type="submit" style="background:#ED163F;color:#FFF;" onclick="search()"><i class="fa fa-search"></i></button>
									        </span>
									    </div><!-- /input-group -->
									</form>

									<div class="service-boxed" style="border:1px solid #ccc;">
							            <div class="service-icon" style="margin-top:-50px;">
							                <img src="images/moviles/blue-phone-450x500.jpg" alt="">
							            </div>
							            <div class="service-content">
							                <div class="row">
							                    <h4>BLU Energy X</h4>						                    
							                </div>
							            </div>
							        </div>
								  </div>
								</div>
							</div>
							<?php
							}
							?>
							<?php 
							/*
								if (isset($_POST['movil'])) { 
									searchMovil($_POST['movil']);									
								}else {
									allMovil();									
								}
							*/			
							?>							
						</div>
					</div>
					<div class="col-md-12" style="margin-top:-25px;">
						<table class="table table-bordered table-striped">
							<tr>
								<th class="col-md-3 text-right" style="color:#666;">Serie</th>
								<td class="col-md-3 text-center">Dash Series</td>
								<td class="col-md-3 text-center">Dash Series</td>
								<td class="col-md-3 text-center">Dash Series</td>
							</tr>
							<tr>
								<th class="col-md-3 text-right" style="color:#666;">Modelo</th>
								<td class="col-md-3 text-center">Blue Energy</td>
								<td class="col-md-3 text-center">Blue Energy</td>
								<td class="col-md-3 text-center">Blue Energy</td>
							</tr>
							<?php
							for ($i=0; $i < 10 ; $i++) { 
								# code...
							?>
							<tr>
								<th class="col-md-3 text-right" style="color:#666;">Modelo</th>
								<td class="col-md-3 text-center">Blue Energy</td>
								<td class="col-md-3 text-center">Blue Energy</td>
								<td class="col-md-3 text-center">Blue Energy</td>
							</tr>
							<?php
							}
							?>
						</table>
					</div>

				</div>		
		</div>

<?php
require_once('footer.php');
require_once('footer-bottom.php');
?>