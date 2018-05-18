 <?php 
	require 'database_config.php';
			


if(isset($_POST['Username']))
{ $username = $_POST['Username'];}

if(isset($_POST['Password']))
{ $password = $_POST['Password'];}

if(isset($_POST['Password1']))
{ $password1 = $_POST['Password1'];}

if($password == $password1){
				$hashed = password_hash($password, PASSWORD_DEFAULT);

$q = "INSERT into user (Username, Password, Role) VALUES ('$username', '$hashed', 'user')";
$query = $db->prepare($q);
$query->execute();
	
	header('Location: signup.php?err=3');
	exit();
}

else {
	

		header('Location: signup.php?err=1');
		exit();
	
}
		?>