<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPasswor = "";
$dbName = "users";

$conn = mysqli_connect($serverName,$dbUsername,$dbPasswor,$dbName);

if(!$conn){
    die("Connection faild: " . mysqli_connect_error());
}
