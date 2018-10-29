<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db-ta8"; 
$konek = new mysqli($servername, $username, $password, $database);

if ($konek->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>