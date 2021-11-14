<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "db_uts";

$db = mysqli_connect($server, $user, $password, $database);

if (!$db) {
	die("Gagal tersambung dengan database: " . mysqli_connect_error());
}
?>