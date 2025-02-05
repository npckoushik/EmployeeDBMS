<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "batch7";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>