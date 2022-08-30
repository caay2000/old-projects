<link rel="stylesheet" type="text/css" href="<?php echo MEDIA_PATH; ?>/css/jquery.notifyBar.css"/>

<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/additional-methods.js"></script>
<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.notifyBar.js"></script>
        
        <script type="text/javascript">
        
            $(document).ready(function(){	
				$('.escondido').hide();
                   
				$('button.leermas').click(function(){
    				var boton = $(this).closest('.der');
					$(boton).find('.escondido').slideToggle('slow');
					if($(this).hasClass('desplegado')) $(this).html('<?php __("pedir_info"); ?>');
					else $(this).html("<?php __('ocultar'); ?>");
                   	$(this).toggleClass('desplegado');
				});

				
				$('form').each(function(){
					$(this).validate({
						rules: {
							nom: {required:true},
							email: {email2:true, required:true},
							info: {required:true}
						},
						messages: {
							nom: { required: "<?php __('required'); ?>" },
							email: { required: "<?php __('required'); ?>", email: "<?php __('email'); ?>" },
							info: { required: "<?php __('required'); ?>" }
						}					
					})
				});	

				$('button.envio').click(function(){
					var form = $(this).closest(".der").find("form");
					if(form.valid()) form.submit();
				});

				<?php if(isset($_GET['okm'])){ ?>
					$.notifyBar({ cssClass: "success", html: "<?php __('mail_enviado_ok'); ?>" });
				<?php } ?>
				
				<?php if(isset($_GET['kom'])){ ?>
					$.notifyBar({ cssClass: "error", html: "<?php __('mail_enviado_ko'); ?>" });
				<?php } ?>
					
            });
            
        </script>
        
<div class="content_centro">
	<div class="container-fluid servicios"> 
	
		<div class="clear"></div>
		
		<div class="row-fluid">
			<div class="span12" id="web">      
                <div class="row-fluid">
                    <div class="span4 izq">
	                    <div class="row-fluid">
		                    <div class="span12">
		                        <img src="<?php echo MEDIA_PATH;?>/images/medalla_pc.png" alt="lapiz" width="100" height="130" />
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
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span class="subr"><?php __('index_box1_li1'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box1_li2'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box1_li3'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box1_li4'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box1_li5'); ?></span></li>
		                        </ul>
	                    	</div>
	                    </div>
                    </div>
                    
                    <div class="span8 der">
                        <p><?php __('servicio_box1_p1'); ?><?php __('servicio_box1_p2'); ?></p>
                        <h3><?php __('servicio_box1_h3'); ?></h3>
                        <ul>
                        	<li><span class="llista"><?php __('servicio_box1_li1'); ?></span></li>
                        	<li><span class="llista"><?php __('servicio_box1_li2'); ?></span></li>
                        	<li><span class="llista"><?php __('servicio_box1_li3'); ?></span></li>
                        	<li><span class="llista"><?php __('servicio_box1_li4'); ?></span></li>
                        </ul>
                        <p><?php __('servicio_box1_p3'); ?><span><?php __('servicio_box1_span'); ?></span><?php __('servicio_box1_p4'); ?></p>
                        <p><?php __('servicio_box1_p5'); ?></p>
                    </div>
                 </div>
             </div>
		</div>       
               
        <div class="clear"></div>      
                
		<div class="row-fluid">
			<div class="span12" id="web_plus">
				<div class="row-fluid">
                    <div class="span4 izq">
                		<div class="row-fluid">
	                    	<div class="span12">
		                        <img src="<?php echo MEDIA_PATH;?>/images/medalla_webapp.png" alt="lapiz" width="100" height="130" />
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
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span class="subr"><?php __('index_box2_li1'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box2_li2'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box2_li3'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box2_li4'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box2_li5'); ?></span></li>
		                        </ul>
		                    </div>
                		</div>
                    </div>
                    <div class="span8 der">
                        <p><?php __('servicio_box2_p1'); ?></p>
                        <p><?php __('servicio_box2_p2'); ?><span><?php __('servicio_box2_span1'); ?></span><?php __('servicio_box2_p3'); ?></p>
                        <p><?php __('servicio_box2_p4'); ?><span><?php __('servicio_box2_span2'); ?></span><?php __('servicio_box2_p5'); ?></p>
                        <h3><?php __('servicio_box2_h3'); ?></h3>
                        <p><?php __('servicio_box2_p6'); ?></p>

                   </div>
            	</div> 
            </div>    
		</div>
          
        <div class="clear"></div> 
                   
		<div class="row-fluid">
			<div class="span12" id="altres_serveis">    
				<div class="row-fluid">
                    <div class="span4 izq"> 
	                    <div class="row-fluid">
		                	<div class="span12">
	                        	<img src="<?php echo MEDIA_PATH;?>/images/medalla_altres.png" alt="lapiz" width="100" height="130" />
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
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span class="subr"><?php __('index_box3_li1'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box3_li2'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box3_li3'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box3_li4'); ?></span></li>
		                            <li><img src="<?php echo MEDIA_PATH;?>/images/tic.png"/><span><?php __('index_box3_li5'); ?></span></li>
		                        </ul>
	                        </div>
	            		</div> 
                    </div>
                    <div class="span8 der"> 
                        <p><?php __('servicio_box3_p1'); ?></p>
                        <p><?php __('servicio_box3_p2'); ?><span><?php __('servicio_box3_span1'); ?></span><?php __('servicio_box3_p3'); ?></p>
                        <p><?php __('servicio_box3_p4'); ?><span><?php __('servicio_box3_span2'); ?></span><?php __('servicio_box3_p5'); ?></p>
                        <p><?php __('servicio_box3_p6'); ?></p>

                    </div>
                </div>
        	</div>    
		</div>

        <div class="clear"></div>

	</div>
</div>