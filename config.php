<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$servername = "localhost"; // Server name
$username = "root";        // Default MySQL username
$password = "magic123";    // Your MySQL password
$dbname = "car_shutter";   // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Notify connection success (for debugging, remove in production)
echo "Database connection successful!";
?>
