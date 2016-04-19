<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Brazil 2014</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<span>Participants</span>
				<div class="pull-right">
					<span class="glyphicon <?php if(isset($_GET['user'])) echo "glyphicon-minus"; else echo "glyphicon-plus";?>"></span>
				</div>
			</div>
			<div class="panel-body">
				<div class="panel-display" <?php if(isset($_GET['user'])) echo 'style="display:block;"'?>>
					<table class="table table-striped">
						<?php foreach($users as $user){ ?>					
							<tr>
								<td><?php echo $user->username; ?></td>
								<td><?php echo $user->email; ?></td>
								<td>
									<?php if($user->pagado){ ?>
										<span class="glyphicon glyphicon-ok"></span>
															
									<?php } else { ?>
										<form action="save_pagar" method="POST">
											<input type="hidden" name="id" value="<?php echo $user->id; ?>" />
											<input type="submit" class="btn-success" value="Paid" />
										</form>
									<?php } ?>
								</td>
						</tr>						
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<span>Matches</span>
				<div class="pull-right">
					<span class="glyphicon <?php if(isset($_GET['match'])) echo "glyphicon-minus"; else echo "glyphicon-plus";?>"></span>
				</div>
			</div>
			<div class="panel-body">
				<div class="panel-display" <?php if(isset($_GET['match'])) echo 'style="display:block;"'?>>
					<div class="row" style="margin-bottom: 30px;">
						<div class="col-sm-8">
						<?php /* ?>
							<form class="form-inline" method="POST" action="save_match">
							    <div class="form-group">
									<input name="fecha" type=text class="form-control" id="datepicker">
							    </div>
							    <div class="form-group">
							        <select name="team1" class="form-control">
								        <?php foreach($teams as $team){ ?>
								        	<option value="<?php echo $team->code;?>"><?php echo $team->name;?></option>
								        <?php } ?>
									</select>
							    </div>
							    <div class="form-group">
							        <select name="team2" class="form-control">
								        <?php foreach($teams as $team){ ?>
								        	<option value="<?php echo $team->code;?>"><?php echo $team->name;?></option>
								        <?php } ?>
									</select>
							    </div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Add</button>
								</div>
							</form>
							<?php */ ?>
						</div>
						<div class="col-sm-4">
							<p><a href="<?php echo PAGE_ROOT; ?>/calculate" class="btn btn-primary" role="button">Re-Calculate</a></p>
						</div>
					</div>
					<div class="row">
						<?php 
							foreach($partidos as $partido){
								$team1 = $partido->team1;
								$team2 = $partido->team2;
						?>
							<div class="col-xs-6 col-sm-4 col-md-3 partido-admin">
								<div class="panel panel-default">
									<div class="panel-heading">
										<?php echo $partido->fecha->format('d-m-Y');?>
									</div>
									<div class="panel-body">
										<div class="row partido">
											<div class="col-xs-6">
												<img class="flag" src="<?php echo MEDIA_PATH."/images/flag/".strtolower($team1->code);?>.png" alt="<?php echo $team1->name;?>"/>
												<div class="team"><?php echo $team1->name;?></div>
												<?php if(isset($partido->result1)) { ?>
													<div class="result"><?php echo $partido->result1; ?></div>
												<?php } ?>
											</div>
											<div class="col-xs-6">
												<img class="flag" src="<?php echo MEDIA_PATH."/images/flag/".strtolower($team2->code);?>.png" alt="<?php echo $team2->name;?>"/>
												<div class="team"><?php echo $team2->name;?></div>
												<?php if(isset($partido->result2)) { ?>
													<div class="result"><?php echo $partido->result2; ?></div>
												<?php } ?>
											</div>
										
										<?php if(!isset($partido->result1)) { ?>
											
											<form action="save_result" method="POST">
												<div class="row">
													<div class="col-xs-offset-1 col-xs-5">
														<div class="input-group">
															<input type="text" class="form-control" name="result1" />
														</div>
													</div>
													<div class="col-xs-5">
														<div class="input-group">
															<input type="text" class="form-control" name="result2" />
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12 save-btn">
														<input type="hidden" name="id" value="<?php echo $partido->id; ?>">
														<input type="submit" class="btn btn-success" value="Save">
													</div>
												</div>
											</form>
										<?php } ?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div style="margin-bottom: 50px;"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#datepicker').datepicker({ 
			format: 'dd/mm/yyyy',
			autoclose: true,
			todayHighlight: true
		});
		
		$(".panel-heading .glyphicon-plus").on('click', function(){
			var icon = $(this); 
			icon.closest(".panel").find(".panel-display").slideToggle('slow');
			icon.toggleClass("glyphicon-plus");
			icon.toggleClass("glyphicon-minus");
				
		});
	});
</script>
