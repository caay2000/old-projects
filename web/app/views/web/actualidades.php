<div class="row">
	<div class="col-md-12 contenido">
	
		<?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){ ?>
			<div class="row">
				<div class="col-md-12 padizq">
					<a class="btn btn-primary btn-lg" href="<?php echo PAGE_ROOT; ?>/nuevaActualidad"><?php __("nueva_actualidad"); ?></a>
				</div>
			</div>
		<?php } ?>
		
		<div class="row">
			<?php foreach($actualidades as $actualidad){ ?>
				<div class="col-md-12 linea" id="actualidad_<?php echo $actualidad['id']; ?>">
					<h3><?php echo $actualidad['titol']; ?>
					<?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){ ?>
						<a href="editActualidad?id=<?php echo $actualidad['id']; ?>"><span class="glyphicon glyphicon-edit izqmarg20px"></span></a>
						<a href="#actualidad_<?php echo $actualidad['id']; ?>"><span class="glyphicon glyphicon-remove izqmarg20px delete"></span></a>
					<?php } ?>
					<span class="fechaActualidad"><?php echo $actualidad['date']; ?></span></h3>
					<p><?php echo $actualidad['text']; ?></p>
					<?php if(isset($actualidad['path']) && $actualidad['path'] != NULL && strlen($actualidad['path'])>0 ) {?>
						<a href="<?php echo PDF_MEDIA_PATH.$actualidad['path'];?>" target="_blank">Enlace a PDF</a>
					<?php } ?>
				</div>
			<?php }	?>
			
		</div>
		<?php if($num_paginas > 1) { ?>
			<div class="row paginador">
				<?php for($i=1; $i<=$num_paginas; $i++){ ?>	
					<span><a href="<?php echo PAGE_ROOT;?>/actualidades?page=<?php echo ($i-1);?>"><?php echo $i;?></a></span>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".glyphicon-remove").click(function(event){
			bootbox.confirm("&iquest; Est&aacute;s seguro de borrar esta actualidad ?", function(result) {
				if(result) {
					var icon = event.target;
					var div = $(icon).closest("div");
					var id = div.attr("id").replace("actualidad_", ""); 
					window.location = "<?php echo PAGE_ROOT; ?>/deleteActualidad?id="+id;
				}
			}); 
		});
	});
</script>
