<?php $filename = str_replace(".php", "", basename($_SERVER["SCRIPT_NAME"])); ?>

<!-- Navigation -->
<div class="navbar navbar-inverse navbar-fixed-top" id="navigation">
	<div class="navbar-inner" id="navigation">
        <div class="container">
        	
          	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style="margin-top:25px; margin-right:20px;">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            </a>
          
            <div class="nav-collapse collapse">
            	
                
            	<ul class="nav pull-right">
			        <li <?php if ($filename == "index") echo("class='active'"); ?>><a href='index.php'>Home</a></li>
			        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">App<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li <?php if ($filename == "app_waypoint.php") echo("class='active'"); ?>><a href='app_waypoint.php'>PHP</a></li>
                    <li <?php if ($filename == "app_waypoint.php") echo("class='active'"); ?>><a href='app_waypoint.php'>Play</a></li>
                    <li <?php if ($filename == "app_waypoint.php") echo("class='active'"); ?>><a href='app_waypoint.php'>GWT</a></li>
                  </ul>
                </li>
			        <li <?php if ($filename == "userguide") echo("class='active'"); ?>><a href='userguide.php'>User Guide</a></li>
			        <li <?php if ($filename == "screenshots") echo("class='active'"); ?>><a href='screenshots.php'>Screenshots</a></li>
			        <li <?php if ($filename == "app_map") echo("class='active'"); ?>><a href='app_map.php'>Map</a></li>
			        <li <?php if ($filename == "about") echo("class='active'"); ?>><a href='about.php'>About</a></li>
			        <li <?php if ($filename == "contact") echo("class='active'"); ?>><a href='contact.php'>Contact</a></li>
		        </ul>
		    </div>
        </div>
    </div>
</div>