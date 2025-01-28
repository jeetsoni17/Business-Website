<?php
// Database connection details
$host = ''; 
$user = ''; 
$password = '';
$database = ''; 

// Create a new connection
$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Close the connection (if needed)
// $conn->close();
?>
