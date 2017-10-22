<div id="cv-modal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Mar Mulero</h4>
			</div>
			<div class="modal-body">
				<h2>Trayectoria Profesional</h2>
			</div>
			<div class="modal-footer">
				<a id="cv-pdf" href="<?php echo MEDIA_PATH; ?>/img/CV-2017-mar-mulero.pdf" target="_blank"><button type="button" class="btn btn-success">Descargar PDF</button></a>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-12 degradat">
		<div class="row">
			<div class="col-xs-12 col-md-12 pdg40">
				<div class="row">
					<div class="col-xs-5 col-md-5">
						<img class="img-responsive" src="<?php echo MEDIA_PATH; ?>/img/identidad_composicion.png" />
					</div>
					<div class="col-xs-7 col-md-7">
						<div class="row">
							<div class="col-xs-offset-1 col-xs-11 col-md-offset-1 col-md-11 textidenti">
								<p><?php __('identi_p1'); ?></p>
								<p><?php __('identi_p2'); ?></p>
								<p><?php __('identi_p3'); ?></p>
								<p><?php __('identi_p4'); ?></p>
								<p><?php __('identi_p5'); ?></p>
								<p><?php __('identi_p6'); ?></p>
								<p>
									<?php __('identi_p7'); ?>
									<a id="cv" class="linkoscuro" href="#"><?php __('identi_p8'); ?></a>
									<?php __('identi_p9'); ?>
									<a class="linkoscuro" href="<?php echo PAGE_ROOT;?>/index"><?php __('identi_p10'); ?></a>
									<?php __('identi_p11'); ?>
								</p>
								<img class="firma img-responsive" alt="Mar Mulero" src="<?php echo MEDIA_PATH;?>/img/firma460.png">
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click', '#cv', function(){
			$("#cv-modal").modal('show');
		});
		$('#cv-pdf').on("click", function(){
			$("#cv-modal").modal('hide'); 
		});
	});
</script>	