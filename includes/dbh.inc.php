<?php

$serverName = "localhost:3306";
$dBUsername = "mahs_spjontek";
$dBPassword = "mustangs";
$dBName = "mahs_spjontek";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (! $conn) {
    die("Connection failed: " . mysqli_connect_error());
}