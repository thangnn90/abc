<?php 
$serverDB = "localhost";
$userDB = "root";
$passDB = "";
$DBname = "shop";
$conn = mysqli_connect($serverDB, $userDB, $passDB, $DBname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
