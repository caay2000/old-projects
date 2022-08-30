<?php 
	if(isset($_GET['secc'])){
		$secc = $_GET['secc'];
	} else $secc = "dt";
?>

<?php if($sector == "hotels") { ?>
	<div id="table-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><?php __('srvcost_h3'); ?></h4>
				</div>
				<div class="modal-body">
					<img alt="Tabla Auditoria Energetica" src="<?php echo MEDIA_PATH; ?>/img/table.jpg">
				</div>
			</div>
		</div>
	</div>
<?php } ?>

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
						<h3 class="titularea"><?php __('servicio_h1'); ?></h3>
					</div>
				</div>	
			</div>
		</div>
	
		<div class="row">
			<div class="col-xs-12 col-md-12 bolasSectores">
				<div class="row">
				
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="dt") echo ' active'; ?>" id="service_dt">
  								<span><?php __('dt'); ?></span>
  							</div>
  						</div>
					</div>
					
					<?php if($sector =='admFincas'){ ?>	
				
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="cee") echo ' active'; ?>" id="service_cee">
  								<span><?php __('cee'); ?></span>
  							</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="cd") echo ' active'; ?>" id="service_cd">
  								<span><?php __('cd'); ?></span>
  							</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="le") echo ' active'; ?>" id="service_le">
  								<span><?php __('le'); ?></span>
  							</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="ite") echo ' active'; ?>" id="service_ite">
  								<span><?php __('ite'); ?></span>
  							</div>
  						</div>
					</div>
				
				
				
				<?php } else { ?>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="ptc") echo ' active'; ?>" id="service_ptc">
				  				<span><?php __('pc'); ?></span> 
				  			</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="ae") echo ' active'; ?>" id="service_ae">
  								<span><?php __('ae'); ?></span> 
  							</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="im") echo ' active'; ?>" id="service_im">
  								<span><?php __('im'); ?></span> 
  							</div>
  						</div>
					</div>
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="pf") echo ' active'; ?>" id="service_pf">
  								<span><?php __('pf'); ?></span> 
  							</div>
  						</div>
					</div>
					
			
					
					<div class="col-xs-1 col-md-1 divbolita">
						<div class="row">
							<div class="col-xs-12 col-md-12 circuloServicio<?php if($secc=="iv") echo ' active'; ?>" id="service_iv">
  								<span><?php __('iv'); ?></span> 
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
				<?php if($sector =='hotels'||$sector =='comerc'||$sector =='empresa'||$sector =='vino'){ ?>	
					<div class="col-xs-12 col-md-12 text<?php if($secc=="dt") echo ' active'; else echo ' ocult'; ?>" id="text_dt">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvcost_h1'); ?></h3>
								<h6><?php __('srvcost_h1a'); ?></h6>
								<p><?php __('srvcost_p1a'); ?></p>
								
								<h6><?php __('srvcost_h1b'); ?></h6>
								<p><?php __('srvcost_p1b');?></p>
								<p><?php __('srvcost_p1b2'); ?></p>
			
								<h6><?php __('srvcost_h1c'); ?></h6>
								<p><?php __('srvcost_p1c'); ?></p>
								<p><?php __('srvcost_p1c2'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTES DIRECTOS_diagnostico tarifario.png"/>
								<h4 class="bold center font24"><?php __('eslogan_dt'); ?></h4>
							</div>
						</div>

					</div>
				<?php }?>	
				<?php if($sector =='admFincas'){ ?>	
				
					<div class="col-xs-12 col-md-12 text<?php if($secc=="dt") echo ' active'; else echo ' ocult'; ?>" id="text_dt">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvcost_h1'); ?></h3>
								<h6><?php __('srvcost_h1a'); ?></h6>
								<p><?php __('srvcost_p1aadmin'); ?></p>
								
								<h6><?php __('srvcost_h1b'); ?></h6>
								<p><?php __('srvcost_p1badmin');?></p>
								<p><?php __('srvcost_p1b2'); ?></p>
			
								<h6><?php __('srvcost_h1c'); ?></h6>
								<p><?php __('srvcost_p1c'); ?></p>
								<p><?php __('srvcost_p1c2admin'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTES DIRECTOS_diagnostico tarifario.png"/>
								<h4 class="bold center font24"><?php __('eslogan_dt'); ?></h4>
							</div>
						</div>

					</div>
				
					<div class="col-xs-12 col-md-12 text<?php if($secc=="cee") echo ' active'; else echo ' ocult'; ?>" id="text_cee">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvcost_h6'); ?></h3>
								<h6><?php __('srvcost_h6a'); ?></h6>
								<p><?php __('srvcost_p6a'); ?></p>
								
								<h6><?php __('srvcost_h6b'); ?></h6>
								<p><?php __('srvcost_p6b');?></p>
			
								<h6><?php __('srvcost_h6c'); ?></h6>
								<p><?php __('srvcost_p6c'); ?><sup><?php __('srvcost_p6c2'); ?></sup><?php __('srvcost_p6c3'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTES DIRECTOS_certificacion energetica.png"/>
								<h4 class="bold center font24"><?php __('eslogan_cee'); ?></h4>
							</div>
						</div>

					</div>
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="cd") echo ' active'; else echo ' ocult'; ?>" id="text_cd">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvcost_h8'); ?></h3>
								<h6><?php __('srvcost_h8a'); ?></h6>
								<p><?php __('srvcost_p8a'); ?></p>
								
								<h6><?php __('srvcost_h8b'); ?></h6>
								<p><?php __('srvcost_p8b');?></p>
			
								<h6><?php __('srvcost_h8c'); ?></h6>
								<p><?php __('srvcost_p8c'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTES DIRECTOS_cedula.png"/>
								<h4 class="bold center font24"><?php __('eslogan_cd'); ?></h4>
							</div>
						</div>

					</div>
				
					<div class="col-xs-12 col-md-12 text<?php if($secc=="le") echo ' active'; else echo ' ocult'; ?>" id="text_le">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvcost_h9'); ?></h3>
								<h6><?php __('srvcost_h9a'); ?></h6>
								<p><?php __('srvcost_p9a'); ?></p>
								
								<h6><?php __('srvcost_h9b'); ?></h6>
								<p><?php __('srvcost_p9b');?></p>
			
								<h6><?php __('srvcost_h9c'); ?></h6>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTES DIRECTOS_libro edificio.png"/>
								<h4 class="bold center font24"><?php __('eslogan_le'); ?></h4>
							</div>
						</div>

					</div>
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="ite") echo ' active'; else echo ' ocult'; ?>" id="text_ite">
						<div class="row">
							<div class="col-xs-8 col-md-8">
						<h3><?php __('srvcost_h10'); ?></h3>
						<h6><?php __('srvcost_h10a'); ?></h6>
						<p><?php __('srvcost_p10a'); ?></p>
						
						<h6><?php __('srvcost_h10b'); ?></h6>
						<p><?php __('srvcost_p10b');?></p>
	
						<h6><?php __('srvcost_h10c'); ?></h6>
						<div class="row">
							<div class="col-xs-6">
								<ul>
									<li><?php __('srvcost_p10cli1a'); ?></li>
									<li><?php __('srvcost_p10cli2a'); ?></li>
									<li><?php __('srvcost_p10cli3a'); ?></li>
									<li><?php __('srvcost_p10cli4a'); ?></li>
									<li><?php __('srvcost_p10cli5a'); ?></li>
									<li><?php __('srvcost_p10cli6a'); ?></li>
								</ul>
							</div>
							<div class="col-xs-6">
								<ul>
									<li><?php __('srvcost_p10cli1b'); ?></li>
									<li><?php __('srvcost_p10cli2b'); ?></li>
									<li><?php __('srvcost_p10cli3b'); ?></li>
									<li><?php __('srvcost_p10cli4b'); ?></li>
									<li><?php __('srvcost_p10cli5b'); ?></li>
									<li><?php __('srvcost_p10cli6b'); ?></li>
								</ul>
							</div>
						</div>
							
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTES DIRECTOS_ite.png"/>
								<h4 class="bold center font24"><?php __('eslogan_ite'); ?></h4>
							</div>
						</div>

					</div>
				
				
				<?php } else { ?>
				
				
					<div class="col-xs-12 col-md-12 text<?php if($secc=="ptc") echo ' active'; else echo ' ocult'; ?>" id="text_ptc">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvcost_h2'); ?></h3>
								<h6><?php __('srvcost_h2a'); ?></h6>
								<p><?php __('srvcost_p2a'); ?></p>
								
								<h6><?php __('srvcost_h2b'); ?></h6>
								<p><?php __('srvcost_p2b'); ?></p>
			
								<h6><?php __('srvcost_h2c'); ?></h6>
								<p><?php __('srvcost_p2c'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTES DIRECTOS_patron consumo.png"/>
								<h4 class="bold center font24"><?php __('eslogan_pc'); ?></h4>
							</div>
						</div>

					</div>
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="ae") echo ' active'; else echo ' ocult'; ?>" id="text_ae">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvcost_h3'); ?></h3>
								<h6><?php __('srvcost_h3a'); ?></h6>
								<p><?php __('srvcost_p3a'); ?></p>
								
								<h6><?php __('srvcost_h3b'); ?></h6>
								<p><?php __('srvcost_p3b'); ?></p>
								<ul>
									<li><?php __('srvcost_p3bli1'); ?></li>
									<li><?php __('srvcost_p3bli2'); ?></li>
									<li><?php __('srvcost_p3bli3'); ?></li>
									<li><?php __('srvcost_p3bli4'); ?></li>
									<li><?php __('srvcost_p3bli5'); ?></li>
								</ul>
								<h6><?php __('srvcost_h3c'); ?></h6>
								<p><?php __('srvcost_p3c'); ?></p>
								<ul>
									<li><?php __('srvcost_p3cli1'); ?></li>
									<li><?php __('srvcost_p3cli2'); ?></li>
									<li><?php __('srvcost_p3cli3'); ?></li>
									<li><?php __('srvcost_p3cli4'); ?></li>
									<li><?php __('srvcost_p3cli5'); ?></li>
									<li><?php __('srvcost_p3cli6'); ?></li>
									<li><?php __('srvcost_p3cli7'); ?></li>
									<li><?php __('srvcost_p3cli8'); ?></li>
									<li><?php __('srvcost_p3cli9'); ?></li>
								</ul>
								<?php if($sector == "hotels") { ?>
									<p><?php __('srvcost_p3d'); ?><?php __('srvcost_p3d2'); ?><a id="table" href="#"><?php __('srvcost_p3d3'); ?></a></p>
								<?php } ?>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTES DIRECTOS_auditoria.png"/>
								<h4 class="bold center font24"><?php __('eslogan_ae'); ?></h4>
							</div>
						</div>

					</div>
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="im") echo ' active'; else echo ' ocult'; ?>" id="text_im">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvcost_h4'); ?></h3>
								<h6><?php __('srvcost_h4a'); ?></h6>
								<p><?php __('srvcost_p4a'); ?></p>
								
								<h6><?php __('srvcost_h4b'); ?></h6>
								<p><?php __('srvcost_p4b'); ?></p>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTES DIRECTOS_implementacion  mejoras.png"/>
								<h4 class="bold center font24"><?php __('eslogan_im'); ?></h4>
							</div>
						</div>

					</div>
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="pf") echo ' active'; else echo ' ocult'; ?>" id="text_pf">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvcost_h5'); ?></h3>
								<h6><?php __('srvcost_h5a'); ?></h6>
								<p><?php __('srvcost_p5a'); ?></p>
								
								<h6><?php __('srvcost_h5b'); ?></h6>
								<p><?php __('srvcost_p5b'); ?></p>
								
								<h6><?php __('srvcost_h5c'); ?></h6>
								<ul>
									<li><?php __('srvcost_p5cli1'); ?></li>
									<li><?php __('srvcost_p5cli2'); ?></li>
									<li><?php __('srvcost_p5cli3'); ?></li>
									<li><?php __('srvcost_p5cli4'); ?></li>
									<li><?php __('srvcost_p5cli5'); ?></li>
									<li><?php __('srvcost_p5cli6'); ?></li>
									<li><?php __('srvcost_p5cli7'); ?></li>
									<li><?php __('srvcost_p5cli8'); ?></li>						
								</ul>						
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTES DIRECTOS_formacion.png"/>
								<h4 class="bold center font24"><?php __('eslogan_pf'); ?></h4>
							</div>
						</div>
					
					</div>
					
					
					<div class="col-xs-12 col-md-12 text<?php if($secc=="iv") echo ' active'; else echo ' ocult'; ?>" id="text_iv">
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<h3><?php __('srvcost_h7'); ?></h3>
								<h6><?php __('srvcost_h7a'); ?></h6>
								<p><?php __('srvcost_p7a'); ?></p>
								
								<h6><?php __('srvcost_h7b'); ?></h6>
								<ul>
									<li><?php __('srvcost_p7b1'); ?></li>
									<li><?php __('srvcost_p7b2'); ?></li>
									<li><?php __('srvcost_p7b3'); ?></li>
									<li><?php __('srvcost_p7b4'); ?></li>
									<li><?php __('srvcost_p7b5'); ?></li>
									<li><?php __('srvcost_p7b6'); ?></li>
									<li><?php __('srvcost_p7b7'); ?></li>
									<li><?php __('srvcost_p7b8'); ?></li>
								</ul>
							</div>
							<div class="col-xs-4 col-md-4">
								<img class="imgservc12 img-responsive" src="<?php echo MEDIA_PATH;?>/img/reduccioncostes/COSTE DIRECTO_infraestructura verde.png"/>
								<h4 class="bold center font24"><?php __('eslogan_iv'); ?></h4>
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
		$(document).on('click', '#table', function(){
			$("#table-modal").modal('show');
		});
	});
</script>
