<?php 
	if(isset($_GET['secc'])){
		$secc = $_GET['secc'];
		
	} else $secc = "chc";
?>

<div class="row">
	<div class="col-xs-12 col-md-12 degradat<?php echo $sector; ?> pdg40">
		<div class="row">
			<div class="col-xs-12 col-md-12 titulos">
				<div class="row">
					<div class="col-xs-4 col-md-4 linea1"></div>
					<div class="col-xs-4 col-md-4 titulSector">
						<h1><?php __($sector); ?></h1>
					</div>
					<div class="col-xs-4 col-md-4 linea1"></div>
				</div>	
				<div class="row">
					<div class="col-xs-1 col-md-1">
						<a href="<?php echo PAGE_ROOT;?>/servicio/<?php echo $sector; ?>">
							<img src="<?php echo MEDIA_PATH; ?>/img/fletxa2.png"/>
						</a>
					</div>
					<div class="col-xs-10 col-md-10">
						<h3 class="titularea"><?php __('servicio_h2'); ?></h3>
					</div>
				</div>	
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-12 bolasSectores">
				<div class="row">
			
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="chc") echo ' active'; ?>" id="service_chc">
  								<span><?php __('chc'); ?></span>
  							</div>
  						</div>
					</div>
					
					<?php if ($sector!="hotels") { ?>
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="e") echo ' active'; ?>" id="service_e">
				  				<span><?php __('e'); ?></span> 
				  			</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="bc") echo ' active'; ?>" id="service_bc">
  								<span><?php __('bc'); ?></span> 
  							</div>
  						</div>
					</div>
					<?php } ?>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="mv") echo ' active'; ?>" id="service_mv">
  								<span><?php __('mv'); ?></span> 
  							</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="cl") echo ' active'; ?>" id="service_cl">
  								<span><?php __('cl'); ?></span> 
  							</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="sni") echo ' active'; ?>" id="service_sni">
  								<span><?php __('sni'); ?></span> 
  							</div>
  						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-md-12 servicioFondo textos">
				<div class="row">
				
					<div class="col-xs-12 col-md-12 text<?php if($secc=="chc") echo ' active'; else echo ' ocult'; ?>" id="text_chc">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvact_h1'); ?></h3>
								<p><?php __('srvact_p10'); ?></p>
								<h6><?php __('srvact_h1a'); ?></h6>
								<p><?php __('srvact_p1a'); ?><sup><?php __('srvact_p1a2'); ?></sup><?php __('srvact_p1a3'); ?></p>
								
								<h6><?php __('srvact_h1b'); ?></h6>
								<p><?php __('srvact_p1b');?><sup><?php __('srvact_p1b2'); ?></sup><?php __('srvact_p1b3'); ?><sup><?php __('srvact_p1b4'); ?></sup><?php __('srvact_p1b5'); ?></p>
			
								<h6><?php __('srvact_h1c'); ?></h6>
								<p><?php __('srvact_p1c'); ?></p>
								<p><?php __('srvact_p1c2'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/actualizacion/ACTUALIZACION_huella carbono.png"/>
								<h4 class="bold center font24"><?php __('eslogan_chc'); ?></h4>
							</div>
						</div>
					</div>
				</div>
				<?php if ($sector!="hotels") { ?>
				<div class="row">
					<div class="col-xs-12 col-md-12 text<?php if($secc=="e") echo ' active'; else echo ' ocult'; ?>" id="text_e">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvact_h2'); ?></h3>
								<p><?php __('srvact_p20'); ?></p>
								<h6><?php __('srvact_h2a'); ?></h6>
								<p><?php __('srvact_p2a'); ?></p>
								
								<h6><?php __('srvact_h2b'); ?></h6>
								<p><?php __('srvact_p2b');?></p>
								<p><?php __('srvact_p2b2');?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/actualizacion/ACTUALIZACION_ecoetiquetado.png"/>
								<h4 class="bold center font24"><?php __('eslogan_e'); ?></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-12 text<?php if($secc=="bc") echo ' active'; else echo ' ocult'; ?>" id="text_bc">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvact_h3'); ?></h3>
								<p><?php __('srvact_p30'); ?></p>
								<h6><?php __('srvact_h3a'); ?></h6>
								<ul>
									<li><?php __('srvact_li3a1');?><span><?php __('srvact_li3b1');?></span><?php __('srvact_li3c1');?></li>
									<li><?php __('srvact_li3a2');?><span><?php __('srvact_li3b2');?></span><?php __('srvact_li3c2');?></li>
									<li><?php __('srvact_li3a3');?><span><?php __('srvact_li3b3');?></span><?php __('srvact_li3c3');?></li>
								</ul>
								<p><?php __('srvact_p3a'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/actualizacion/ACTUALIZACION_supresion barreras.png"/>
								<h4 class="bold center font24"><?php __('eslogan_bc'); ?></h4>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="row">
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="mv") echo ' active'; else echo ' ocult'; ?>" id="text_mv">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvact_h4'); ?></h3>
								<p><?php __('srvact_p40'); ?></p>
								<p><?php __('srvact_p41'); ?></p>
								<p><?php __('srvact_p42'); ?></p>
								<ul>
									<li><?php __('srvact_h4a'); ?></li>
									<li><?php __('srvact_h4b'); ?></li>
									<li><?php __('srvact_h4c'); ?></li>
									<li><?php __('srvact_h4d'); ?></li>
									<li><?php __('srvact_h4e'); ?></li>
									<li><?php __('srvact_h4f'); ?></li>
									<li><?php __('srvact_h4g'); ?></li>
									<li><?php __('srvact_h4h'); ?></li>
								</ul>
								<p><?php __('srvact_p4a'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/actualizacion/ACTUALIZACION_marketing verde.png"/>
								<h4 class="bold center font24"><?php __('eslogan_mv'); ?></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-12 text<?php if($secc=="cl") echo ' active'; else echo ' ocult'; ?>" id="text_cl">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvact_h5'); ?></h3>
								<h6><?php __('srvact_h5a'); ?></h6>
								<p><?php __('srvact_p5a'); ?></p>
								
								<h6><?php __('srvact_h5b'); ?></h6>
								<p><?php __('srvact_p5b');?></p>
			
								<h6><?php __('srvact_h5c'); ?></h6>
								<p><?php __('srvact_p5c'); ?></p>
								
								<h6><?php __('srvact_h5d'); ?></h6>
								<p><?php __('srvact_p5d'); ?></p>
								<ol>
									<li><?php __('srvact_li51');?></li>
									<li><?php __('srvact_li52');?></li>
									<li><?php __('srvact_li53');?></li>
									<li><?php __('srvact_li54');?></li>
									<li><?php __('srvact_li55');?></li>
									<li><?php __('srvact_li56');?></li>
									<li><?php __('srvact_li57');?></li>
								</ol>
								<p><?php __('srvact_p5e'); ?></p>
								<p><?php __('srvact_p5f'); ?></p>
								<p><?php __('srvact_p5g'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/actualizacion/ACTUALIZACION_certifiacion LEED.png"/>
								<h4 class="bold center font24"><?php __('eslogan_cl'); ?></h4>
							</div>
						</div>
					
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-12 text<?php if($secc=="sni") echo ' active'; else echo ' ocult'; ?>" id="text_sni">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvact_h6'); ?></h3>
								<p><?php __('srvact_p60'); ?></p>
								<h6><?php __('srvact_h6a'); ?></h6>
								<p><?php __('srvact_p6a'); ?><span class="bold"><?php __('srvact_p6a2'); ?></span><?php __('srvact_p6a3'); ?><span class="bold"><?php __('srvact_p6a4'); ?></span><?php __('srvact_p6a5'); ?></p>
								
								<h6><?php __('srvact_h6b'); ?></h6>
								<p><?php __('srvact_p6b');?></p>
								<p><?php __('srvact_p6b2');?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/actualizacion/ACTUALIZACION_certifiacion ISO.png"/>
								<h4 class="bold center font24"><?php __('eslogan_sni'); ?></h4>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		var working = false;
		$(".circuloServicio").click(function(){
			if(working == false){
				working = true;
				var id = $(this).attr("id").replace("service_", "");

				$(".bolasSectores .active").removeClass("active");
				$(this).addClass("active");

				if($(".textos .active").size()>0){
					if($(".textos .active").attr("id") != "text_"+id){
						$(".textos .active").fadeOut(function(){
							$(".textos .active").removeClass("active");
							$("#text_"+id).addClass("active").fadeIn(function(){ working = false; });
						});
					} else {
						working = false;
					}
				} else {
					$("#text_"+id).addClass("active").fadeIn(function(){ working = false; });
				}
			}
		});
	});
</script>
