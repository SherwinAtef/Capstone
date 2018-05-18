<?php
require 'database_config.php';
session_start();

if(isset($_POST['Username']))
{ $username = $_POST['Username'];}

if(isset($_POST['Password']))
{ $password = $_POST['Password'];}


$q = 'SELECT * FROM user WHERE Username=:Username';
$query = $db->prepare($q);
$query->execute(array(':Username' => $username));
$row = $query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount() == 0)
{ header('Location: login.php?err=1');}
else{
	
	$hashedPwdCheck = password_verify($password, $row['Password']);
	
	if($hashedPwdCheck == 0){
		header('Location: login.php?err=1');
		exit();
	}elseif($hashedPwdCheck == 1){
		
		

	$_SESSION['sess_user_id'] = $row['Id'];
	$_SESSION['sess_username'] = $row['Username'];
	$_SESSION['sess_userrole'] = $row['Role'];
	
	if($_SESSION['sess_userrole'] == "user"){
		header('Location: index.php');
	}
			}
	
	
	
}?>