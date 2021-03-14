<?php
$databaseHost = "localhost";
$databaseName = "kampus";
$databaseUsername = "root";
$databasePassword = "";

$con = mysqli_connect("$databaseHost","$databaseUsername","$databasePassword","$databaseName");
if (mysqli_connect_errno()) {
	echo "<h1>Koneksi Database Error : ". mysqli_connect_errno()."</h1>";
}
?>