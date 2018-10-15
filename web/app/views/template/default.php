<!DOCTYPE html>
<html>

	<head>
		<link rel="shortcut icon" href="<?php echo MEDIA_PATH; ?>/img/favicon2.ico" />
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		<meta name="keywords" content="<?php __('meta_keywords'); ?>" />
		<meta name="description" content="<?php __('meta_description'); ?>" />
	 	
	 	<link rel="shortcut icon" href="<?php echo MEDIA_PATH; ?>/images/favicon.ico" />
	 	
		<link href="<?php echo MEDIA_PATH; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<link href="<?php echo MEDIA_PATH; ?>/css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" media="screen">
    	<link href="<?php echo MEDIA_PATH; ?>/css/web.css" rel="stylesheet" media="screen">
    	
    	<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery-1.10.2.min.js"></script>
    	<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
    	<script type="text/javascript" charset="utf-8" src="<?php echo MEDIA_PATH; ?>/js/jquery-ui-1.10.3.datepicker_<?php __('lang'); ?>.js"></script>
    	<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/bootstrap.min.js"></script>
    	
    	<title><?php __('tittle'); ?></title>
	</head>
	
	<body>
		<div class="degradado">
			<div class="centroPage">
				<div class="cabecera">
					<div class="container-fluid cabeza">
						<div class="row-fluid">
							<div class="span5 offset4">							
								<a href="<?php echo PAGE_ROOT; ?>"><img id="logo" src="<?php echo MEDIA_PATH; ?>/img/logo.png" alt="logo"/></a>
							</div>
							<div class="span3 flota_derecha">
								<a class="spaciado_banderas" href="?lang=fr"><img src="<?php echo MEDIA_PATH; ?>/img/fr.jpg" alt="fr"/></a>
								<a class="spaciado_banderas" href="?lang=it"><img src="<?php echo MEDIA_PATH; ?>/img/it.gif" alt="it"/></a>
								<a class="spaciado_banderas" href="?lang=en"><img src="<?php echo MEDIA_PATH; ?>/img/en.jpg" alt="en"/></a>
								<a class="spaciado_banderas" href="?lang=es"><img src="<?php echo MEDIA_PATH; ?>/img/es.gif" alt="es"/></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="contenido">
					<?php echo $view; ?>
				</div>
				
				<div class="pie">
					<div class="container-fluid cabeza">
						<div class="clear"></div>
						<div class="row-fluid">
						
							<div class="span4">
								<span><?php __('peu_span1'); ?></span>			
								
								<a href="<?php echo PAGE_ROOT; ?>/login"><?php __('administrador'); ?></a>	
							</div>
							<div class="span3 offset1">
								<a href="<?php echo PAGE_ROOT; ?>"><img id="logoapt" src="<?php echo MEDIA_PATH; ?>/img/logoapt.png" alt="logoapt" /></a>
							</div>
							<div class="span2 offset2">
								<span>Todos los derechos reservados a</span>
								<div class="row-fluid">
									<div class="span7 offset2">
										<a target="_blank" href="http://kiwibcn.com"><img id="logokiwi" src="<?php echo MEDIA_PATH; ?>/img/logokiwi2.png" alt="logokiwi" /></a>	
									</div>
								</div>				
							</div>
							 
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</body>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-9486467-6']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</html>