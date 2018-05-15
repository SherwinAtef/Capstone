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
 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


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
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          
         
                      <?php
// Associative array to display 2 types of errr messages.
              
require 'database_config.php';



			$role = $_SESSION['sess_userrole'];

			if(!isset($_SESSION['sess_userrole']) && $role!="null"){
				echo '     	<li class="nav-item">
            <a  class="nav-link" href="signup.php">Sign Up</a>
          </li>
          <li class="nav-item active">
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
    <div class="main">
    
    <?php
// Associative array to display 2 types of errr messages.
               $errors = array( 1=>"Invalid user name or password, Try again",
                                                                 2=>"Please login to access this area" );
               
               //Get the error_id from URL
               $error_id = $_GET['err'];
               if ($error_id == 1)
               {
                              echo '<p class="text-danger">'.$errors[$error_id].'</p>';
               }
               elseif ($error_id == 2)
               {
                              echo '<p class="text-danger">'.$errors[$error_id].'</p>';
               }
               ?>





	<form action="authenticate.php" method="POST" 
class="form-signin col-md-8 col-md-offset-2" role="form">
  
    <h1 class="h3 mb-3 font-weight-normal">Please Log In</h1>  
   <input type="text" name="username" class="form-control" 
                                                            placeholder="Email" required autofocus><br/>
   <input type="password" name="password" class="form-control" 
                                                            placeholder="Password" required><br/>
   <button class="btn btn-lg  btn-block" 
                                                                           type="submit">Sign in</button>
</form>
                  

    </div>


</body>
<footer >
	<p class="foot"><em>
		This website is unoffical and not affiliated with Games Workshop
		
	</em></p>
</footer>
</html>