<?php
// Database credentials (configuration) for XAMPP default settings
$servername = "localhost"; // Usually 'localhost' for XAMPP (host)
$username = "root";        // Default XAMPP MySQL username
$password = "";            // Default XAMPP MySQL password is empty
$dbname = "healthadvicegroup_db"; // **CHANGE THIS** to the name you created in phpMyAdmin

// Create connection (initlising MYSQL server connection on XAMPP website server host)
// --- Step 1: Connect to MySQL server WITHOUT specifying a database ---
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    // Stop the script and display an error if connection fails
    die("Connection failed: " . $conn->connect_error);
}

// Optional: You can add an echo here for testing if the connection is successful,
// but it's often better to just let the script run silently if successful.
// echo "Connected successfully!"; only keep for the first time creating it

// Note: We don't close the connection here, we leave it open so other files can use $conn

?>

