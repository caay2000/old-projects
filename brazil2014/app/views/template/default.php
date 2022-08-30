<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="<?php echo MEDIA_PATH; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<link href="<?php echo MEDIA_PATH; ?>/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    	<link href="<?php echo MEDIA_PATH; ?>/css/datepicker.css" rel="stylesheet" media="screen">
    	<link href="<?php echo MEDIA_PATH; ?>/css/web.css" rel="stylesheet" media="screen">
    	
	    <script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/jquery-1.10.2.js"></script>
	    
	    <script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/bootstrap.js"></script>
	    <script type="text/javascript" src="<?php echo MEDIA_PATH; ?>/js/bootstrap-datepicker.js"></script>
	</head>
	<body>
	
	    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?php echo PAGE_ROOT; ?>/">Comet GC - France 2016</a>
	        </div>
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <?php if(!isset($page)) $page = null; ?>
	            <li <?php if($page == "register") echo 'class="active"';?>><a href="<?php echo PAGE_ROOT; ?>/register">Register</a></li>
	            <li <?php if($page == "calendar") echo 'class="active"';?>><a href="<?php echo PAGE_ROOT; ?>/calendar">Calendar</a></li>
	            <li <?php if($page == "classification") echo 'class="active"';?>><a href="<?php echo PAGE_ROOT; ?>/classification">Classification</a></li>
            	<?php if(isset($_SESSION['admin'])){ ?>
            		<li <?php if($page == "admin") echo 'class="active"';?>><a href="<?php echo PAGE_ROOT; ?>/admin">Admin</a></li>
            	<?php } else if(isset($_SESSION['user'])){ ?>
            		<li <?php if($page == "user") echo 'class="active"';?>><a href="<?php echo PAGE_ROOT; ?>/user">Profile</a></li>
            	<?php } else { ?>
            		<li <?php if($page == "login") echo 'class="active"';?>><a href="<?php echo PAGE_ROOT; ?>/login">Login</a></li>
            	<?php } ?>
            	<?php if(isset($_SESSION['admin']) || isset($_SESSION['user'])) { ?>
	            	<li><a href="<?php echo PAGE_ROOT; ?>/logout">Logout</a></li>
				<?php } ?>
	          </ul>
	          <?php /* 
	        	<div class="pull-right logos hidden-sm">
	        		<a href="http://www.kiwibcn.com/" target="_blank"><img src="<?php echo MEDIA_PATH; ?>/images/logokiwi2-inv.png"/></a>
	        	</div>
	        	*/
	        	?>
	          	<div class="pull-right logos hidden-sm">
	          		<a href="http://www.cometgc.com/" target="_blank"><img src="<?php echo MEDIA_PATH; ?>/images/logocometgc.png"/></a>
	          	</div>
	        </div>
	      </div>
	    </div>
	
	    <div class="container">
	
			<?php echo $view; ?>
	
	    </div>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-9486467-14', 'kiwibcn.com');
	  ga('send', 'pageview');
	
	</script>
	</body>
</html>

