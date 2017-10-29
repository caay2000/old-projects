<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/additional-methods.js"></script>

<div class="row">
	<div class="col-md-12 contenido">
	
		<div class="row">
			<div class="col-md-4 col-md-offset-4 formulari">
				<form class="form-horizontal" id="login" action="<?php echo PAGE_ROOT; ?>/admin" method="POST">
					<h3><?php __('administrador');?></h3>
					<div class="form-group">
					    <label for="nom" class="col-lg-3 control-label"><?php __('usuario');?></label>
					    <div class="col-lg-9">
					      <input type="text" name="nom" class="form-control" placeholder="<?php __('usuario');?>">
					    </div>
					 </div>
					 <div class="form-group">
					    <label for="psw" class="col-lg-3 control-label"><?php __('psw');?></label>
					    <div class="col-lg-9">
					      <input type="password" name="psw" class="form-control" placeholder="<?php __('psw');?>">
					    </div>
					 </div>
					  <div class="form-group">
					  	<div class="col-lg-12">
					 		<input type="submit" id="envio" value="<?php __("entrar");?>" class="btn btn-primary btn-lg"/>
					 	</div>
					  </div>
				</form>
			</div>
		</div>
		
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#envio').click(function(){
			$("#login").validate({
				rules: {
					nom: { required:true },
					psw: { required:true }
				},
				messages: {
					nom: { required:"<?php __('required'); ?>" },
					psw: { required: "<?php __('required'); ?>" }
				}
			});	


		});	

		
	});

</script>

