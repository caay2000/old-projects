<link rel="stylesheet" type="text/css" href="<?php echo MEDIA_PATH; ?>/css/jquery.notifyBar.css"/>

<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/additional-methods.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.notifyBar.js"></script>

<script>
	$(document).ready(function(){
		$('#envio1').click(function(){
			$("form#contacto1").validate({
				rules: {
					nom: {required:true},
					email: {email:true, required:true},
					mesage: {required:true}
				},
				messages: {
					nom: { required: "<?php __('required'); ?>" },
					email: { required: "<?php __('required'); ?>", email: "<?php __('email'); ?>" },
					message: { required: "<?php __('required'); ?>" }
				}
			});	
		});	
		$('#envio2').click(function(){
			$("form#contacto2").validate({
				rules: {
					nom: {required:true},
					telf: {integer:true, required:true, minlength:9, maxlength:16},
				},
				messages: {
					nom: { required: "<?php __('required'); ?>" },
					telf: { required: "<?php __('required'); ?>", integer: "<?php __('integer'); ?>", minlength: "<?php __('minlength'); ?>", maxlength: "<?php __('maxlength'); ?>"}
				}
			});	
		});
		$('#contacto1 textarea').click(function(){
			$(this).val("");
		});

		<?php if(isset($_GET['okt'])){ ?>
			$.notifyBar({ cssClass: "success", html: "<?php __('telf_enviado_ok'); ?>" });
		<?php } ?>
		
		<?php if(isset($_GET['kot'])){ ?>
			$.notifyBar({ cssClass: "error", html: "<?php __('telf_enviado_ko'); ?>" });
		<?php } ?>
		<?php if(isset($_GET['okm'])){ ?>
			$.notifyBar({ cssClass: "success", html: "<?php __('mail_enviado_ok'); ?>" });
		<?php } ?>
		
		<?php if(isset($_GET['kom'])){ ?>
			$.notifyBar({ cssClass: "error", html: "<?php __('mail_enviado_ko'); ?>" });
		<?php } ?>
	});            
</script>


<div class="content_centro">
	<div class="container-fluid contacto"> 
		<div class="row-fluid">     
		    <div class="span12">
				<div class="clear"></div>
		   		<div class="row-fluid">
		   		
		        	<div class="span4 izquierda">
				    	<img src="<?php echo MEDIA_PATH; ?>/images/sm.png" alt="foto" width="235" height="120"/>
				        <p><?php __('contacto_box1_p');?></p>
		        	</div>
		       
			        <div class="span8 derecha">
			            <h3><?php __('contacto_box2_h3');?></h3>
			            <p><?php __('contacto_box2_p1');?></p>
			            <span class="big"><?php __('mail_contact_1'); ?><img class="arroba" src="<?php echo MEDIA_PATH; ?>/images/arroba_orange.png" alt="arroba"/><?php __('mail_contact_2'); ?></span>
			            <p><?php __('contacto_box2_p2');?></p>
			            <div class="clearDos"></div>
					</div>
					
				</div>
			</div>	
		</div>
	</div>
</div>