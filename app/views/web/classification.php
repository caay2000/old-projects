<?php 
	if(isset($_GET['ok'])){
?>
	<div class="modal fade" id="register_ok">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Register</h4>
				</div>
				<div class="modal-body">
						Your account has been registered. You'll need to wait until some administrator validate your account.
				</div>
		    </div>
		</div>
	</div>
	<script type="text/javascript">
	    $(window).load(function(){
	        $('#register_ok').modal('show');
	    });
	</script>
<?php 	
	}
?>


<div class="row">
	<div class="col-sm-12">

		<table class="table table-striped">
			<?php 
				$position = 0;
				foreach($users as $user){ 
					$position ++; 
			?>					
					<tr id="tr-results-<?php echo $user->id; ?>">
						<td><?php echo $position; ?></td>
						<td><?php echo $user->username; ?></td>
						<td><a href="#" data-toggle="modal" data-target="#results-<?php echo $user->id; ?>">View</a></td>
						<td>
							<?php 
								if($user->pagado === TRUE){
									echo $user->punts;
								} else {
									echo 'N/A';
								} 
							?>
						</td>
					</tr>
					
					<div class="modal fade" id="results-<?php echo $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h4 class="modal-title"><?php echo $user->username; ?> - Total Points: 
					        	<?php 
					        		if($user->pagado === TRUE){
										echo $user->punts;
									} else {
										echo 'N/A';
									}
								?>
					        </h4>
					      </div>
					      <div class="modal-body">
							<div class="row list-partido">
								<?php foreach($user->pronostics as $p){ ?>
									<div class="col-xs-12 col-sm-6">
										<div class="row">
											<div class="col-xs-2">
												<img class="flag" src="<?php echo MEDIA_PATH."/images/flag/".strtolower($p->partido->team1->code);?>.png" alt="<?php echo $team1->code;?>"/>
											</div>
											<div class="col-xs-4">
												<span class="team"><?php echo $p->partido->team1->name;?></span>	
											</div>
											<div class="col-xs-2">
												<span><?php echo $p->result1; ?></span>	
											</div>
											<div class="col-xs-2">
												<span class="italic"><?php echo $p->partido->result1; ?></span>	
											</div>
											<div class="col-xs-2">
												<span class="italic">Points</span>	
											</div>
										</div>
										<div class="row">
											<div class="col-xs-2">
												<img class="flag" src="<?php echo MEDIA_PATH."/images/flag/".strtolower($p->partido->team2->code);?>.png" alt="<?php echo $team2->code;?>"/>	
											</div>
											<div class="col-xs-4">
												<span class="team"><?php echo $p->partido->team2->name;?></span>	
											</div>
											<div class="col-xs-2">
												<span><?php echo $p->result2; ?></span>
											</div>
											<div class="col-xs-2">
												<span class="italic"><?php echo $p->partido->result2; ?></span>	
											</div>
											<div class="col-xs-2">
												<span><b>
													<?php
														if($user->pagado === TRUE){
															echo $p->punts;
														} else {
															echo 'N/A';
														}
													?>
												</b></span>	
											</div>
										</div>
										<div class="row">
											<hr/>
										</div>
									</div>
								<?php } ?>
							</div>
					      </div>
					    </div>
					  </div>
					</div>
				<?php //} ?>	
			<?php } ?>
		</table>

	</div>
</div>
