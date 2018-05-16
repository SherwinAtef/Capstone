<?php
require 'database_config.php';
session_start();

if(isset($_POST['File']))
{ $File = $_POST['File'];}




$q = 'SELECT * FROM list WHERE userid=:userid';
$query = $db->prepare($q);
$query->execute(array(':username' => $username));
$row = $query->fetch(PDO::FETCH_ASSOC);

	$File = stripslashes($_REQUEST['File']);
	$File = mysqli_real_escape_string($db1,$File);

		
		

	$_SESSION['sess_user_id'] = $row['id'];
	$_SESSION['sess_username'] = $row['username'];
	$_SESSION['sess_userrole'] = $row['role'];
	

			
	
	
	
?>