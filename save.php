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
	$txt = "Test\n";
	fwrite($myfile, $txt);
	fclose($myfile);
		?>		
		
	
<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);

$conn = new mysqli("myServer", "myUser", "myPassword", "Northwind");
$result = $conn->query("SELECT name FROM ".$obj->table." LIMIT ".$obj->limit);
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>