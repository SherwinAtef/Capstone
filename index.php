

<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta charset="utf-8">
<link rel="icon" href="website image/HomepagePortal_Custodes_Static_EM.png">
<title>Adeptus Custodies Army Builder</title>

<link href="Stylesheet.css" rel="stylesheet"/>
<link href="bootstrap.css" rel="stylesheet"/>
 

<link rel="dns-prefetch" href="//fonts.googleapis.com">
 <link rel="dns-prefoetch" href="//ajax.googleapis.com">


</head>

<body>

<header>
	<div class="fullscreen-bg">
    <video loop muted autoplay poster="" class="fullscreen-bg__video">
        <source src="website image/HomepagePortal_Custodes_Static_BGM.mp4" type="video/mp4">
  
  		<source src="website image/HomepagePortal_Custodes_Static_BGM.ogg" type="video/ogg">
  		
  		<source src="website image/HomepagePortal_Custodes_Static_BGM.webm" type="video/webm">
    </video>
    
</div>

 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Adeptus Custodies Army Builder</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
         
          <?php
// Associative array to display 2 types of errr messages.
              
require 'database_config.php';
session_start();
error_reporting(0);

			$role = $_SESSION['sess_userrole'];

			if(!isset($_SESSION['sess_userrole']) && $role!="null"){
				echo '     	<li class="nav-item">
            <a  class="nav-link" href="signup.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Sign In</a>
          </li>';
			}elseif ($_SESSION['sess_userrole'] == "user") {
				echo '<li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>';
			
			}


    
               ?>
          
        </ul>
      
    		
      </div>
    </nav>
</header>




    <div ckass="container-fluid">
    	
    	<div class="main"> 
    	
			<iframe id="Builder" src="armybuilder.php" scrolling="yes" ></iframe>
      
     

      		<div class="col-sm-3">

			</div>
    	</div>
    
    </div>



    
<footer >
	<p class="foot"><em>
		This website is unoffical and not affiliated with Games Workshop
		
	</em></p>
</footer>

	<script src="./javascript/jquery-3.3.1.slim.min.js.download" ></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./javascript/popper.min.js.download"></script>
    <script src="./javascript/bootstrap.min.js.download"></script>
  


</body>


</html>


