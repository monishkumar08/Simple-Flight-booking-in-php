<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flightbooking";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} 
?>