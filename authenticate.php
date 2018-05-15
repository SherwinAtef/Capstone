<?php
require 'database_config.php';
session_start();

if(isset($_POST['username']))
{ $username = $_POST['username'];}

if(isset($_POST['password']))
{ $password = $_POST['password'];}


$q = 'SELECT * FROM user WHERE username=:username';
$query = $db->prepare($q);
$query->execute(array(':username' => $username));
$row = $query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount() == 0)
{ header('Location: login.php?err=1');}
else{
	
	$hashedPwdCheck = password_verify($password, $row['password']);
	
	if($hashedPwdCheck == 0){
		header('Location: login.php?err=1');
		exit();
	}elseif($hashedPwdCheck == 1){
		
		

	$_SESSION['sess_user_id'] = $row['id'];
	$_SESSION['sess_username'] = $row['username'];
	$_SESSION['sess_userrole'] = $row['role'];
	
	if($_SESSION['sess_userrole'] == "user"){
		header('Location: index.php');
	}
			}
	
	
	
}?>