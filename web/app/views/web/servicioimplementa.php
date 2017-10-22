<?php 
	if(isset($_GET['secc'])){
		$secc = $_GET['secc'];
		
	} else $secc = "oe";
?>


<div class="row">
	<div class="col-xs-12 col-md-12 degradat<?php echo $sector; ?> pdg40">
		
		<div class="row">
			<div class="col-xs-12 col-md-12 titulos">
				<div class="row">
					<div class="col-xs-4 col-md-4 linea1"></div><div class="col-xs-4 col-md-4 titulSector"><h1><?php __($sector); ?></h1></div><div class="col-xs-4 col-md-4 linea1"></div>
				</div>	
				<div class="row">
					<div class="col-xs-1 col-md-1">
						<a href="<?php echo PAGE_ROOT;?>/servicio/<?php echo $sector; ?>">
							<img src="<?php echo MEDIA_PATH; ?>/img/fletxa2.png"/>
						</a>
					</div>
					<div class="col-xs-10 col-md-10"><h3 class="titularea"><?php __('servicio_h3'); ?></h3></div>
				</div>	
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-12 bolasSectores">
				<div class="row">
					<?php if ($sector!="admFincas") { ?>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="oe") echo ' active'; ?>" id="service_oe">
  								<span><?php __('oe'); ?></span>
  							</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="es") echo ' active'; ?>" id="service_es">
				  				<span><?php __('es'); ?></span> 
				  			</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="ura") echo ' active'; ?>" id="service_ura">
  								<span><?php __('ura'); ?></span> 
  							</div>
  						</div>
					</div>
									
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="er") echo ' active'; ?>" id="service_er">
  								<span><?php __('er'); ?></span> 
  							</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="gr") echo ' active'; ?>" id="service_gr">
  								<span><?php __('gr'); ?></span> 
  							</div>
  						</div>
					</div>
					<?php } else{ ?>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio active" id="service_cu">
  								<span><?php __('cu'); ?></span> 
  							</div>
  						</div>
					</div>
					<?php } ?>
					
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-md-12 servicioFondo textos">
				<div class="row">
				
					<?php if ($sector!="admFincas") { ?>
					<div class="col-xs-12 col-md-12 text<?php if($secc=="oe") echo ' active'; else echo ' ocult'; ?>" id="text_oe">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvimpl_h1'); ?></h3>
								<h6><?php __('srvimpl_h1a'); ?></h6>
								<p><?php __('srvimpl_p1a'); ?></p>
								
								<h6><?php __('srvimpl_h1b'); ?></h6>
								<p><?php __('srvimpl_p1b');?></p>
			
								<h6><?php __('srvimpl_h1c'); ?></h6>
								<ul>
									<li><?php __('srvimpl_p1c1'); ?></li>
									<li><?php __('srvimpl_p1c2'); ?></li>
									<li><?php __('srvimpl_p1c3'); ?></li>
								</ul>

							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/implementacion/IMPLEMENTACION_optimiza energ.png"/>
								<h4 class="bold center font24"><?php __('eslogan_oe'); ?></h4>
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="es") echo ' active'; else echo ' ocult'; ?>" id="text_es">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvimpl_h2'); ?></h3>
								<h6><?php __('srvimpl_h2a'); ?></h6>
								<p><?php __('srvimpl_p2a'); ?></p>
								
								<h6><?php __('srvimpl_h2b'); ?></h6>
								<p><?php __('srvimpl_p2b');?></p>
			
								<h6><?php __('srvimpl_h2c'); ?></h6>
								<ul>
									<li><?php __('srvimpl_p2c1'); ?></li>
									<li><?php __('srvimpl_p2c2'); ?></li>
									<li><?php __('srvimpl_p2c3'); ?></li>
									<li><?php __('srvimpl_p2c4'); ?></li>
									<li><?php __('srvimpl_p2c5'); ?></li>
									<li><?php __('srvimpl_p2c6'); ?></li>
									<li><?php __('srvimpl_p2c7'); ?></li>
								</ul>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/implementacion/IMPLEMENTACION_edificacion sostenible.png"/>
								<h4 class="bold center font24"><?php __('eslogan_es'); ?></h4>
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="ura") echo ' active'; else echo ' ocult'; ?>" id="text_ura">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvimpl_h3'); ?></h3>
								<h6><?php __('srvimpl_h3a'); ?></h6>
								<p><?php __('srvimpl_p3a'); ?></p>
								
								<h6><?php __('srvimpl_h3b'); ?></h6>
								<p><?php __('srvimpl_p3b');?></p>
			
								<h6><?php __('srvimpl_h3c'); ?></h6>
								<ul>
									<li><?php __('srvimpl_p3c1'); ?></li>
									<li><?php __('srvimpl_p3c2'); ?></li>
									<li><?php __('srvimpl_p3c3'); ?></li>
									<li><?php __('srvimpl_p3c4'); ?></li>
									<li><?php __('srvimpl_p3c5'); ?></li>
									<li><?php __('srvimpl_p3c6'); ?></li>
								</ul>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/implementacion/IMPLEMENTACION_uso razonable agua.png"/>
								<h4 class="bold center font24"><?php __('eslogan_ura'); ?></h4>
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="er") echo ' active'; else echo ' ocult'; ?>" id="text_er">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvimpl_h4'); ?></h3>
								<h6><?php __('srvimpl_h4a'); ?></h6>
								<p><?php __('srvimpl_p4a'); ?></p>
								
								<h6><?php __('srvimpl_h4b'); ?></h6>
								<p><?php __('srvimpl_p4b');?><sup><?php __('srvimpl_p4b2');?></sup><?php __('srvimpl_p4b3');?></p>
			
								<h6><?php __('srvimpl_h4c'); ?></h6>
								<ul>
									<li><?php __('srvimpl_p4c1'); ?></li>
									<li><?php __('srvimpl_p4c2'); ?></li>
								</ul>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/implementacion/IMPLEMENTACION_energias renovables.png"/>
								<h4 class="bold center font24"><?php __('eslogan_er'); ?></h4>
							</div>
						</div>

					</div>
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="gr") echo ' active'; else echo ' ocult'; ?>" id="text_gr">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvimpl_h5'); ?></h3>
								<h6><?php __('srvimpl_h5a'); ?></h6>
								<p><?php __('srvimpl_p5a'); ?></p>
								
								<h6><?php __('srvimpl_h5b'); ?></h6>
								<p><?php __('srvimpl_p5b');?></p>
			
								<h6><?php __('srvimpl_h5c'); ?></h6>
								<p><?php __('srvimpl_p5c'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/implementacion/IMPLEMENTACION_gestion residuos.png"/>
								<h4 class="bold center font24"><?php __('eslogan_gr'); ?></h4>
							</div>
						</div>

					</div>
					
					<?php } else{?>
					
					<div class="col-xs-12 col-md-12 text active" id="text_cu">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvimpl_h6'); ?></h3>
								<h6><?php __('srvimpl_h6a'); ?></h6>
								<p><?php __('srvimpl_p6a'); ?></p>
								
								<h6><?php __('srvimpl_h6b'); ?></h6>
								<p><?php __('srvimpl_p6b1');?><sup><?php __('srvimpl_p6b2');?></sup><?php __('srvimpl_p6b3');?></p>
			
								<h6><?php __('srvimpl_h6c'); ?></h6>
								<ul>
									<li><?php __('srvimpl_p6c1'); ?></li>
									<li><?php __('srvimpl_p6c2'); ?></li>
								</ul>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/implementacion/IMPLEMENTACION_cambio de uso.png"/>
								<h4 class="bold center font24"><?php __('eslogan_cu'); ?></h4>
							</div>
						</div>

					</div>
					
					<?php } ?>
					
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

