<?php 
	if(isset($_GET['expired'])){
?>
	<div class="modal fade" id="register_expired">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Register Expired</h4>
				</div>
				<div class="modal-body">
					<p>The deadline to do any change and pay the fees have expired.<br/> It was <b><?php echo date_format(new DateTime(DATE_EXPIRE), 'l jS F Y \a\t H:i'); ?></b> (GTM+1).</p>
				</div>
		    </div>
		</div>
	</div>
	<script type="text/javascript">
	    $(window).load(function(){
	        $('#register_expired').modal('show');
	    });
	</script>
<?php 	
	}
?>

<div class="jumbotron">
  <h1>Russia 2018</h1>
  <h2>Comet Global Consulting, a Merkle Company</h2>
  <div class="row">
  	<div class="col-xs-12">
  		<h3><b>1.</b> Register in the following URL: <a href="<?php echo PAGE_ROOT; ?>">rpi.kiwibcn.com/russia2018</a> and enter the score for each game.</h3>
  		<p>Now you can modify your results in your <a href="<?php echo PAGE_ROOT; ?>/user">profile</a>.</p>
  	</div>
  </div>
  <div class="row">
    	<div class="col-xs-12">
    		<h3><b>2.</b> Maximum number of points per game is 7.</h3>	
    	</div>
	</div>
	<div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-5">
			<p>3 points for guessing the result (win or tie)</p>
			<p>1 point for guessing the goal's number of a team.</p>
			<p>2 extra points for guessing perfect result (in this case 7 points in total)</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-7">
			<table class="table table-bordered table-condensed">
				<thead>
					<tr>
						<th>Prediction</th>
						<th>Real</th>
						<th>Points</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2-1</td>
						<td>0-0</td>
						<td>0 Pts.</td>
					</tr>
				<tr>
						<td>3-1</td>
						<td>0-1</td>
						<td>1 Pts.</td>
					</tr>
					<tr>
						<td>3-1</td>
						<td>1-0</td>
						<td>3 Pts.</td>
					</tr>
					<tr>
						<td>3-0</td>
						<td>2-0</td>
						<td>4 Pts.</td>
					</tr>
					<tr>
						<td>3-1</td>
						<td>3-1</td>
						<td>7 Pts.</td>
					</tr>
				</tbody>
			</table>
  </div>
  <div class="row">
	<div class="col-xs-12">
  		<h3><b>3.</b> The cost of the pool is 10&euro; or 10&pound; or 10$ <span class="italic">(Choose your currency)</span></h3>
  	</div>
  </div>
  <div class="row">
	<div class="col-xs-12">
  		<h3><b>4.</b> There are awards for the three first places distributed as below: <br/>70 % first place, 20 % second place, 10 % third place.<br/>In tie case the award will be divided in equal parts.</h3>
  </div>
  </div>
  <div class="row">
	<div class="col-xs-12">
	  	<h3><b>5.</b> The deadline to do any change and pay the fees is <?php echo date_format(new DateTime(DATE_EXPIRE), 'l jS F Y \a\t H:i'); ?> (GTM+1).<br/>Points of contact to clarify any doubt and receive the money are:</h3>
	  		<p>***************** <span class="italic">(*****************@*****************)</span></p>
	  		<p>***************** <span class="italic">(*****************@*****************)</span></p>
	  		<p>***************** <span class="italic">(*****************@*****************)</span></p>
	  		<p>***************** <span class="italic">(*****************@*****************)</span></p>
	</div>
  </div>
  <div class="row">
	<div class="col-xs-12">
  		<h3><b>6.</b> All participants will receive before the start of the World Cup via email a list with all the entered pools and will have access during the event to the summary with the points for each participant.</h3>
  	</div>
  </div>
  
  <div class="row" style="margin-bottom: 20px;">
	<div class="col-xs-12">
  		<h3><b>7.</b> Thank you for participating</h3>
  	</div>
  </div>
  <div class="row">
	  <div class="col-xs-12">
	  	<a href="<?php echo PAGE_ROOT; ?>/register" class="btn btn-primary btn-lg" role="button">Register</a>
	  </div>
  </div>

</div>

