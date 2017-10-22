<!DOCTYPE html>
<html>
	<head>
		<title><?php __("index_tittle"); ?></title>
	
		<meta name="keywords" content="<?php __("meta_keywords"); ?>" />
		<meta name="description" content="<?php __("meta_description"); ?>" />
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    	<!-- Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="<?php echo MEDIA_PATH; ?>/css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="<?php echo MEDIA_PATH; ?>/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo MEDIA_PATH; ?>/css/web.css" />
        
        <script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/bootstrap.min.js"></script>
    	
    	<script src="<?php echo MEDIA_PATH; ?>/js/jquery.cookiecuttr.js"></script>
    	<script src="<?php echo MEDIA_PATH; ?>/js/jquery.cookie.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row locale">
				<div class="col-xs-2 lang">
					<a href="?lang=es" class="<?php if($_SESSION['lang'] == "es") echo "active"; ?>">ES</a>
				</div>
				<div class="col-xs-2 lang">
					<a href="?lang=ca" class="<?php if($_SESSION['lang'] == "ca") echo "active"; ?>">CA</a>
				</div>
			</div>
	
			<div class="row menuxs hidden-md hidden-lg">
				<div class="col-xs-offset-1 col-xs-3 col-sm-offset-2 col-sm-3">
					<div class="row">
						<div class="col-xs-12 item">
							<a href="<?php echo PAGE_ROOT;?>/index" <?php if($page == "index") echo 'class="active"'?>><?php __('inicio'); ?></a>
						</div>
						<div class="col-xs-12 item">
							<a href="<?php echo PAGE_ROOT;?>/identidad" <?php if($page == "identidad") echo 'class="active"'?>><?php __('identidad'); ?></a>
						</div>
						<div class="col-xs-12 item">
							<a href="<?php echo PAGE_ROOT;?>/prensa" <?php if($page == "prensa") echo 'class="active"'?>><?php __('prensa'); ?></a>
						</div>
					</div>
				</div>
				
				<div class="col-xs-4 col-sm-2">
					<div class="col-xs-12 item">
						<a class="link-logo" href="<?php echo PAGE_ROOT;?>/index">
							<img id="logo_green_competence" style="max-height:90px; max-width: 90px;" src="<?php echo MEDIA_PATH;?>/img/logo.png"  alt="logo"/>
						</a>
					</div>
				</div>

				<div class="col-xs-3 col-sm-3">
					<div class="row">
						<div class="col-xs-12 item">
							<a href="<?php echo PAGE_ROOT;?>/contacto" <?php if($page == "contacto") echo 'class="active"'?>><?php __('contacto'); ?></a>
						</div>
						<div class="col-xs-12 item">
							<a href="http://actualidadsostenible.wordpress.com/category/dossiers-informativos/" target="_blank"><?php __('blog'); ?></a>
						</div>
						<div class="col-xs-12 item">
							<a href="#" target="_blank">
								<img src="<?php echo MEDIA_PATH;?>/img/logo_facebook_circle.png" width="32" height="32" alt="logo"/>
							</a>
							<a href="https://www.instagram.com/mar.mulero/" target="_blank">
								<img src="<?php echo MEDIA_PATH;?>/img/logo_instagram_circle.png" width="32" height="32" alt="logo"/>
							</a>
							<a href="https://www.linkedin.com/in/mar-mulero-martinez-55692a55/" target="_blank">
								<img src="<?php echo MEDIA_PATH;?>/img/logo_linkedin_circle.png" width="32" height="32" alt="logo"/>
							</a>
						</div>
					</div>
				</div>
			
			</div>

			<div class="row menu hidden-xs hidden-sm">
	
				<div class="row menu">
					<div class="col-md-offset-1 col-md-10">
						<div class="row">
							<div class="col-md-5">
								<div class="row">
									<div class="col-md-4 item">
										<a href="<?php echo PAGE_ROOT;?>/index" <?php if($page == "index") echo 'class="active"'?>><?php __('inicio'); ?></a>
									</div>
									<div class="col-md-4 item">
										<a href="<?php echo PAGE_ROOT;?>/identidad" <?php if($page == "identidad") echo 'class="active"'?>><?php __('identidad'); ?></a>
									</div>
									<div class="col-md-4 item">
										<a href="<?php echo PAGE_ROOT;?>/prensa" <?php if($page == "prensa") echo 'class="active"'?>><?php __('prensa'); ?></a>
									</div>
								</div>
							</div>
							<div class="col-md-2 item">
								<a href="<?php echo PAGE_ROOT;?>/index">
									<img id="logo_green_competence" src="<?php echo MEDIA_PATH;?>/img/logo.png"  alt="logo"/>
								</a>
							</div>
							<div class="col-md-5">
								<div class="row">
									<div class="col-md-4 item">
										<a href="<?php echo PAGE_ROOT;?>/contacto" <?php if($page == "contacto") echo 'class="active"'?>><?php __('contacto'); ?></a>
									</div>
									<div class="col-md-4 item">
										<a href="http://actualidadsostenible.wordpress.com/category/dossiers-informativos/" target="_blank"><?php __('blog'); ?></a>
									</div>
									<div class="col-md-4 item">
										<a href="#" target="_blank">
											<img src="<?php echo MEDIA_PATH;?>/img/logo_facebook_circle.png" width="32" height="32" alt="logo"/>
										</a>
										<a href="https://www.instagram.com/mar.mulero/" target="_blank">
											<img src="<?php echo MEDIA_PATH;?>/img/logo_instagram_circle.png" width="32" height="32" alt="logo"/>
										</a>
										<a href="https://www.linkedin.com/in/mar-mulero-martinez-55692a55/" target="_blank">
											<img src="<?php echo MEDIA_PATH;?>/img/logo_linkedin_circle.png" width="32" height="32" alt="logo"/>
										</a>
									</div>
								</div>
							</div>
						</div>		
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-12 contenido">
					<?php echo $view; ?>	
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-12" id="pie">
					<p>@2013,&nbsp;<a href="http://www.kiwibcn.com" target="_blank">kiwibcn.com</a>&nbsp;<?php __('drets'); ?>&nbsp;<a href="<?php echo PAGE_ROOT; ?>/cookies" target="_blank"><?php __('ley_cookies_privacidad'); ?></a></p>
				</div>
			</div>
		</div>
		
	</body>
	
		<script>
		$(document).ready(function () {
			$.cookieCuttr({
				cookieAnalyticsMessage: "<?php __('ley_cookies_1'); ?>",
				cookieWhatAreTheyLink: "<?php echo PAGE_ROOT; ?>/cookies",
				cookieWhatAreLinkText: "<?php __('ley_cookies_privacidad'); ?>",
				cookieDomain: "http://www.green-competence.com/"
			});
		}); 
		
		if (jQuery.cookie('cc_cookie_accept') == "cc_cookie_accept") {
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-9486467-13', 'green-competence.com');
				  ga('send', 'pageview');
		}
	</script>
	
</html>
