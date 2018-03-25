<?php
/*
All scripts and code are by ThatZiv (Zua)
*/

$websitetitle = "Store Database";
$websiteheading = "Store Inventory";


/////////////////DB CONFIG///////////////////
$dbServername= "localhost";
$dbUsername = "root";
$dbPassowrd = "";
$dbName = "store";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassowrd, $dbName);