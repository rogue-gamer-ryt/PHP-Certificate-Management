<?php
$user = "root";
$pass = "";
$servername="localhost";
$dbname = "mun";
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
?>