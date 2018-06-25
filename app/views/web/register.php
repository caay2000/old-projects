<div class="row">
  <div class="col-xs-12 col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <span>Register</span>
      </div>
      <div class="panel-body">
        <form data-toggle="validator" role="form" accept-charset="UTF-8" action="register_save" method="POST">
          <?php if(isset($_GET['error'])){ ?>
            <div class="error">
              Something went wrong... maybe your username already exists... please, change it or talk with some administrator !
            </div>
          <?php } ?>
          <fieldset>
            <div class="form-group">
              <input class="form-control" placeholder="Username" name="user" type="text" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password" name="psw" type="password" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Email" name="email" type="email" required>
            </div>
          </fieldset>
          <div class="row">
            <div class="col-xs-12">
              <fieldset>
                <div class="row list-partido">
                  <?php 
                    foreach($partidos as $partido){
                      $team1 = $partido->team1;
                      $team2 = $partido->team2;
                  ?>
                    <div class="col-xs-12">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="row">
                              <div class="col-xs-3 col-sm-1">
                                <img class="flag" src="<?php echo MEDIA_PATH."/images/flag/".strtolower($team1->code);?>.png" alt="<?php echo $team1->name;?>"/>
                              </div>
                              <div class="col-xs-6 col-sm-4">
                                <span class="team"><?php echo $team1->name;?></span>  
                              </div>
                              <div class="col-xs-3 col-sm-1">
                                <input name="p<?php echo $partido->id; ?>.result1" type="text" required pattern="^\d+$" maxlength="2">
                              </div>
                              <div class="col-xs-push-9 col-xs-3 col-sm-push-0 col-sm-1">
                                <input name="p<?php echo $partido->id; ?>.result2" type="text" required pattern="^\d+$" maxlength="2">  
                              </div>
                              <div class="col-xs-6 col-sm-4">
                                <span class="team"><?php echo $team2->name;?></span>  
                              </div>
                              <div class="col-xs-pull-9 col-xs-3 col-sm-push-0 col-sm-1">
                                <img class="flag" src="<?php echo MEDIA_PATH."/images/flag/".strtolower($team2->code);?>.png" alt="<?php echo $team2->name;?>"/>  
                              </div>                            
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </fieldset>
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
