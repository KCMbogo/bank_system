<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) echo "Error";