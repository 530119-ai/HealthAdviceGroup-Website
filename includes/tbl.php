<?php
require_once 'conn.php'; 

//Step 1: conn.php file

// --- Step 2: Create the Database if it doesn't exist ---
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database '$dbname' created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// --- Step 3: Select the newly created database to work within it ---
$conn->select_db($dbname);

// --- Step 4: Create the 'consultations' table ---
$sql_create_table = "
CREATE TABLE IF NOT EXISTS consultations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table 'consultations' created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$conn->close(); // Close the connection when done (good practice) 
// It's a good idea to close the connection once this script is done running
?>
