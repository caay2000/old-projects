<div class="row">
	<div class="col-xs-12 col-md-12 degradat pdg40">
		<div class="row">
			<div class="col-xs-3 col-md-3">
				<div class="row h170">
					<div class="bola medir">
						<h3 class="bold"><?php __('sector_h1');?></h3>
  					</div>
  					<img id="fletxa_1" class="fletxa" alt="fletxa" src="<?php echo MEDIA_PATH; ?>/img/fletxa.png">
  				</div>
  				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<p><?php __('sector_p1');?></p>
					</div>
				</div>
			</div>
			<div class="col-xs-3 col-md-3">
				<div class="row h170">
					<div class="bola analizar">
						<h3 class="bold"><?php __('sector_h2'); ?></h3>
		  			</div>
		  			<img id="fletxa_2" class="fletxa" alt="fletxa" src="<?php echo MEDIA_PATH; ?>/img/fletxa.png">
  				</div>
  				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<p><?php __('sector_p2');?></p>
					</div>
				</div>
			</div>
			<div class="col-xs-3 col-md-3">
				<div class="row h170">
					<div class="bola actuar">
						<h3 class="bold"><?php __('sector_h3'); ?></h3>
					</div>
					<img id="fletxa_3" class="fletxa" alt="fletxa" src="<?php echo MEDIA_PATH; ?>/img/fletxa.png">
  				</div>
  				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<p><?php __('sector_p3');?></p>
					</div>
				</div>
			</div>
			<div class="col-xs-3 col-md-3">
				<div class="row h170">
					<div class="bola comprobar">
						<h3 class="bold"><?php __('sector_h4'); ?></h3>
					</div>
  				</div>
  				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<p><?php __('sector_p4');?></p>	
					</div>
				</div>
			</div>
		</div>
	
		<div class="row segon_nivell">
			<div class="col-xs-3 col-md-3">
				<div class="row">
					<div class="bola ahorro">
						<h3 class="bold"><?php __('sector_h5');?></h3>
  					</div>
  				</div>
  				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<p><?php __('sector_p5');?></p>
					</div>
				</div>
			</div>
			<div class="col-xs-3 col-md-3">
				<div class="row">
					<div class="bola competitividad">
						<h3 class="bold"><?php __('sector_h6'); ?></h3>
		  			</div>
  				</div>
  				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<p><?php __('sector_p6');?></p>
					</div>
				</div>
			</div>
			<div class="col-xs-3 col-md-3">
				<div class="row">
					<div class="bola rentabilidad">
						<h3 class="bold"><?php __('sector_h7'); ?></h3>
					</div>
  				</div>
  				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<p><?php __('sector_p7');?></p>
					</div>
				</div>
			</div>
			<div class="col-xs-3 col-md-3">
				<div class="row">
					<div class="bola eficiencia">
						<h3 class="bold"><?php __('sector_h8'); ?></h3>
					</div>
  				</div>
  				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<p><?php __('sector_p8');?></p>	
					</div>
				</div>
			</div>
		</div>
	
		<div class="row">
			<div class="col-xs-4 col-md-4 col-xs-offset-4">
				<a class="btn btn-success margintop20 boton" href="<?php echo PAGE_ROOT;?>/inicio"><?php __('empezamosAhorrar');?></a>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript">
	var time = 1000;
	$(document).ready(function(){
		$("#fletxa_1").delay(time).fadeIn(function(){
			$("#fletxa_2").delay(time).fadeIn(function(){
				$("#fletxa_3").delay(time).fadeIn(function(){
					$(".segon_nivell").delay(time).slideDown();
				});
			});
		});

	});
</script>
