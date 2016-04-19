<div class="row">
	<div class="col-xs-12">
		 <span><b>All the times are in local time.</b></span>
	</div>
	<div class="col-xs-12">
		<span>You can check your time in <a href="http://www.fifa.com/worldcup/matches/" target="_blank">FIFA Official Site</a></span>
	</div>
</div>

<div class="row">
	<?php 
		foreach($partidos as $partido){
			$team1 = $partido->team1;
			$team2 = $partido->team2;
			$size = 0;
	?>
		<div class="modal fade" id="results-<?php echo $partido->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<span><b><?php echo $team1->name;?> vs <?php echo $team2->name;?></b>&nbsp;<?php echo $partido->result1;?> vs <?php echo $partido->result2;?></b></span>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
					<?php 
						$arrayPoints = array();
						$arrayResults = array();
						foreach($users as $user){
							$p = $user->getPronostic($partido->id);
							if($p !== null && $partido->result1 !== null){
								if($p->punts !== NULL && $p->punts > 0){
									$arrayPoints[$user->username] = $p->punts;
									$arrayResults[$user->username] = $p->result1."-".$p->result2;
								}
							}
						}
						
						arsort($arrayPoints);
						foreach($arrayPoints as $key => $value) {
					?>
						<div class="row">
							<div class="col-xs-4">
								<?php echo $key;?>
							</div>
							<div class="col-xs-4">
								<?php echo $arrayResults[$key];?>
							</div>
							<div class="col-xs-4">
								<b><?php echo "+ ".$value." pts"?></b>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>	
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span><?php echo $partido->fecha->format('d-m-Y');?></span>
					<span class="hidden-xs"><?php echo $partido->fecha->format('H:i');?></span>
					<?php if($partido->result1 !== NULL) { ?>
						<a class="pull-right" href="#" data-toggle="modal" data-target="#results-<?php echo $partido->id; ?>">Pts</a>
					<?php } ?>
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
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
