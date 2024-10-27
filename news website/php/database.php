<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news_website";

// Create a new connection instance
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to utf8mb4 for security and compatibility
$conn->set_charset("utf8mb4");
?>
