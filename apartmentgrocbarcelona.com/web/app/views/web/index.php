<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#aplica').click(function(){
			$("form#filtro").validate({
				rules: {
					from: {required:true},
					to: {required:true},
					num_pax: {required:true},
				},
				messages: {
					from: {required: "<?php __('required'); ?>"},
					to: {required: "<?php __('required'); ?>"},
					num_pax: {required: "<?php __('required'); ?>"},
				}
			});	
		});	

		$('#submit_filtro').click(function(){
			$('#filtro').submit();
		});

		$( "#from" ).datepicker({
		  	firstDay: 1,
		  	dateFormat: "DD, dd/mm/yy",
		    numberOfMonths: 2,
		    minDate: 0,
		    onClose: function( selectedDate ) {
		    	$( "#to" ).attr("disabled", false);
				$( "#to" ).datepicker( "option", "minDate", selectedDate );
		    }
		});
		  
		$( "#to" ).datepicker({
		    firstDay: 1,
		    dateFormat: "DD, dd/mm/yy",
		    numberOfMonths: 2,
		    minDate: 0,
		    onClose: function( selectedDate ) {
		     	$( "#from" ).datepicker( "option", "maxDate", selectedDate );
		    }
		});
		
	  });
</script>

<div class="container-fluid medidasContingut">
	
	<div class="row-fluid buskeda">
		<div class="span12">
			<form id="filtro" class="form-inline" method="POST" action="">
				<div class="row-fluid">
				
					<div class="span4">
						<div class="row-fluid">
							<label class="span4" for="from"><?php __('fechaentrada');?></label>
							<div class="span8 input-append date fecha">
								<div class="row-fluid diventrada">
									
									<label for="from" class="span3 campo_entra">
										<span id="from_cal" class="add-on"><i class="icon-calendar"></i></span>
									</label>
									<input class="span9" id="from" name="from" size="16" type="text"/>	
								</div>
						  	</div>
					  	</div>
					</div>
					
					<div class="span4">
						<div class="row-fluid">
							<label class="span4" for="to"><?php __('fechasalida');?></label>
							<div class="span8 input-append date fecha">
								<div class="row-fluid diventrada">
									<label for="to" class="span3 campo_sal">
										<span id="to_cal" class="add-on"><i class="icon-calendar"></i></span>
									</label>
									<input class="span9" id="to" name="to" size="16" type="text" disabled="disabled"/>
								</div>
						  	</div>
						  </div>
					</div>
	
					<div class="span3 numpersonas">
						<div class="row-fluid">
							<label  class="span5" for="num_pax"><?php __('numpersona');?></label>
							<select class="span5 form-control" name="num_pax">
								<option value="0"></option>
								<option value="2"><?php __('dos')?></option>
								<option value="3"><?php __('tres')?></option>
								<option value="4"><?php __('cuatro')?></option>
								<option value="5"><?php __('cinco')?></option>
								<option value="6"><?php __('seis')?></option>
								<option value="7"><?php __('siete')?></option>
								<option value="8"><?php __('ocho')?></option>
							</select>
						</div>
					</div>

					<div class="span1" id="submit_filtro">
						<input class="btn btn_amarillo" id="aplica" type="submit" value="<?php __('buscar');?>"/>
					</div>
						
				</div>
			</form>
			
			<div class="row-fluid">
				<div class="span12">
					<span class="grupinfo"><?php __('text_info_grups')?></span>
				</div>
			</div>
		</div>
	</div>					
	<?php 
		for($apt = 0; $apt <= MAX_NUM_APT; $apt++){ 
			$pax = true;
			if(isset($num_pax)) $pax = $num_pax <= Locales::__getKey('apt'.$apt.'_capa');
			if(in_array($apt, $reservats) === false && $pax) {
	?>
				
				<div class="row-fluid columna">
					<div class="span3 foto">
						<img src="<?php echo MEDIA_PATH.'/img/apt'.$apt.'/0.jpg'; ?>" alt="apart1"/>
					</div>
					<div class="span9">
						<div class="clear"></div>
						<div class="row-fluid">
							<div class="span4 offset2">
								<h3 class="titolapt"><?php __('apt'.$apt)?></h3>
								<span><?php __('apt'.$apt.'_area'); ?></span>
								<div class="clear"></div>
								<a class="btn btn_amarillo masinfo" href="<?php echo PAGE_ROOT.'/apartament/'.$apt; ?>"><?php __('apt_info'); ?></a>
							</div>
							
							<div class="span5 offset1">
								<p><?php __('apt_mida');  __('apt'.$apt.'_mida'); ?></p>
								<p><?php __('apt_habi');  __('apt'.$apt.'_habi'); ?></p>
								<p><?php __('apt_capa');  __('apt'.$apt.'_capa'); ?></p>					
							</div>

						</div>
					</div>
					<div class="linea"></div>
				</div>
	<?php 
			}	
		} 
	?>
	
</div>
				