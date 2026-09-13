<?php

// Example database connection settings.
// Copy this file as database.php and enter your local credentials.

$host = "localhost";
$username = "YOUR_DATABASE_USERNAME";
$password = "YOUR_DATABASE_PASSWORD";
$database = "sdc342_project";

// Create the database connection.
$conn = new mysqli($host, $username, $password, $database);

// Check the connection.
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

?>