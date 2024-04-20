<?php
global $conn;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB_Ops";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Create connection
if(!$conn = mysqli_connect($servername, $username, $password, $dbname))
{
	die("failed to connect!");
}

