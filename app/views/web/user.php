
<div class="row">
  <div class="col-xs-12 col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <span>User <?php echo $user->username; ?></span>
      </div>
      <div class="panel-body">
        <form data-toggle="validator" role="form" accept-charset="UTF-8" action="register_update" method="POST">
          <?php if(isset($_GET['error'])){ ?>
            <div class="error">
              Something went wrong... please, talk with some administrator !
            </div>
          <?php } ?>
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
                          <div class="col-xs-12 col-xs-8 col-xs-offset-2">
                            <div class="row">
                              <div class="col-xs-3 col-xs-1">
                                <img class="flag" src="<?php echo MEDIA_PATH."/images/flag/".strtolower($team1->code);?>.png" alt="<?php echo $team1->name;?>"/>
                              </div>
                              <div class="col-xs-6 col-xs-4">
                                <span class="team"><?php echo $team1->name;?></span>  
                              </div>
                              <div class="col-xs-3 col-xs-1">
                                <input name="p<?php echo $partido->id; ?>.result1" type="text" required pattern="^\d+$" maxlength="2" value="<?php echo $user->getPronostic($partido->id)->result1; ?>">
                              </div>
                              <div class="col-xs-push-9 col-xs-3 col-xs-push-0 col-xs-1">
                                <input name="p<?php echo $partido->id; ?>.result2" type="text" required pattern="^\d+$" maxlength="2" value="<?php echo $user->getPronostic($partido->id)->result2; ?>">  
                              </div>
                              <div class="col-xs-6 col-xs-4">
                                <span class="team"><?php echo $team2->name;?></span>  
                              </div>
                              <div class="col-xs-pull-9 col-xs-3 col-xs-push-0 col-xs-1">
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
              <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

