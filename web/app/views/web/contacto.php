<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/additional-methods.js"></script>

<div class="row">
	<div class="col-md-12 contenido">
		 <div class="row gmaps">
			<div class="col-md-12" id="contacte_map" >
				<div class="flexible-container">
					<iframe width="1170" height="300" src="http://maps.google.es/maps?
						q=41.373963,2.084872&amp;
						num=1&amp;
						t=m&amp;
						ie=UTF8&amp;
						z=16&amp;
						output=embed">
					</iframe>
				</div>
			</div>
		</div> 	
		

		<div class="row">
		
			<div class="col-md-4 titulcontacte">
				<h3><?php __("contacto");?></h3>
				<p><?php __("textcontacto");?></p>
				<p><?php __("textcontacto2");?></p>
				<span class="negrita centrado mgtp20"><?php __("index_tittle");?></span>
				<span class="negrita centrado"><?php __("direccio_1"); ?></span><br/>
				<span class="negrita centrado"><?php __("direccio_2"); ?></span><br/>
				<span class="negrita centrado"><?php __("direccio_3"); ?></span><br/>
				<span class="centrado"><?php __("tlf");?> : <?php __("telefon"); ?></span><br/>
				<span class="centrado"><?php __("mail");?> : <span class="blau"><?php __("mail_1"); ?><img src="<?php echo MEDIA_PATH;?>/img/arroba.png"/><?php __("mail_2"); ?></span></span>
			</div>	
			
			<div class="col-md-8 titulcontacte">
				<h3><?php __("formcontacto");?></h3>
				<form class="form-horizontal" id="contacto" action="<?php echo PAGE_ROOT; ?>/enviar" method="post">
			  		<div class="form-group">
			    		<div class="col-md-4 mbootom10">
			      			<input type="text" name="nom" class="form-control" id="inputNom" placeholder="<?php __("nom");?>"/>
			    		</div>
			    		<div class="col-md-4 mbootom10">
			      			<input type="email" name="email" class="form-control" id="inputEmail1" placeholder="<?php __("mail");?>"/>
			    		</div>
			    		<div class="col-md-4 mbootom10">
			      			<input type="tel" name="telf" class="form-control" id="inputTelf" placeholder="<?php __("tlf");?>"/>
			    		</div>
			    	</div>
			    	<div class="form-group">
			    		<div class="col-md-12">
			      			<textarea class="form-control" name="mesage" rows="10" placeholder="<?php __("consulta");?>"></textarea>
			    		</div>
			    	</div>
			    	<div class="form-group">
				    	<div class="col-md-12">
				      		<input type="submit" id="envio" value="<?php __("enviar");?>" class="btn btn-primary btn-lg"/>
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
			$("#contacto").validate({
				rules: {
					nom: {required:true },
					email: {required:true, email:true },
					telf: {integer:true, required:true, minlength:9, maxlength:16},
					mesage: {required:true}
				},
				messages: {
					nom: { required:"<?php __('required'); ?>" },
					email: { required: "<?php __('required'); ?>", email: "<?php __('email'); ?>" },
					telf: { required: "<?php __('required'); ?>", integer: "<?php __('integer'); ?>", minlength: "<?php __('minlength'); ?>", maxlength: "<?php __('maxlength'); ?>"},
					message: { required: "<?php __('required'); ?>" }
				}
			});	


		});	

		
	});

<?php 
	if(isset($envioemail)){
		if($envioemail == true){
?>	
			bootbox.alert("Su mensaje se ha enviado correctamente.");
<?php 
		} else{
?>
			bootbox.alert("Su mensaje no se ha podido enviar correctamente, revise los campos.");
<?php 			
		} 
	}
?>
</script>	
