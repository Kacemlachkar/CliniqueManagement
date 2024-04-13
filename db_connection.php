<?php
// Database connection params
$servername = "localhost";
$username = "root"; // Change this if you have a different username
$password = ""; // Change this if you have set a password for MySQL
$dbname = "clinique"; // Change this if your database name is different

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
