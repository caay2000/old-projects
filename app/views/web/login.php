<div class="row">
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="panel-title">Please sign in</h3>
		 	</div>
		  	<div class="panel-body">
		    	<form accept-charset="UTF-8" action="login_check" method="POST">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Username" name="user" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="psw" type="password">
			    		</div>
			    		<?php if(isset($_GET['error'])) { ?>
			    		<div class="form-group error">
			    			Authentication error
			    		</div>
			    		<?php } ?>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
		      	</form>
		    </div>
		</div>
	</div>
</div>
