<script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery.validate.js"></script>
<script type="text/javascript">

	<?php function br2nl($string){ return preg_replace('/\<br(\s*)?\/?\>/i', "", $string); } ?>

	var reserves = <?php echo $reserves; ?>;
	var entrades = <?php echo $entrades; ?>;
	var sortides = <?php echo $sortides; ?>;
	
	function checkReserves(date, e){
    	var id = $(e).closest(".apt").attr("id");
    	id = id.replace("formapt_", "");
	    var day = date.getDate();
	    var month = date.getMonth()+1;
		if(day<10) day = "0"+day;
		if(month<10) month = "0"+month;
	    dmy = day + "-" + month + "-" + date.getFullYear();

	    if ($.inArray(dmy, reserves[id]) != -1) return [false, "reservat","<?php __('reservat'); ?>"]; 
	    else if($.inArray(dmy, entrades[id]) != -1) return [true, "entrada"];
	    else if($.inArray(dmy, sortides[id]) != -1) return [true, "sortida"];
	    else return [true, ""];
	    
	}
	$(document).ready(function() {

		$('.delete_reserva').click(function(){
			var id = $(this).attr('id');
			id = id.replace('res_del_', '');
			$('#hidden_modal_borrar').val(id);
			 $("#delete-modal").modal('show'); 

		});
		
		$('#delete-modal-cancel').click(function(){ $("#delete-modal").modal('hide'); });

		$(".btn_del_oferta").click(function(){
			$(this).closest("form").find("textarea").val("");
		});
		
		$(".div_click").click(function(){
			var i= $(this).find('i');
			if($(i).hasClass('icon-plus-sign mas')){ 
				$(i).removeClass('icon-plus-sign mas');
				$(i).addClass('icon-minus-sign menos');
			}
			else{
				$(i).removeClass('icon-minus-sign menos');
				$(i).addClass('icon-plus-sign mas');
			}
			$(this).next(".div_despl").slideToggle();
		});
		
	$('.datasenvio').click(function(){
	  $(this).closest("form").validate({
			rules: {
				persona: {required:true},
				from: {required:true},
				to: {required:true}
			},
			messages: {
				persona: { required: "<?php __('required'); ?>" },
				from: {required: "<?php __('required'); ?>"},
				to: {required: "<?php __('required'); ?>"}
			}
		});	
	});	
		
	$( ".from" ).datepicker({
			firstDay: 1,
			dateFormat: "DD, dd/mm/yy",
			numberOfMonths: 2,
			minDate: 0,
			beforeShowDay: function(date){ return checkReserves(date, this); },
			onClose: function(selectedDate) {
				$(this).closest("form").find(".to").datepicker( "option", "minDate", selectedDate );
			}
		});
	    
	    $( ".to" ).datepicker({
			firstDay: 1,
			dateFormat: "DD, dd/mm/yy",
			numberOfMonths: 2,
			minDate: 0,
			beforeShowDay: function(date){ return checkReserves(date, this); },
			onClose: function(selectedDate) {
				$(this).closest("form").find(".from").datepicker( "option", "maxDate", selectedDate );
			}
		});
	    
	    
	
		$( ".datepicker" ).datepicker({
			numberOfMonths: 1,
		    dateFormat: "dd/mm/yy",
		    minDate: 0,
		    beforeShowDay: function(date){ return checkReserves(date, this); },
		    firstDay: 1
		});
  	});
</script>


<div id="delete-modal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3><?php __('admin_esborrar'); ?></h3>
	</div>
	<div class="modal-body">
		<p><?php __('admin_preg_esborrar'); ?></p>
	</div>
	<div class="modal-footer">
		
		<form action="<?php echo PAGE_ROOT; ?>/admin/esborrar" method="POST">
			<input type="hidden" name="id" id="hidden_modal_borrar"/>
			<input type="submit" class="btn btn_amarillo" value="Aceptar"/>
			<div id="delete-modal-cancel" class="btn"><?php __('admin_cancelar'); ?></div>
		</form>

	</div>
</div>

<div class="container-fluid medidasContingut">	
	<div class="row-fluid">
		<div class="span12">
			<h3 id="tituladmin"><?php __('tituladmin');?></h3>
			<div class="clear"></div>
			<?php for($apt = 0; $apt <= MAX_NUM_APT; $apt++){ ?>
				<div class="row-fluid columna apt" id="formapt_<?php echo $apt;?>">
					<div class="span12">
					<div class="clear"></div>
						<div class="row-fluid columna">
							<div class="span3 foto">
								<img src="<?php echo MEDIA_PATH.'/img/apt'.$apt.'/0.jpg'; ?>" alt="apart1"/>
							</div>
							<div class="span9 modificacioform">
								<div class="span4">
									<div class="span12">
										<h3 class="titolapt"><?php __('apt'.$apt);?></h3>
										<div class="clear"></div>
									</div>
								</div>
								<div class="span8 derform">
									<form class="form-inline reservaform" method="POST" action="<?php echo PAGE_ROOT; ?>/admin/reservar">
										<div class="span12">
											<label class="span4" for="persona"><?php __('nom_persona'); ?></label>
											<div class="input-append reservadiv">
			                					<input type="text"  name="persona" size="16" class="user">
			                					<label for="persona" class="campo_user">
													<span class="add-on user"><i class="icon-user"></i></span>
												</label>
			            					</div>
										</div>
										<div class="span12">
											<label class="span4 camp_entrada" for="from"><?php __('fechaentrada');?></label>
											<div class="input-append date reservadiv">
												<input id="from_<?php echo $apt;?>" class="from" name="from" size="16" type="text"/>
												<label for="from_<?php echo $apt;?>" class="campo_entra">
													<span id="from_cal" class="add-on"><i class="icon-calendar"></i></span>
												</label>	
											</div>
										</div>
										<div class="span12">
											<label class="span4 camp_salida" for="to"><?php __('fechasalida');?></label>
											<div class="input-append date reservadiv">
												<input id="to_<?php echo $apt;?>" class="to" name="to" size="16" type="text"/>
												<label for="to_<?php echo $apt;?>" class="campo_sal">
													<span id="to_cal" class="add-on"><i class="icon-calendar"></i></span>
												</label>
										  	</div>
										</div>
										<div class="clear"></div>
										<div class="span12">
											<input type="hidden" name="apt" value="<?php echo $apt; ?>">
											<input type="submit" name="datasenvio" class="btn btn_amarillo datasenvio span11" value="Enviar"/>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<div class="linea"></div>
					</div>
					
					<div class="row-fluid columna">
						<?php if(isset($reserves_list[$apt])){ ?>
							<h5 class="span12 div_click mleft-10"><?php __('admin_res_pen');?><i class="icon-plus-sign mas"></i></h5>
							<div class="div_despl hidden">
								<div class="span4 datepicker"></div>
								<div class="span7 reservasAdmin">
								<?php foreach($reserves_list[$apt] as $res){ ?>
									<div class="row-fluid columna_reserves">
										<div class="span11">
											<div class="span3"><?php __('apt'.$res->id_apartament); ?></div>
											<div class="span3"><?php echo date_format($res->desde, 'd-m-Y'); ?></div>
											<div class="span3"><?php echo date_format($res->hasta, 'd-m-Y'); ?></div>
											<div class="span3"><?php echo $res->persona; ?></div>
										</div>
										<div class="span1">
											<i id="res_del_<?php echo $res->id; ?>" class="icon icon-trash delete_reserva"></i>
										</div>
									</div>
								<?php } ?>
								</div>
							</div>

						<?php } else { ?>
							<h5 class="span12 mleft-10"><?php __('admin_res_pen');?> - <span class="no_reserva"><?php __('admin_nores_pen');?></span></h5>
						<?php } ?>
						<div class="linea"></div>
					</div>
					
					<div class="row-fluid columna">
						<h5 class="span12 div_click mleft-10"><?php __('admin_taula_preus');?><i class="icon-plus-sign mas"></i></h5>
						<div class="div_despl hidden">
							<div class="span12">
								<form class="form-inline reservaform" method="POST" action="<?php echo PAGE_ROOT; ?>/admin/preu">
									<div class="row-fluid">
									
										<table class="table table-bordered tablapreus">
											<tr>
												<th colspan="1"><?php __('temp_alta'); ?></th>
												<th colspan="3">
													<?php 
														if($apt == 8) __('temp_alta_mesos_gava'); 
														else __('temp_alta_mesos');
													?>
												</th>
											</tr>
											<tr>
												<th><?php __('admin_pers'); ?></th>
												<th><?php __('admin_pers3a6'); ?></th>
												<th>
													<?php 
														if($apt == 8) __('admin_pers_sem');
														else __('admin_pers7');
													?>
												</th>
												<th><?php __('admin_mes_entero'); ?></th>
											</tr>
											<?php 
												for($i = 2; $i <= Locales::__getKey("apt".$apt."_pax"); $i = $i+2){ 
													$preu = $preus[$apt][$i];
													if(!($apt == 0 && $i == 2)){
											?>
													<tr>
											<?php if(!($apt == 0 && $i == 4)){ ?>
												<td class="bold"><?php echo ($i-1).'&nbsp;-&nbsp;'.($i); ?></td>
											<?php } else { ?>
												<td class="bold"><?php echo '1&nbsp;-&nbsp;'.($i); ?></td>
											<?php } ?>
														<td><input type="text" name="preu_alta_3_pax_<?php echo $i; ?>" value="<?php echo $preu['preu_3_alta']; ?>"></input></td>
														<td><input type="text" name="preu_alta_7_pax_<?php echo $i; ?>" value="<?php echo $preu['preu_7_alta']; ?>"></input></td>
														<td><input type="text" name="preu_alta_mes_pax_<?php echo $i; ?>" value="<?php echo $preu['preu_mes_alta']; ?>"></input></td>
													</tr>	
								<?php 
										}
									} 
								?>	
										</table>
										
										<table class="table table-bordered tablapreus">
											<tr>
												<th colspan="1"><?php __('temp_mitja'); ?></th>
												<th colspan="3">
													<?php 
														if($apt == 8) __('temp_mitja_mesos_gava'); 
														else __('temp_mitja_mesos');
													?>
												</th>
											</tr>
											<tr>
												<th><?php __('admin_pers'); ?></th>
												<th><?php __('admin_pers3a6'); ?></th>
												<th>
													<?php 
														if($apt == 8) __('admin_pers_sem');
														else __('admin_pers7');
													?>
												</th>
												<th><?php __('admin_mes_entero'); ?></th>
											</tr>
											<?php 
												for($i = 2; $i <= Locales::__getKey("apt".$apt."_pax"); $i = $i+2){ 
													$preu = $preus[$apt][$i];
													if(!($apt == 0 && $i == 2)){
											?>
													<tr>
											<?php if(!($apt == 0 && $i == 4)){ ?>
												<td class="bold"><?php echo ($i-1).'&nbsp;-&nbsp;'.($i); ?></td>
											<?php } else { ?>
												<td class="bold"><?php echo '1&nbsp;-&nbsp;'.($i); ?></td>
											<?php } ?>
														<td><input type="text" name="preu_mitja_3_pax_<?php echo $i; ?>" value="<?php echo $preu['preu_3_mitja']; ?>"></input></td>
														<td><input type="text" name="preu_mitja_7_pax_<?php echo $i; ?>" value="<?php echo $preu['preu_7_mitja']; ?>"></input></td>
														<td><input type="text" name="preu_mitja_mes_pax_<?php echo $i; ?>" value="<?php echo $preu['preu_mes_mitja']; ?>"></input></td>
													</tr>	
								<?php 
										}
									} 
								?>	
										</table>
										
										<table class="table table-bordered tablapreus">
											<tr>
												<th colspan="1"><?php __('temp_baixa'); ?></th>
												<th colspan="3">
													<?php 
														if($apt == 8) __('temp_baixa_mesos_gava'); 
														else __('temp_baixa_mesos');
													?>
												</th>
											</tr>
											<tr>
												<th><?php __('admin_pers'); ?></th>
												<th><?php __('admin_pers3a6'); ?></th>
												<th>
													<?php 
														if($apt == 8) __('admin_pers_sem');
														else __('admin_pers7');
													?>
												</th>
												<th><?php __('admin_mes_entero'); ?></th>
											</tr>
											<?php 
												for($i = 2; $i <= Locales::__getKey("apt".$apt."_pax"); $i = $i+2){ 
													$preu = $preus[$apt][$i];
													if(!($apt == 0 && $i == 2)){
											?>
													<tr>
											<?php if(!($apt == 0 && $i == 4)){ ?>
												<td class="bold"><?php echo ($i-1).'&nbsp;-&nbsp;'.($i); ?></td>
											<?php } else { ?>
												<td class="bold"><?php echo '1&nbsp;-&nbsp;'.($i); ?></td>
											<?php } ?>
														<td><input type="text" name="preu_baixa_3_pax_<?php echo $i; ?>" value="<?php echo $preu['preu_3_baixa']; ?>"></input></td>
														<td><input type="text" name="preu_baixa_7_pax_<?php echo $i; ?>" value="<?php echo $preu['preu_7_baixa']; ?>"></input></td>
														<td><input type="text" name="preu_baixa_mes_pax_<?php echo $i; ?>" value="<?php echo $preu['preu_mes_baixa']; ?>"></input></td>
													</tr>	
								<?php 
										}
									} 
								?>	
										</table>

									</div>
									<div class="row-fluid">
										<input type="hidden" name="id" value="<?php echo $apt; ?>"/>
										<div class="span2 offset9">
											<input type="submit" class="btn btn_amarillo preusenvio span12" value="Enviar"/>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="linea"></div>
					</div>
					
					<div class="row-fluid columna">
						<h5 class="span12 div_click mleft-10"><?php __('admin_detalls_preu'); ?><i class="icon-plus-sign mas"></i></h5>
						<div class="div_despl hidden">
							<form class="form-inline reservaform" method="POST" action="<?php echo PAGE_ROOT; ?>/admin/detall">
								<?php /*
								<div class="row-fluid">
									<div class="span12">
										<label><?php __('ca'); ?></label>
										<textarea cols="80" rows="3" name="ca" class="span12"><?php echo br2nl($detalls[$apt]['ca']); ?></textarea>	
									</div>
								</div>
								*/ ?>
								<div class="row-fluid">
									<div class="span12">
										<label><?php __('es'); ?></label>
										<textarea cols="80" rows="3" name="es" class="span12"><?php echo br2nl($detalls[$apt]['es']); ?></textarea>	
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<label><?php __('en'); ?></label>
										<textarea cols="80" rows="3" name="en" class="span12"><?php echo br2nl($detalls[$apt]['en']); ?></textarea>	
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<label><?php __('fr'); ?></label>
										<textarea cols="80" rows="3" name="fr" class="span12"><?php echo br2nl($detalls[$apt]['fr']); ?></textarea>	
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<label><?php __('it'); ?></label>
										<textarea cols="80" rows="3" name="it" class="span12"><?php echo br2nl($detalls[$apt]['it']); ?></textarea>	
									</div>
								</div>
								<div class="clear"></div>
								<div class="row-fluid">
									<input type="hidden" name="id" value="<?php echo $apt; ?>"/>
									<div class="span2 offset9">
										<input type="submit" class="btn btn_amarillo span12" value="Enviar"/>
									</div>
								</div>
							</form>
						</div>
						<div class="linea"></div>
					</div>
					
					<div class="row-fluid columna">
						<h5 class="span12 div_click mleft-10"><?php __('admin_ofertes'); ?><i class="icon-plus-sign mas"></i></h5>
						<div class="div_despl hidden">
							<form class="form-inline reservaform" method="POST" action="<?php echo PAGE_ROOT; ?>/admin/ofertes">
								<?php /*
								<div class="row-fluid">
									<div class="span12">
										<label><?php __('ca'); ?></label>
										<textarea cols="80" rows="3" name="ca" class="span12"><?php echo br2nl($ofertes[$apt]['ca']); ?></textarea>	
									</div>
								</div>
								*/ ?>
								<div class="row-fluid">
									<div class="span12">
										<label><?php __('es'); ?></label>
										<textarea cols="80" rows="3" name="es" class="span12"><?php echo br2nl($ofertes[$apt]['es']); ?></textarea>	
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<label><?php __('en'); ?></label>
										<textarea cols="80" rows="3" name="en" class="span12"><?php echo br2nl($ofertes[$apt]['en']); ?></textarea>	
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<label><?php __('fr'); ?></label>
										<textarea cols="80" rows="3" name="fr" class="span12"><?php echo br2nl($ofertes[$apt]['fr']); ?></textarea>	
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12">
										<label><?php __('it'); ?></label>
										<textarea cols="80" rows="3" name="it" class="span12"><?php echo br2nl($ofertes[$apt]['it']); ?></textarea>	
									</div>
								</div>
								<div class="clear"></div>
								<div class="row-fluid">
									<input type="hidden" name="id" value="<?php echo $apt; ?>"/>
									<div class="span3 offset5">
										<div class="btn btn_amarillo span12 btn_del_oferta">Esborrar Ofertes</div>
									</div>
									<div class="span2 offset1">
										<input type="submit" class="btn btn_amarillo span12" value="Enviar"/>
									</div>
								</div>
							</form>
						</div>
						<div class="linea"></div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>