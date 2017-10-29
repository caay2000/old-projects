<div class="row">
	<div class="col-md-12 contenido">
		<?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){ ?>
			<div class="row">
				<div class="col-md-12 padizq margbt20">
					<a class="btn btn-primary btn-lg" href="<?php echo PAGE_ROOT; ?>/nuevoEnlace"><?php __("nuevo_enlace"); ?></a>
				</div>
			</div>
		<?php } ?>
		
		<div class="row">
			<div class="col-md-12 bloqueEnlaces">
				<ul>
				<?php foreach($links as $enlace){ ?>
					<li id="enlace_<?php echo $enlace['id']; ?>">
						<p>
							<?php echo $enlace['texto']; ?>
							<?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){ ?>
								<a href="editEnlace?id=<?php echo $enlace['id']; ?>"><span class="glyphicon glyphicon-edit izqmarg20px"></span></a>
								<a href="#enlace_<?php echo $enlace['id']; ?>"><span class="glyphicon glyphicon-remove izqmarg20px"></span></a>
							<?php } ?></p>
						<p class="negrita">
							<span class="glyphicon glyphicon-user nocursor"></span> 
							<?php echo $enlace['nombre']; ?>, <span class="webEnlace"><?php echo $enlace['email']; ?></span>
						</p>
					</li>
				<?php }	?>
				</ul>
			
			</div>
		</div>

	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".glyphicon-remove").click(function(event){
			bootbox.confirm("&iquest; Est&aacute;s seguro de borrar este enlace ?", function(result) {
				if(result) {
					var icon = event.target;
					var li = $(icon).closest("li");
					var id = li.attr("id").replace("enlace_", ""); 
					window.location = "<?php echo PAGE_ROOT; ?>/deleteEnlace?id="+id;
				}
			}); 
		});
	});
</script>