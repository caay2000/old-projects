<?php $lang = Locales::__getKey('lang'); ?>

<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript">

	var reserves = <?php echo $reserves; ?>;
	var entrades = <?php echo $entrades; ?>;
	var sortides = <?php echo $sortides; ?>;

	function checkReserves(date){
	    var day = date.getDate();
	    var month = date.getMonth()+1;
		if(day<10) day = "0"+day;
		if(month<10) month = "0"+month;
	    dmy = day + "-" + month + "-" + date.getFullYear();
	    if ($.inArray(dmy, reserves) != -1) return [false, "reservat","<?php __('reservat'); ?>"]; 
	    else if($.inArray(dmy, entrades) != -1) return [true, "entrada"];
	    else if($.inArray(dmy, sortides) != -1) return [true, "sortida"];
	    else return [true, ""];
	}

	$(document).ready(function() {

		$("#enviar").click(function() {
			if($("#form_contacte").valid()==true){
				$.ajax({
					type: "POST",
					url: "<?php echo PAGE_ROOT; ?>/contacte",
					data:  $('#form_contacte').serialize(),
	                success: function(data) {
	                	$("#modal-text").html(data.result);
	                	$("#mail-modal").modal('show');
	                }
	            });
			}
			return false;
		});

		$('#modal-btn').click(function(){ $("#mail-modal").modal('hide'); });

		$("#form_contacte").validate({
			rules: { nombre: {required:true}, email: {email:true, required:true}, text: {required:true} },
			messages: {
				nombre: {required: "<?php __('required'); ?>" },
				email: { required: "<?php __('required'); ?>", email: "<?php __('email'); ?>" },
				text: { required: "<?php __('required'); ?>" }}
		});

		$(document).on('click', '.foto_small', function(e){
			var id = $(this).attr("id").replace('foto_', '');
			$('#foto_principal').fadeOut('slow', function(){
				$(this).attr('src', '<?php echo MEDIA_PATH.'/img/apt'.$id_apt; ?>/'+id+'.jpg').fadeIn('slow');
			});
		});
			
		$( "#from" ).datepicker({
		    firstDay: 1,
		    dateFormat: "DD, dd/mm/yy",
		    minDate: 0,
		    numberOfMonths: 2,
		    beforeShowDay: function(date){ return checkReserves(date); },
		    onClose: function( date ) {
		    	$( "#to" ).attr("disabled", false);
		    	date = date.substring(date.indexOf(", ")+2);
		    	date = new Date(date.substring(6)+"-"+date.substring(3,5)+"-"+date.substring(0,2));
		    	date.setDate(date.getDate()+3);
				$( "#to" ).datepicker( "option", "minDate", date );
		    }
		});
		
		$( "#to" ).datepicker({
			minDate: 0,
		    firstDay: 1,
		    dateFormat: "DD, dd/mm/yy",
		    numberOfMonths: 2,
		    beforeShowDay: function(date){ return checkReserves(date); },
		    onClose: function( selectedDate ) {
		      $( "#from" ).datepicker( "option", "maxDate", selectedDate );
		    }
		 });

		$( "#datepicker" ).datepicker({
			minDate: 0,
			firstDay: 1,
			numberOfMonths: 3,
		    beforeShowDay: function(date){ return checkReserves(date); }
		    
		});	
	});
</script>

<div id="mail-modal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3><?php __('email_header'); ?></h3>
	</div>
	<div class="modal-body">
		<p id="modal-text"></p>
	</div>
	<div class="modal-footer">
		<div id="modal-btn" class="btn"><?php __('email_btn'); ?></div>
	</div>
</div>

<div class="container-fluid medidasContingut">

	<div class="row-fluid">
		
		<div class="span7">
			<div class="row-fluid">
				<div class="span12">
					<h2><?php __('apt'.$id_apt); ?></h2>
					<p><?php __('apt'.$id_apt.'_cant'); ?></p>
					<p><span class="subr"><?php __('situacio'); ?></span>&nbsp;<?php __('apt'.$id_apt.'_dir'); ?></p>
					<img id="foto_principal" class="img-polaroid" src="<?php echo MEDIA_PATH.'/img/apt'.$id_apt.'/0.jpg'; ?>" alt="apart1"/>
					
					<div class="clear"></div>
					<h4 class="mayuscula"><?php __('fotografies'); ?></h4>
					<div class="row-fluid">
						<?php 
							$NUM = 6;
							$span = 12/$NUM;
							$max = Locales::__getKey('apt'.$id_apt.'_num_fotos');
							for($i = 0; $i <= $max; $i++){
								if(($i)%$NUM == 0){
									echo '</div><div class="row-fluid fotos_mini">'; 
								}
								echo '<div class="span'.$span.' fotos_list">';
								echo '<img id="foto_'.$i.'" class="foto_small img-rounded" src="'.MEDIA_PATH.'/img/apt'.$id_apt.'/sm/'.$i.'.jpg" />';
								echo '</div>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="span5">
			<div class="row-fluid derecha">
				<div class="span12 recuadroemail">
					<div>
						<div class="iframe_contacta">
							<p><?php __('span_contacta');?></p>
		         			<form id="form_contacte" class="form-horizontal contacte">
		         				<div class="form-group" id="frm_contacto_container">
		         					<div id="frm_contacto_tot">
				            			<div id="frm_contactoNom">
				            				<label for="nombre" class="span12 titullabel"><?php __('nombre'); ?></label>
				            				<div class="input-append">
					            				<input name="nombre" type="text" class="nombre index"/>
					            				<label for="nombre">
													<span class="add-on icono_narnaja"><i class="icon-user icon-white"></i></span>
												</label>
											</div>
				            			</div>
				            			<div id="frm_contactoTel">
				            				<label for="telf" class="span12 titullabel"><?php __('telefono'); ?></label>
				            				<div class="input-append">
				            					<input name="telf" type="text" class="telf index"/>
				            					<label for="telf">
													<span class="add-on icono_narnaja"><i class="icon-glass icon-white"></i></span>	
												</label>
				            				</div>
				            			</div>
				            			<div id="frm_contactoEmail">
				            				<label for="email" class="span12 titullabel"><?php __('email'); ?></label>
				            				<div class="input-append">
				            					<input name="email" type="text" class="email index"/>
				            					<label for="email">
													<span class="add-on icono_narnaja"><i class="icon icon-envelope icon-white"></i></span>
												</label>
				            				</div>
				            			</div>
				            			<div id="frm_entrada">
											<label for="from" class="span12 titullabel"><?php __('fechaentrada');?></label>
											<div class="input-append date">
												<input id="from" class="from index" name="from" size="16" type="text"/>
												<label for="from">
													<span id="from_cal" class="add-on icono_narnaja"><i class="icon icon-calendar icon-white"></i></span>
												</label>	
											</div>
										</div>
										<div id="frm_salida">
											<label for="to" class="span12 titullabel"><?php __('fechasalida');?></label>
											<div class="input-append date">
												<input id="to" class="to index" name="to" size="16" type="text" disabled="disabled"/>
												<label for="to">
													<span id="to_cal" class="add-on icono_narnaja"><i class="icon icon-calendar icon-white"></i></span>
												</label>
											</div>
										</div>
										
										<div class="numpersonas">
											<label class="span12 titullabel" for="num_pax"><?php __('numpersona');?></label>
											<select class="span12 form-control" name="num_pax">
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
										
				            			<div id="frm_contactoText">
				            				<label for="text" class="span12 titullabel"><?php __('asunto_email'); ?></label>
				            				<textarea id="text" name="text" class="camp_text index"></textarea>
				            			</div>
				            		</div>
								</div>			
								<input type="hidden" name="id" value="<?php echo $id_apt; ?>"/>
								<button class="btn btn_amarillo" id="enviar"><?php __('enviar');?></button>
		         			</form>
	         			</div>
	         		</div>
         		</div>
			</div>
		</div>
		
	</div>
	
	<div class="row-fluid">
		<div class="span12">
					
			<div class="clear"></div>
			<div class="row-fluid">
				<div class="span12">
					<h4 class="mayuscula"><?php __('descripcio'); ?></h4>
					<div class="row-fluid">
						<div class="span12">
							<div class="row-fluid">
								<div class="span12">
									<?php __('apt'.$id_apt.'_descrip'); ?>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span6">
									<h5><?php __('apt'.$id_apt.'_desc_1'); ?></h5>
									<ul>
										<?php for($i = 1; $i<=Locales::__getKey('apt'.$id_apt.'_num_desc_1'); $i++) { 
											echo '<li>'.Locales::__getKey('apt'.$id_apt.'_desc_1_'.$i).'</li>';
										} ?>
									</ul>            
								</div>
								<?php if(Locales::__getKey('apt'.$id_apt.'_num_desc_2') > 0) { ?>
									<div class="span6">
										<h5><?php __('apt'.$id_apt.'_desc_2'); ?></h5>
										<ul>
											<?php for($i = 1; $i<=Locales::__getKey('apt'.$id_apt.'_num_desc_2'); $i++) { 
												echo '<li>'.Locales::__getKey('apt'.$id_apt.'_desc_2_'.$i).'</li>';
											} ?>
										</ul>     
									</div>
								<?php } ?>
							</div>
							<?php if(strlen(Locales::__getKey('apt'.$id_apt.'_desc_extra')) > 0) { ?>
								<div class="row-fluid">
									<div class="span12">
										<?php __('apt'.$id_apt.'_desc_extra'); ?>
									</div>
								</div>
							<?php } ?>
							<div class="row-fluid">
								<div class="span12">
									<h4 class="mayuscula"><?php __('equipamiento'); ?></h4>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span4">
									<h5><?php __('salon'); ?></h5>
									<ul>
										<li><?php __('aire'); ?></li>
										<li><?php __('tv'); ?></li>
										<li><?php __('dvd'); ?></li>
										<li><?php __('wifi'); ?></li>
									</ul>
								</div>
								<div class="span4">
									<h5><?php __('cocina'); ?></h5>
									<ul>
										<li><?php __('nevera'); ?></li>
										<li><?php __('lavaplatos'); ?></li>
										<li><?php __('microondas'); ?></li>
										<li><?php __('cafetera'); ?></li>
										<li><?php __('tostadora'); ?></li>
										<li><?php __('picadora'); ?></li>
										<li><?php __('exprimidor'); ?></li>
										<li><?php __('induccion'); ?></li>
										<li><?php __('utensilios'); ?></li>
										<li><?php __('plancha'); ?></li>
										<?php if($id_apt == 0 || $id_apt == 8){ ?>
											<li><?php __('lavadora'); ?></li>
											<li><?php __('secadora'); ?></li>
										<?php }?>
									</ul>
								</div>
								<div class="span4">
									<h5><?php __('bano'); ?></h5>
									<ul>
										<li><?php __('champu'); ?></li>
										<li><?php __('sec_toalla'); ?></li>
										<li><?php __('sec_pelo'); ?></li>
										<li><?php __('toalla'); ?></li>
									</ul>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12">
									<?php if(!($id_apt == 0 || $id_apt == 8)){ ?>
										<p><?php __('fluvia_secadora_lavadora'); ?></p>
									<?php } ?>
									<p><?php __('para_bebes'); ?></p>
									<p><?php __('ropa_cama'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
					
			<div class="clear"></div>
			<div class="row-fluid">
				<div class="span12">
					<h4 class="mayuscula"><?php __('situacio'); ?></h4>
					<div class="row-fluid">
						<div class="span12">
							<p><?php __('apt'.$id_apt.'_situacio_p1'); ?></p>
							<p><?php __('apt'.$id_apt.'_situacio_p2'); ?></p>
							<?php if($id_apt != 8) { ?>
								<ul>
									<li><?php __('apt'.$id_apt.'_situacio_p3'); ?></li>
									<li><?php __('apt'.$id_apt.'_situacio_p4'); ?></li>
									<li><?php __('apt'.$id_apt.'_situacio_p5'); ?></li>
								</ul>
							<?php } else { ?>
								<p><?php __('apt'.$id_apt.'_situacio_p3'); ?></p>
								<p><?php __('apt'.$id_apt.'_situacio_p4'); ?></p>
							<?php } ?>
							<iframe width="880" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php __('apt'.$id_apt.'_googlemaps', FALSE); ?>">
							</iframe>
						</div>
					</div>
				</div>
			</div>
			
			<div class="clear"></div>
			<div class="row-fluid">
				<div class="span12">
					<h4 class="mayuscula"><?php __('calendari_reserves'); ?></h4>
					<div class="row-fluid">
						<div class="span12">
							<div id="datepicker"></div>
						</div>
					</div>
				</div>
			</div>
			
			<?php 
				function print_preu($preu){
					if(is_numeric($preu)) echo $preu.'&nbsp;&euro;';
					else echo $preu;
				}
			
			?>
			
			<div class="clear"></div>
			<div class="row-fluid">
				<div class="span12 tablas">
					<h4 class="mayuscula"><?php __('preus'); ?></h4>
					<div class="row-fluid">
						<div class="span12">
							<table class="table table-condensed table-hover tablapreus">
								<tr>
									<th colspan="1"><?php __('temp_alta'); ?></th>
									<th colspan="3">
										<?php 
											if($id_apt == 8) __('temp_alta_mesos_gava'); 
											else __('temp_alta_mesos');
										?>
									</th>
								</tr>
								<tr>
									<th><?php __('admin_pers'); ?></th>
									<th><?php __('admin_pers3a6'); ?></th>
									<th>
										<?php 
											if($id_apt == 8) __('admin_pers_sem');
											else __('admin_pers7');
										?>
									</th>
									<th><?php __('admin_mes_entero'); ?></th>
								</tr>
								<?php 
									for($i = 2; $i <= Locales::__getKey("apt".$id_apt."_pax"); $i = $i+2){ 
										$preu = $preus[$i];
										if(!($id_apt == 0 && $i == 2)){
								?>
										<tr>
											<?php if(!($id_apt == 0 && $i == 4)){ ?>
												<td class="bold"><?php echo ($i-1).'&nbsp;-&nbsp;'.($i); ?></td>
											<?php } else { ?>
												<td class="bold"><?php echo '1&nbsp;-&nbsp;'.($i); ?></td>
											<?php } ?>
											<td><?php print_preu($preu['preu_3_alta']); ?></td>
											<td><?php print_preu($preu['preu_7_alta']); ?></td>
											<td><?php print_preu($preu['preu_mes_alta']); ?></td>
										</tr>	
								<?php 
										}
									} 
								?>	
							</table>
							<div class="clear"></div>
							<table class="table table-condensed table-hover tablapreus">
								<tr>
									<th colspan="1"><?php __('temp_mitja'); ?></th>
									<th colspan="3">
										<?php 
											if($id_apt == 8) __('temp_mitja_mesos_gava'); 
											else __('temp_mitja_mesos');
										?>
									</th>
								</tr>
								<tr>
									<th><?php __('admin_pers'); ?></th>
									<th><?php __('admin_pers3a6'); ?></th>
									<th>
										<?php 
											if($id_apt == 8) __('admin_pers_sem');
											else __('admin_pers7');
										?>
									</th>
									<th><?php __('admin_mes_entero'); ?></th>
								</tr>
								<?php 
									for($i = 2; $i <= Locales::__getKey("apt".$id_apt."_pax"); $i = $i+2){ 
										$preu = $preus[$i];
										if(!($id_apt == 0 && $i == 2)){
								?>
										<tr>
											<?php if(!($id_apt == 0 && $i == 4)){ ?>
												<td class="bold"><?php echo ($i-1).'&nbsp;-&nbsp;'.($i); ?></td>
											<?php } else { ?>
												<td class="bold"><?php echo '1&nbsp;-&nbsp;'.($i); ?></td>
											<?php } ?>
											<td><?php print_preu($preu['preu_3_mitja']); ?></td>
											<td><?php print_preu($preu['preu_7_mitja']); ?></td>
											<td><?php print_preu($preu['preu_mes_mitja']); ?></td>
										</tr>	
								<?php 
										}
									} 
								?>	
							</table>
							<div class="clear"></div>
							<table class="table table-condensed table-hover tablapreus">
								<tr>
									<th colspan="1"><?php __('temp_baixa'); ?></th>
									<th colspan="3">
										<?php 
											if($id_apt == 8) __('temp_baixa_mesos_gava'); 
											else __('temp_baixa_mesos');
										?>
									</th>
								</tr>
								<tr>
									<th><?php __('admin_pers'); ?></th>
									<th><?php __('admin_pers3a6'); ?></th>
									<th>
										<?php 
											if($id_apt == 8) __('admin_pers_sem');
											else __('admin_pers7');
										?>
									</th>
									<th><?php __('admin_mes_entero'); ?></th>
								</tr>
								<?php 
									for($i = 2; $i <= Locales::__getKey("apt".$id_apt."_pax"); $i = $i+2){ 
										$preu = $preus[$i];
										if(!($id_apt == 0 && $i == 2)){
								?>
										<tr>
											<?php if(!($id_apt == 0 && $i == 4)){ ?>
												<td class="bold"><?php echo ($i-1).'&nbsp;-&nbsp;'.($i); ?></td>
											<?php } else { ?>
												<td class="bold"><?php echo '1&nbsp;-&nbsp;'.($i); ?></td>
											<?php } ?>
											<td><?php print_preu($preu['preu_3_baixa']); ?></td>
											<td><?php print_preu($preu['preu_7_baixa']); ?></td>
											<td><?php print_preu($preu['preu_mes_baixa']); ?></td>
										</tr>	
								<?php 
										}
									} 
								?>	
							</table>
							<?php if($id_apt != 8) { ?>
								<div class="row-fluid">
									<div class="span12">
										<span class="preus_orienta"><?php __('min_3_dias'); ?></span>
										<span class="preus_orienta"><?php __('preus_orienta'); ?></span>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					
					

					<div class="row-fluid">
						<h5><?php __('detall_preu'); ?></h5>
						<div class="span12">
							<?php echo $detalls->getText($lang); ?>
						</div>
					</div>
					<div class="row-fluid">
						<?php if($ofertes->active === true){ ?>
							<h5><?php __('ofertes'); ?></h5>
							<div class="span12 ofertas">
								<?php echo $ofertes->getText($lang); ?>
							</div>
						<?php } else { ?>
							<h5><?php __('ofertes'); ?> - <span class="no_reserva"><?php __('no_ofertas'); ?></span></h5>
						<?php } ?>
					</div>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span12 normes">
					<h4 class="mayuscula"><?php __('h4_normes'); ?></h4>
					<ul>
						<li><?php __('li_1_normes'); ?></li>
						<li><?php __('li_2_normes'); ?></li>
						<li><?php __('li_3_normes'); ?></li>
						<li><?php __('li_4_normes'); ?></li>
						<li><?php __('li_5_normes'); ?></li>
						<li><?php __('li_6_normes'); ?></li>
						<li><?php __('li_7_normes'); ?></li>
						<li><?php __('li_8_normes'); ?></li>
						<li><?php __('li_9_normes'); ?></li>
						<li><?php __('li_10_normes'); ?></li>
						<li><?php __('li_11_normes'); ?></li>
						<li><?php __('li_12_normes'); ?></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>

</div>

<script type="text/javascript">
	$(document).ready(function(){
		for(var i = 2; i < <?php echo $max; ?>; i++){
			$("#hidden_image").attr("src", "<?php echo MEDIA_PATH.'/img/apt'.$id_apt.'/'+$i+'.jpg'; ?>");
		}
	});	
</script>
<?php 
	for($i=1; $i<$max; $i++){
		echo '<img id="hidden_image" class="hidden" alt="hidden_images" src="'.MEDIA_PATH.'/img/apt'.$id_apt.'/'.$i.'.jpg" />';		
	}
?>
