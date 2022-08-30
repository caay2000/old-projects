<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/additional-methods.js"></script>

<div class="row">
	<div class="col-md-12 contenido">
	
	<?php 
	
		$action = PAGE_ROOT."/insertEnlace"; 
		if(isset($link)) $action = PAGE_ROOT."/saveEnlace"; 
	?>
	
		<div class="row">
			<div class="col-md-12 formulari">
				<form class="form-horizontal" id="edita" action="<?php echo $action; ?>" method="POST">
					<h3><?php __('nuevo_enlace');?></h3>
					<div class="form-group">
					    <label for="texto" class="col-lg-2 control-label"><?php __('texto_info');?></label>
					    <div class="col-lg-8">
					      <input type="text" name="texto" class="form-control" placeholder="Texto" <?php if(isset($link)) echo 'value="'.$link['texto'].'"'?>>
					    </div>
					 </div>
					 <div class="form-group">
					    <label for="nom" class="col-lg-2 control-label"><?php __('nom_complet');?></label>
					    <div class="col-lg-8">
					      <input type="text" name="nom" class="form-control" placeholder="<?php __('nom_complet');?>" <?php if(isset($link)) echo 'value="'.$link['nombre'].'"'?>>
					    </div>
					 </div>
					 <div class="form-group">
					    <label for="mail" class="col-lg-2 control-label"><?php __("mail");?></label>
					    <div class="col-lg-8">
					      <input type="email" name="mail" class="form-control" placeholder="<?php __("mail");?>" <?php if(isset($link)) echo 'value="'.$link['email'].'"'?>>
					    </div>
					 </div>
					  <div class="form-group">
					  	<div class="col-lg-10">
					 		<input type="submit" id="envio" value="<?php __("publicar");?>" class="btn btn-primary btn-lg"/>
					 	</div>
					  </div>
					  <?php if(isset($link)){ ?>
						<input type="hidden" name="id" value="<?php echo $link['id'];?>">
					  <?php } ?>
				</form>
			</div>
		</div>
		
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#envio').click(function(){
			$("#edita").validate({
				rules: {
					nom: { required:true },
					texto: { required:true },
					mail: {required:true, email:true },
				},
				messages: {
					nom: { required:"<?php __('required'); ?>" },
					texto: { required: "<?php __('required'); ?>" },
					mail: { required: "<?php __('required'); ?>", email: "<?php __('email'); ?>" },
				}
			});	


		});	

		
	});

</script>

