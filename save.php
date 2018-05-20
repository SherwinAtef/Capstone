<?php 
			
				require 'database_config.php';
				session_start();
				

				$id = $_SESSION['sess_user_id'];
			
			
			if(isset($_POST['liFile']))
{ $liFile = $_POST['liFile'];}


$q = "INSERT into lists (File, UserID) VALUES ('$liFile', '$id')";
$query = $db->prepare($q);
$query->execute();

		
	if($_SESSION['sess_userrole'] == "user"){
		header('Location: armybuilder.php');
		echo "<h1>List saved</h1>";
	}
	
	$myfile = fopen("Files/$liFile.php", "w") or die("Unable to open file!");
	

	$HQdeco = json_decode($myJSONHQ);
	fwrite($myfile, $HQdeco + "test");
	
	fclose($myfile);
		?>		
		
	
