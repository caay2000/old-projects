
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/additional-methods.js"></script>

<div class="row">
	<div class="col-xs-12 col-md-12 degradat pdg40">
			
		<div class="row">
			<div class="col-xs-6 col-md-6">
				<h3 class="bold cursiva mg0"><?php __('p1_contacto');?></h3>
				<h4 class="bold cursiva spaciat"><?php __('p2_contacto');?></h4>
				<p class="lineheight2"><?php __('p3_contacto');?><br/>
				<?php __('p3b_contacto');?></p>
				<div class="cuadrocontacto">
					<p class="bold mg0"><?php __('p4_contacto');?></p>
					<p class="bold mg0"><?php __('p5_contacto');?></p>
					<p class="bold mg0"><?php __('p6_contacto');?></p>
					<span><?php __('p7_contacto');?></span><br/>
					<span><?php __('p8_contacto');?></span>
				</div>
			</div>
			<div class="col-xs-6 col-md-6">
				<h3 class="bold cursiva mg0"><?php __('form_contacto');?></h3>
				<form class="form-horizontal" id="comprueba" action="sendcontacto" method="post">
					<div class="form-group pdt30 margintop20">
						<div class="col-xs-2 col-md-2 hidden-xs hidden-sm">
					    	<label for="nom" class="col-xs-1 col-md-1 control-label"><?php __('nom');?></label>
					    </div>
					    <div class="col-xs-12 col-md-10">
					      <input type="text" name="nom" class="form-control" placeholder="<?php __('nom');?>"/>
					    </div>
					</div>
					<div class="form-group">
						<div class="col-xs-2 col-md-2 hidden-xs hidden-sm">
						    <label for="email" class="col-xs-1 col-md-1 control-label"><?php __('email');?></label>
					    </div>
					    <div class="col-xs-12 col-md-10">
					      <input type="text" name="email" class="form-control" placeholder="<?php __('email');?>"/>
					    </div>
					</div>
					 <div class="form-group">
						 <div class="col-xs-2 col-md-2 hidden-xs hidden-sm">
						    <label for="texto" class="col-xs-1 col-md-1 control-label"><?php __('txt');?></label>
					    </div>
					    <div class="col-xs-12 col-md-10">
					      <textarea rows="10" cols="80" name="texto" class="form-control" placeholder="<?php __('txt');?>"></textarea>
					    </div>
					 </div>
					 <div class="form-group">
					  	<div class="col-xs-2 col-md-2">
						    
					    </div>
					    <div class="col-xs-12 col-md-10">
					      <input type="checkbox" name="legal" required="true" style="float:left; width: 10%;"/>
					      <p><?php __('legal_checkbox'); ?><a href="<?php echo PAGE_ROOT; ?>/cookies" target="_blank">(+)</a></p>
					    </div>
					 </div>
					 <div class="form-group">
					  	<div class="col-xs-offset-4 col-xs-8 col-md-offset-8 col-md-4">
					 		<input type="submit" id="envio" value="<?php __('enviar');?>" class="boton btn btn-success"/>
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
			$("#comprueba").validate({
				rules: {
					nom: { required:true },
					email: {required:true, email:true },
					texto: { required:true }
				},
				messages: {
					nom: { required:"<?php __('required'); ?>" },
					email: { required: "<?php __('required'); ?>", email: "<?php __('mail'); ?>" },
					texto: { required: "<?php __('required'); ?>" }
				}
			});	
		});	

	});

</script>		

	