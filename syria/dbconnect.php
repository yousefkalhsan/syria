<?php 
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "db_link";

$db = mysqli_connect($hostname, $username, $password, $database);
if(mysqli_connect_errno()) {
	die("Failed to connect to MySQL: ". mysqli_connect_error());
}
?>