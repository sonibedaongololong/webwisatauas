<?php
$servername = "localhost";
$username = "root";
$password = "new_password";
$dbname = "wisata1_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
