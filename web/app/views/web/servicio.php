<div class="row">
	<div class="col-xs-12 col-md-12 degradat<?php echo $sector; ?> pdg40">

		<div class="row">
			<div class="col-xs-12 col-md-12 titulos">
				<div class="row">
					<div class="col-xs-4 col-md-4 linea1"></div>
					<div class="col-xs-4 col-md-4 titulos">
						<h1><?php __($sector); ?></h1>
					</div>
					<div class="col-xs-4 col-md-4 linea1"></div>
				</div>
				<div class="row">
					<div class="col-xs-1 col-md-1">
						<a href="<?php echo PAGE_ROOT;?>/inicio"> <img
							src="<?php echo MEDIA_PATH; ?>/img/fletxa2.png" />
						</a>
					</div>
					<div class="col-xs-10 col-md-10">
						<h3 class="titularea"><?php __('servicios'); ?></h3>
					</div>
				</div>
			</div>
		</div>
		
		<?php if ($sector!="admFincas") { ?>
				<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
			<?php if($sector=="hotels") {?>
				<h3 class="header"><?php __('inicio_sector2_p');?></h3>
				<?php }else if($sector=="comerc") {?>
				<h3 class="header"><?php __('inicio_sector3_p');?></h3>
				<?php }else if($sector=="empresa") {?>
				<h3 class="header"><?php __('inicio_sector4_p');?></h3>
				<?php }else if($sector=="vino") {?>
				<h3 class="header"><?php __('inicio_sector5_p');?></h3>
				<?php }?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 col-md-4 servicio">
				<div class="row h170">
				<a href="<?php echo PAGE_ROOT;?>/costesdirectos/<?php echo $sector;?>">
					<div id="bola_costesdirectos" class="bola costesdirectos active"></div>
					</a>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<h4><?php __('servicio_h1'); ?></h4>
						<p><?php __('servicio_p1');?></p>
					</div>
				</div>
				<div class="col-xs-offset-2 col-xs-8 servicio tcenter">
					<div id="text_costesdirectos" class="text active">
						<?php __('inicio_sector1_p');?>
					</div>
					<a class="masinfo" href="<?php echo PAGE_ROOT;?>/costesdirectos/<?php echo $sector;?>"><?php __('masinfo');?></a>
				</div>
			</div>
			<div class="col-xs-4 col-md-4 servicio">
				<div class="row h170">
				<a href="<?php echo PAGE_ROOT;?>/actualizar/<?php echo $sector;?>">
					<div id="bola_actualizar" class="bola actualizar"></div>
					</a>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<h4><?php __('servicio_h2'); ?></h4>
						<p><?php __('servicio_p2');?></p>
					</div>
				</div>
				<div class="col-xs-offset-2 col-xs-8 servicio tcenter">
					<div id="text_costesdirectos" class="text active">
						<?php __('inicio_sector6_p');?>
					</div>
					<a class="masinfo" href="<?php echo PAGE_ROOT;?>/actualizar/<?php echo $sector;?>"><?php __('masinfo');?></a>
				</div>
			</div>
			<div class="col-xs-4 col-md-4 servicio">
				<div class="row h170">
				<a href="<?php echo PAGE_ROOT;?>/implementar/<?php echo $sector;?>">
					<div id="bola_implementar" class="bola implementar"></div>
					</a>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<h4><?php __('servicio_h3'); ?></h4>
						<p><?php __('servicio_p3');?></p>
					</div>
				</div>
				<div class="col-xs-offset-2 col-xs-8 servicio tcenter">
					<div id="text_costesdirectos" class="text active">
						<?php __('inicio_sector3_p');?>
					</div>
					<a class="masinfo" href="<?php echo PAGE_ROOT;?>/implementar/<?php echo $sector;?>"><?php __('masinfo');?></a>
				</div>
			</div>
		</div>
		<?php } else { ?>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<h3 class="header"><?php __('inicio_sector1_p');?></h3>
			</div>
		</div>
		<div class="row">

			<div class="col-xs-6 col-md-6 servicio">
				<div class="row h170">
					<a href="<?php echo PAGE_ROOT;?>/costesdirectos/<?php echo $sector;?>">
						<div id="bola_costesdirectos" class="bola costesdirectos active"></div>
					</a>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<h4><?php __('servicio_h1'); ?></h4>
						<p><?php __('servicio_p1');?></p>
					</div>
				</div>
						<div class="row">
			<div class="col-xs-offset-2 col-xs-8 servicio tcenter">
				<div id="text_costesdirectos" class="text active">
					<?php __('inicio_sector1_p');?>
				</div>
				<a class="masinfo" href="<?php echo PAGE_ROOT;?>/costesdirectos/<?php echo $sector;?>"><?php __('masinfo');?></a>
			</div>
		</div>
			</div>
			<div class="col-xs-6 col-md-6 servicio">
				<div class="row h170">
				<a href="<?php echo PAGE_ROOT;?>/implementar/<?php echo $sector;?>">
					<div id="bola_implementar" class="bola implementar"></div>
					</a>
				</div>
				
				<div class="row">
					<div class="col-xs-12 col-md-12 center pdg10">
						<h4><?php __('servicio_h3'); ?></h4>
						<p><?php __('servicio_p3');?></p>
					</div>
				</div>
				<div class="col-xs-offset-2 col-xs-8 servicio tcenter">
					<div id="text_costesdirectos" class="text active">
						<?php __('inicio_sector3_p');?>
						
					</div>
					<a class="masinfo" href="<?php echo PAGE_ROOT;?>/implementar/<?php echo $sector;?>"><?php __('masinfo');?></a>
				</div>
			</div>
		</div>
		<?php } ?>
		

	</div>
</div>

