<?php 

$ini = parse_ini_file("connect.ini",true);

$current = $ini['currentEnv']['data'];
//$db_host 		='localhost';
//$db_user		='root';
//$db_pass		='';
//$db_database	='lab3';

$db_host 		=$ini[$current]['db_host'];
$db_user		=$ini[$current]['db_user'];
$db_pass		=$ini[$current]['db_pass'];
$db_database	=$ini[$current]['db_database'];


$db = new PDO('mysql:host=' .$db_host.';
				dbname='.$db_database,
			 $db_user, $db_pass);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db1 = mysqli_connect( $db_host,$db_user,$db_pass,$db_database);

if(mysqli_connect_errno()){
	echo "failed to connect to MySQL: " . mysqli_connect_error();
}
?>