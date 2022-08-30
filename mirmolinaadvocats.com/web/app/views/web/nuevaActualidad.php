<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/additional-methods.js"></script>

<div class="row">
	<div class="col-md-12 contenido">
	
	<?php
		$action = PAGE_ROOT."/insertActualidad"; 
		if(isset($link)) $action = PAGE_ROOT."/saveActualidad"; 
	?>
	
		<div class="row">
			<div class="col-md-12 formulari">
				<form class="form-horizontal" id="edita" enctype="multipart/form-data" action="<?php echo $action; ?>" method="POST">
					<h3><?php __('nueva_actualidad');?></h3>
					<div class="form-group">
					    <label for="titulo" class="col-lg-2 control-label"><?php __('titol');?></label>
					    <div class="col-lg-8">
					      <input type="text" name="titulo" class="form-control" placeholder="<?php __('titol');?>"<?php if(isset($link)) echo ' value="'.$link['titol'].'"'?>>
					    </div>
					 </div>
					 <div class="form-group">
					    <label for="texto" class="col-lg-2 control-label"><?php __('txt');?></label>
					    <div class="col-lg-8">
					      <textarea rows="10" cols="80" name="texto" class="form-control" placeholder="<?php __('txt');?>"><?php if(isset($link)) echo $link['text']; ?></textarea>
					    </div>
					 </div>
					 <?php if(!isset($link)){ ?>
					  <div class="form-group">
					    <label for="pdf" class="col-lg-2 control-label"><?php __('pdf');?></label>
					    <div class="col-lg-8">
					      <input type="file" name="pdf" class="form-control" placeholder="<?php __('pdf');?>">
					    </div>
					 </div>
					 <?php } ?>
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

<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/tinymce.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#envio').click(function(){
			$("#edita").validate({
				rules: {
					titulo: { required:true },
					texto: { required:true }
				},
				messages: {
					titulo: { required:"<?php __('required'); ?>" },
					texto: { required: "<?php __('required'); ?>" }
				}
			});	
		});	

		tinymce.init({
		    selector: 'textarea',
		    menubar:false,
		    statusbar: false,
		    plugins: [ "link" ],
		    toolbar: "bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link"
		});
		
	});
</script>