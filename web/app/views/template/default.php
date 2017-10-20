<!DOCTYPE html>
<html lang="<?php __('lang'); ?>">
    <head>
    	<link rel="shortcut icon" href="<?php echo MEDIA_PATH; ?>/images/favicon.ico" />
    
    	<title><?php __('meta_title'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="<?php __('meta_keywords'); ?>" />
		<meta name="description" content="<?php __('meta_description'); ?>" />
		
        <link type="text/css" href="<?php echo MEDIA_PATH; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    	<link type="text/css" href="<?php echo MEDIA_PATH; ?>/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="<?php echo MEDIA_PATH; ?>/css/slides.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="<?php echo MEDIA_PATH; ?>/css/jquery.notifyBar.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="<?php echo MEDIA_PATH; ?>/css/camera.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="<?php echo MEDIA_PATH; ?>/css/web.css" rel="stylesheet" media="screen" />
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    	<script src="<?php echo MEDIA_PATH; ?>/js/jquery.cookiecuttr.js"></script>
    	<script src="<?php echo MEDIA_PATH; ?>/js/jquery.cookie.js"></script>
    </head>
    <body>

        <div class="fondo">
			<div class="cabecera_centro">
				<div class="container-fluid cabeza"> 
		            <div class="row-fluid">
		            	<div class="span12 barra">
		                	<div id="idiomas">
		                		<a href="?lang=ca" style="background:url('<?php echo MEDIA_PATH; ?>/images/langs.png') 0 0"></a>
								<a href="?lang=es" style="background:url('<?php echo MEDIA_PATH; ?>/images/langs.png') -24px 0"></a>
		                	</div>
			        	 </div>
		            </div>
		            <div class="row-fluid hidden-phone">
		            	<div class="span12" id="logo_div">
		                	<a id="logo" href="<?php echo PAGE_ROOT; ?>/">
		                    	<img src="<?php echo MEDIA_PATH; ?>/images/logo_banner_700x188.png" alt="logo" width="700" height="188"/>
		                    </a>
		                 </div>
		            </div> 
		             <div class="row-fluid visible-phone">
		            	<div class="span12 logopetit">
		                	<a href="<?php echo PAGE_ROOT; ?>/">
		                    	<img src="<?php echo MEDIA_PATH; ?>/images/logo_text_130x130.png" alt="logo" width="130" height="130"/>
		                    </a>
		                 </div>
		            </div> 
		            
		            <div class="row-fluid hidden-phone">
		            	<div class="span12 menu"> 
	                        <ul class="nav nav-tabs">
	                            <li <?php if($page === 'index') echo 'class="active"'; ?>>
	                            	<a href="<?php echo PAGE_ROOT; ?>/index" ><?php __('menu_index'); ?></a>
	                            </li>
	                            <li <?php if($page === 'servicios') echo 'class="active"'; ?>>
	                            	<a href="<?php echo PAGE_ROOT; ?>/servicios"><?php __('menu_serveis'); ?></a>
	                            </li>
	                            <li <?php if($page === 'proyectos') echo 'class="active"'; ?>>
	                            	<a href="<?php echo PAGE_ROOT; ?>/proyectos"><?php __('menu_projectes'); ?></a>
	                            </li>
	                            <li <?php if($page === 'contacto') echo 'class="active"'; ?>>
	                            	<a href="<?php echo PAGE_ROOT; ?>/contacto"><?php __('menu_contacte'); ?></a>
	                            </li>
	                        </ul>
		            	</div>
		            </div>  
		            
		            <div class="row-fluid menumv visible-phone">
		            	<div class="span12 menu"> 
		            		<ul>
				            	<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
								  <ul class="dropdown-menu">
								    <li><a href="<?php echo PAGE_ROOT; ?>/index" ><?php __('menu_index'); ?></a></li>
								    <li><a href="<?php echo PAGE_ROOT; ?>/servicios"><?php __('menu_serveis'); ?></a></li>
								    <li><a href="<?php echo PAGE_ROOT; ?>/proyectos"><?php __('menu_projectes'); ?></a></li>
								   	<li><a href="<?php echo PAGE_ROOT; ?>/contacto"><?php __('menu_contacte'); ?></a></li>
								  </ul>
							   </li>
							</ul>
						</div>
					</div>
				</div>
			</div> 
        </div> 
        
         
        <div class="contenido">
			<?php echo $view; ?>
        </div>

        <div class="fondo">
            <div class="pie_centro">
            	<div class="container-fluid pie"> 
		            <div class="row-fluid finales">
		            	<div class="span12">
		            		<div class="row-fluid hidden-phone">
				            	<div class="span3 final">
			                        <h3><?php __('menu_serveis'); ?></h3>
			                        <ul>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/servicios#web"><?php __('peu_link_serveis_1'); ?></a></li>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/servicios#web"><?php __('peu_link_serveis_2'); ?></a></li>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/servicios#web_plus"><?php __('peu_link_serveis_3'); ?></a></li>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/servicios#web_plus"><?php __('peu_link_serveis_4'); ?></a></li>
			                        </ul>
								</div>
								<div class="span3 final">
			                        <h3><?php __('menu_serveis'); ?></h3>
			                        <ul>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/servicios#web_plus"><?php __('peu_link_serveis_5'); ?></a></li>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/servicios#altres_serveis"><?php __('peu_link_serveis_6'); ?></a></li>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/servicios#altres_serveis"><?php __('peu_link_serveis_7'); ?></a></li>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/servicios#altres_serveis"><?php __('peu_link_serveis_8'); ?></a></li>
			                        </ul>
					            </div>
					            <div class="span3 final">
			                        <h3><?php __('menu_contacte'); ?></h3>
			                        <ul>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/contacto"><?php __('peu_link_contacte_1'); ?></a></li>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/contacto"><?php __('peu_link_contacte_2'); ?></a></li>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/legal"><?php __('peu_link_contacte_3'); ?></a></li>
			                            <li><a class="lis" href="<?php echo PAGE_ROOT; ?>/sitemap"><?php __('peu_link_contacte_4'); ?></a></li>
			                        </ul>
					            </div>
				
			                    <div class="span3 final">
			                        <a href="<?php echo PAGE_ROOT; ?>/"><img src="<?php echo MEDIA_PATH; ?>/images/logo_text_130x130.png" alt="logo" width="130" height="130"/></a><br>
			                        <p><?php __('mail_contact_1'); ?><img class="arroba" src="<?php echo MEDIA_PATH; ?>/images/arroba.png" alt="arroba" width="14" height="14"/><?php __('mail_contact_2'); ?></p>
			                        <p><?php __('kiwibcn_telf'); ?></p>
			                    </div>
					            
					            
							</div>
							<div class="row-fluid hidden-phone">
								<div class="span12 copyright_div">
									<h2 id="copyright"><?php __('peu_link_copyright'); ?>&nbsp;<a href="<?php echo PAGE_ROOT; ?>/cookies"><?php __('ley_cookies_privacidad'); ?></a></h2>
								</div>
							</div>
							<div class="row-fluid visible-phone">
				            	<div class="span12 copyright2_div">
				            		<h2 id="copyrightpie"><span><?php __('peu_link_copyright2'); ?></span><a href="<?php echo PAGE_ROOT; ?>/"><img src="<?php echo MEDIA_PATH; ?>/images/logokiwi2.png" alt="logo" width="100" height="100"/></a><br></h2>
				            	</div>
				            </div>
						</div>	
					</div>
				</div>

            </div>
        </div>
        <script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/bootstrap.min.js"></script>
        
	<script>
		$(document).ready(function () {
			$.cookieCuttr({
				cookieAnalyticsMessage: "<?php __('ley_cookies_1'); ?>",
				cookieWhatAreTheyLink: "<?php echo PAGE_ROOT; ?>/cookies",
				cookieWhatAreLinkText: "<?php __('ley_cookies_privacidad'); ?>",
				cookieDomain: "http://www.kiwibcn.com/"
			});
		}); 
		
		if (jQuery.cookie('cc_cookie_accept') == "cc_cookie_accept") {
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				
				  ga('create', 'UA-9486467-12', 'kiwibcn.com');
				  ga('send', 'pageview');
		}
	</script>
    </body>
 </html>