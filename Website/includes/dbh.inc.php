<?php

$serverName = "localhost:3307";
$dBUsername = "root";
$dbPassword = "";
$dBName = "loginsystemstaff";

$conn = mysqli_connect($serverName, $dBUsername, $dbPassword, $dBName);

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
?>
