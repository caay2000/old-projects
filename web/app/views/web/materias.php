<div class="row">
	<div class="col-md-12 contenido">
		<div class="row materias">
		
			<div class="col-md-3 col-xs-6 col-sm-6 a col1">
				<div class="row">
					<div class="col-md-12 col2">
						<img src="<?php echo MEDIA_PATH; ?>/img/20.jpg" class="img-responsive fotos2"/>
						<h3><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;<?php __("serv_100");?></h3>
					</div>
					<div class="col-md-8 escondido">
						<p><?php __("serv_101");?></p>
						<p><?php __("serv_102");?></p>
						<p><?php __("serv_103");?></p>
						<p><?php __("serv_104");?></p>
						
						<span id="lista" class="mostrar"><?php __("serv_105");?></span>
						<ul class="oculto">
							<li><?php __("serv_106");?></li>
							<li><?php __("serv_107");?></li>
							<li><?php __("serv_108");?></li>
							<li><?php __("serv_109");?></li>
							<li><?php __("serv_110");?></li>
							<li><?php __("serv_111");?></li>
							<li><?php __("serv_112");?></li>
							<li><?php __("serv_113");?></li>
							<li><?php __("serv_114");?></li>
							<li><?php __("serv_115");?></li>
							<li><?php __("serv_116");?></li>
							<li><?php __("serv_117");?></li>
							<li><?php __("serv_118");?></li>
							<li><?php __("serv_119");?></li>
							<li><?php __("serv_120");?></li>
							<li><?php __("serv_121");?></li>
							<li><?php __("serv_122");?></li>
							<li><?php __("serv_123");?></li>
							<li><?php __("serv_124");?></li>
							<li><?php __("serv_125");?></li>
							<li><?php __("serv_126");?></li>
							<li><?php __("serv_127");?></li>
							<li><?php __("serv_128");?></li>
							<li><?php __("serv_129");?></li>						
						</ul>
						
						
					</div>
				</div>
			</div>
		
			<div class="col-md-3 col-xs-6 col-sm-6 a col1">
				<div class="row">
					<div class="col-md-12 col2">
						<img src="<?php echo MEDIA_PATH; ?>/img/4.jpg" class="img-responsive fotos2"/>
						<h3><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;<?php __("serv_200");?></h3>
					</div>
					<div class="col-md-8 escondido">
						<p><?php __("serv_201");?></p>
						<p><?php __("serv_202");?></p>
						<p><?php __("serv_203");?></p>
						<p><?php __("serv_204");?></p>
						<p><?php __("serv_205");?></p>
						<p><?php __("serv_206");?></p>
						<p><?php __("serv_207");?></p>
						<p><?php __("serv_208");?></p>
						<p><?php __("serv_209");?></p>
						<p><?php __("serv_210");?></p>
						<p><?php __("serv_211");?></p>
						<p><?php __("serv_212");?></p>
						<p><?php __("serv_213");?></p>
						<p><?php __("serv_214");?></p>
						<p><?php __("serv_215");?></p>
						<p><?php __("serv_216");?></p>
						<p><?php __("serv_217");?></p>
						<p><?php __("serv_218");?></p>
						<p><?php __("serv_219");?></p>
						<p><?php __("serv_220");?></p>
						<p><?php __("serv_221");?></p>
						<p><?php __("serv_222");?></p>
						<p><?php __("serv_223");?></p>
						<p><?php __("serv_224");?></p>
						<p><?php __("serv_225");?></p>
					</div>
				</div>
			
			</div>
		
			<div class="col-md-3 col-xs-6 col-sm-6 a col1">
				<div class="row">
					<div class="col-md-12 col2">
						<img src="<?php echo MEDIA_PATH; ?>/img/6.jpg" class="img-responsive fotos2"/>
						<h3><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;<?php __("serv_600");?></h3>
					</div>
					<div class="col-md-8 escondido">
						<p><?php __("serv_601");?></p>
						<p><?php __("serv_602");?></p>
						<p><?php __("serv_603");?></p>
						<p><?php __("serv_604");?></p>
						<p><?php __("serv_605");?></p>
						<p><?php __("serv_606");?></p>
						<p><?php __("serv_607");?></p>
						<p><?php __("serv_608");?></p>
						<p><?php __("serv_609");?></p>
						<p><?php __("serv_610");?></p>
						<p><?php __("serv_611");?></p>
						<p><?php __("serv_612");?></p>
					</div>
				</div>
			
			</div>
		
			<div class="col-md-3 col-xs-6 col-sm-6 a">
				<div class="row">
					<div class="col-md-12">
						<img src="<?php echo MEDIA_PATH; ?>/img/9b.jpg" class="img-responsive fotos2"/>
						<h3><?php __("serv_500");?> , <?php __("serv_300");?> Y <?php __("serv_400");?></h3>
					</div>
				</div>
			</div>
			
		</div>
			
	</div>
</div>


<script type="text/javascript">

$(document).ready(function(){	
	
		$('.oculto').hide(); 
		$('#lista').click(function(){
			$('.mostrar').toggleClass('ocultar');
			if($(this).hasClass('ocultar')){
				$(this).html('Ocultar materias');
				$('.oculto').fadeIn('slow'); 
			}
			else{
				$(this).html('Mostrar materias');
				$('.oculto').fadeOut('slow'); 
			}
		});
	
		$('span.glyphicon-plus-sign, img.fotos2').click(function(){

			$(this).toggleClass('glyphicon-minus-sign');	
			var bloque = $(this).closest('.col1');
			var bloque2 = $(bloque).find('.col2');
			var escondido = $(bloque).find('.escondido');
			
			if($(bloque).hasClass('a')){
				$(bloque).toggleClass('col-md-4 col-md-12 col-xs-6 col-sm-6');
				$(bloque2).toggleClass('col-md-12 col-md-4');
				
				$(bloque).removeClass('a').addClass('b');
				$(this).closest('.materias').find('.a').hide();	
				$(escondido).css("display", "block");
			}
			else{
				$(escondido).css("display", "none");
				$(bloque).toggleClass('col-md-12 col-md-4 col-xs-6 col-sm-6');
				$(bloque2).toggleClass('col-md-4 col-md-12');
				
				$(bloque).removeClass('b').addClass('a');
				$(this).closest('.materias').find('.a').show();
			}

		});

});
	            
</script>

