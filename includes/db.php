<?php

$host ='localhost';
$dbUsername = "root";
$dbPassword = "";
$dbName = "forma";

$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
