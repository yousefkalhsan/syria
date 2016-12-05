<?php 
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "DB_syria";

$db = mysqli_connect($hostname, $username, $password, $database);
if(mysqli_connect_errno()) {
	echo "string";
	die("Failed to connect to MySQL: ". mysqli_connect_error());
}
?>