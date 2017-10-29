<!DOCTYPE html>
<html lang="<?php __('lang'); ?>">
	<head>
		<title><?php __("index_tittle"); ?></title>
	
		<meta charset="UTF-8">
		<meta name="keywords" content="<?php __("meta_keywords"); ?>" />
		<meta name="description" content="<?php __("meta_description"); ?>" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo MEDIA_PATH; ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo MEDIA_PATH; ?>/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo MEDIA_PATH; ?>/css/web.css" />
        
        <script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.slides.min.js"></script>
        <script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/bootbox.min.js"></script>
		<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row" >
				<div class="col-md-12">
				
					<div class="row cabecera" >
						<div class="row">
							<div class="col-md-1 col-sm-2 col-xs-2">
								<img src="<?php echo MEDIA_PATH; ?>/img/logo_mm2.png" class="img-responsive"/>
							</div>
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h1><?php __("index_tittle"); ?></h1>
							</div>
							<div class="col-md-1 col-sm-1 col-xs-1" id="idiomas">
		                		<a href="?lang=ca" style="background:url('<?php echo MEDIA_PATH; ?>/img/langs.png') 0 0"></a><br/>
								<a href="?lang=es" style="background:url('<?php echo MEDIA_PATH; ?>/img/langs.png') -24px 0"></a>
		                	</div>
						</div>
						
						<div class="row hidden-phone hidden-tablet mi_carousel">
							<div class="carousel slide" id="myCarousel">
								<div class="carousel-inner">
							  
							      	<div class="row item active">
							      		<div class="col-md-5 col-sm-4 col-xs-3">
							      			<img src="<?php echo MEDIA_PATH; ?>/img/6.jpg" alt="foto">
							      		</div>
							      		<div class="col-md-7 col-sm-8 col-xs-9">
							      			<h4 class="titulslider"><?php __("home_dato_1");?></h4>
							      		</div>
							    	</div>
							    	
							    	<div class="row item">
							      		<div class="col-md-5 col-sm-4 col-xs-3">
							      			<img src="<?php echo MEDIA_PATH; ?>/img/4.jpg" alt="foto">
							      		</div>
							      		<div class="col-md-7 col-sm-8 col-xs-9">
							      			<h4 class="titulslider"><?php __("home_dato_2");?></h4>	
							      		</div>
							    	</div>
							    	
							    	<div class="row item">
							      		<div class="col-md-5 col-sm-4 col-xs-3">
							      			<img src="<?php echo MEDIA_PATH; ?>/img/9b.jpg" alt="foto">
							      		</div>
							      		<div class="col-md-7 col-sm-8 col-xs-9">
							      			<h4 class="titulslider"><?php __("home_dato_3");?></h4>
							      		</div>
							    	</div>
									    

							  </div>
							
							  <!-- Controls -->
							  <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
							  <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
							</div>
						</div>
					
						<div class="row">
					    	<div class="col-md-12">
								<nav class="nav nav__primary">
									<ul id="menuPrincipal">
										<li <?php if($page === 'index') echo 'class="active"'; ?>>
											<a href="<?php echo PAGE_ROOT; ?>/index"><?php __("index_menu_pre"); ?></a>
										</li>
										<li <?php if($page === 'materias') echo 'class="active"'; ?>>
											<a href="<?php echo PAGE_ROOT; ?>/materias"><?php __("index_menu_ser"); ?></a>
										</li>
										<li <?php if($page === 'abogados') echo 'class="active"'; ?>>
											<a href="<?php echo PAGE_ROOT; ?>/abogados"><?php __("index_menu_qui"); ?></a>
										</li>
										<li <?php if($page === 'actualidades') echo 'class="active"'; ?>>
											<a href="<?php echo PAGE_ROOT; ?>/actualidades"><?php __("index_menu_act"); ?></a>
										</li>
										<li <?php if($page === 'enlaces') echo 'class="active"'; ?>>
											<a href="<?php echo PAGE_ROOT; ?>/enlaces"><?php __("index_menu_lin"); ?></a>
										</li>
										<li <?php if($page === 'contacto') echo 'class="active"'; ?>>
											<a href="<?php echo PAGE_ROOT; ?>/contacto"><?php __("index_menu_con"); ?></a>
										</li>
									</ul>
								</nav>			    
							</div>
						</div>
					</div>
					
					<?php echo $view; ?>
					
					
					<div class="row">
						<div class="col-md-12 pie">
							<div class="row">
								<div class="col-md-4">
								<img src="<?php echo MEDIA_PATH; ?>/img/telf_ico.png" width="20" height="20" />
									<span><?php __("telefon"); ?> <span>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<?php __("powered");?> </span><a href="http://www.kiwibcn.com"><?php __("kiwi");?></a></span>
								</div>
								<div class="col-md-6">
									<span><?php __("direccio_1"); ?>, <?php __("direccio_2"); ?></span>
								</div>
								<div class="col-md-2">
<!--									<span class="glyphicon glyphicon-cog"></span>-->
<!--									--><?php //
//										if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){ ?>
<!--											<a href="--><?php //echo PAGE_ROOT;?><!--/logout">--><?php //__("logout");?><!--</a>-->
<!--									--><?php //} else{ ?>
<!--											<a href="--><?php //echo PAGE_ROOT;?><!--/login">--><?php //__("login");?><!--</a>-->
<!--									--><?php //}?>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</body>



<script>
	$(document).ready(function(){
		
		$('.carousel').carousel({
			  interval: 4000,
		});
		
	});
</script>

		
<!-- Google Analytics -->
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-9486467-11']);
	_gaq.push(['_trackPageview']);
	
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>


</html>