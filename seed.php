<!-- 👉 Delete (after use) seed.php

Reason you can mention in documentation:

The seed script is removed after execution to prevent unauthorized account creation in production. -->

<?php
require_once 'includes/conn.php';

// Select the database
$conn->select_db($dbname);
//Make sure to initiate in the browser URL xampp server directory in the includes folder.

// 1️⃣ Create users table if not exists 
// This table must be created and must include hashed passwords for users (only needs to be seeded or initlised once.)
// $sql_create_users = "
// CREATE TABLE IF NOT EXISTS users (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     email VARCHAR(100) NOT NULL UNIQUE,
//     password VARCHAR(255) NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql_create_users) !== TRUE) {
//     die("Error creating users table: " . $conn->error);
// }

// 2️⃣ / 1️⃣ Create test user (at least ONE user in your database > password_verify())
$test_email = "admin@example.com";
$test_password = "password123";

// Hash the password securely
$hashed_password = password_hash($test_password, PASSWORD_DEFAULT); //default algorithm method for hashing = PASSWORD_DEFAULT

// Check if user already exists
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $test_email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
// Creating a test record in the "users" table with an email and password hashed prepared statement for security.
    $insert_stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $insert_stmt->bind_param("ss", $test_email, $hashed_password);
    $insert_stmt->execute();

    echo "Test user created successfully.<br>";
    echo "Email: admin@example.com<br>";
    echo "Password: password123<br>";

    $insert_stmt->close();

} else {
    echo "Test user already exists.";
}

$stmt->close();
$conn->close();
?> 
<!-- The database connection file is intentionally limited to establishing a server connection. 
Database creation and schema initialization are handled separately in tbl.php to maintain separation of concerns. 
Seed data insertion is handled independently after database selection to maintain modular design. -->
<!-- true purposed seeder -->