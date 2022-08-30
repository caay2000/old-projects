<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.slides.min.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/additional-methods.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.notifyBar.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		/*$("#slides").slidesjs({
			width: 900,
			height: 300,
			play: {
			      interval: 6000,
			      auto: true,
			      pauseOnHover: true
			}
		});*/

		$('.envio').click(function(){
			$("form").validate({
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

		<?php if(isset($_GET['okt'])){ ?>
			$.notifyBar({ cssClass: "success", html: "<?php __('telf_enviado_ok'); ?>" });
		<?php } ?>
		
		<?php if(isset($_GET['kot'])){ ?>
			$.notifyBar({ cssClass: "error", html: "<?php __('telf_enviado_ko'); ?>" });
		<?php } ?>
	});
</script>


<div class="content_centro">
	<div class="container-fluid cabeza"> 
		<div class="row-fluid hidden-phone hidden-tablet" id="foto_slide">
			<div class="span12">
				<div class="row-fluid" >
					<div class="span12 camera_wrap" id="slider">
					    <div data-src="<?php echo MEDIA_PATH; ?>/images/paracaigudes_<?php __('lang'); ?>.jpg"></div>
					    <div data-src="<?php echo MEDIA_PATH; ?>/images/paisaje_<?php __('lang'); ?>.jpg"></div>
					    <div data-src="<?php echo MEDIA_PATH; ?>/images/persiana_<?php __('lang'); ?>.jpg"></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row-fluid" id="cajas">
			<div class="span12">
				<div class="row-fluid ">
					<div class="span12 cajas2">
						<div class="row-fluid">
							<div class="span4 caja">
								<div class="row-fluid">
									<div class="span12">
										<h1><?php __('index_box1_h1'); ?></h1>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<img src="<?php echo MEDIA_PATH; ?>/images/medalla_pc.png" alt="medalla" />
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<h3><?php __('index_box1_h3'); ?></h3>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<ul>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><span class="subr"><?php __('index_box1_li1'); ?></span></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box1_li2'); ?></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box1_li3'); ?></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box1_li4'); ?></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box1_li5'); ?></li>
										</ul>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<a class="enlace" href="<?php echo PAGE_ROOT; ?>/servicios#web"><?php __('index_box1_btn'); ?></a>
									</div>
								</div>
							</div>
							
							<div class="span4 caja">
								<div class="row-fluid">
									<div class="span12">
										<h1><?php __('index_box2_h1'); ?></h1>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<img src="<?php echo MEDIA_PATH; ?>/images/medalla_webapp.png" alt="medalla" width="100" height="130" />
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<h3><?php __('index_box2_h3'); ?></h3>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<ul>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><span class="subr"><?php __('index_box2_li1'); ?></span></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box2_li2'); ?></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box2_li3'); ?></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box2_li4'); ?></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box2_li5'); ?></li>
										</ul>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<a class="enlace" href="<?php echo PAGE_ROOT; ?>/servicios#web_plus"><?php __('index_box2_btn'); ?></a>
									</div>
								</div>
							</div>
							
							<div class="span4 caja">
								<div class="row-fluid">
									<div class="span12">
										<h1><?php __('index_box3_h1'); ?></h1>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<img src="<?php echo MEDIA_PATH; ?>/images/medalla_altres.png" alt="medalla" width="100" height="130" />
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<h3><?php __('index_box3_h3'); ?></h3>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<ul>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><span class="subr"><?php __('index_box3_li1'); ?></span></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box3_li2'); ?></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box3_li3'); ?></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box3_li4'); ?></li>
											<li><img src="<?php echo MEDIA_PATH; ?>/images/tic.png" alt="tic" width="15" height="15" /><?php __('index_box3_li5'); ?></li>
										</ul>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<a class="enlace" href="<?php echo PAGE_ROOT; ?>/servicios#altres_serveis"><?php __('index_box3_btn'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		
		<div class="row-fluid serviciosInicio">	
			<div class="span12">
				<div class="row-fluid">
				
					<div class="span6 servicio">
						<h4><?php __('index_quick1_h1'); ?></h4>
						<img src="<?php echo MEDIA_PATH; ?>/images/manos.png" alt="foto" width="253" height="100" />
						<p><?php __('index_quick1_p'); ?></p>
					</div>
					
					<div class="span6 servicio no">
						<h4><?php __('index_quick2_h1'); ?></h4>
						<img src="<?php echo MEDIA_PATH; ?>/images/publicita2.png" alt="foto" width="253" height="100" />
						<p><?php __('index_quick2_p'); ?></p>
					</div>

				</div>
			</div>
		</div>
		
	</div>
</div>

<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/camera.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.easing.1.3.js"></script>

<script>
	$(document).ready(function(){
		
		jQuery('#slider').camera({
			thumbnails: false,
			width: '900px',
			height: '300px',
			autoAdvance: true,
			navigation: false,
			playPause: false,
			fx: 'curtainTopLeft,curtainTopRight,curtainBottomLeft,curtainBottomRight,curtainSliceLeft,curtainSliceRight,blindCurtainTopLeft,blindCurtainTopRight,blindCurtainBottomLeft,blindCurtainBottomRight,blindCurtainSliceBottom,blindCurtainSliceTop'
		});
		
	});
</script>
