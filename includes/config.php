<?php
define('BASE_URL', '/HealthAdviceGroup-Website-main/');
?>

<?php
// Start session for all pages
session_start();

// config.php file

// Start (MYSQLI connection files) session for all pages or in other words initilise mysql queries


define('DB_HOST', 'localhost');
define('DB_NAME', 'healthadvicegroup_db'); 
define('DB_USER', 'root');
define('DB_PASS', '');

// ^^^ think about commenting out now redundant code as using conn.php file instead and mysqli 
// method delete file and take the default initilised URL method only to the conn.php file move it.


// Base URL: This MUST match the folder name you put inside C:\xampp\htdocs\
// define('BASE_URL', '/HealthAdviceGroup-Website-main/'); // <-- Use this exact path
?>
<!-- // Remove the duplicated define('BASE_URL', ...); line that follows this one


// define('DB_HOST', 'localhost');
// define('DB_NAME', 'healthadvicegroup_db'); // ← THIS is the important change
// define('DB_USER', 'root');
// define('DB_PASS', '');

// // Database configuration
// define('DB_HOST', 'localhost');
// define('DB_NAME', 'health_advice_group'); old code not my XAMPP default wasnt naming convention base name.. (the dbname i selected before it changed)
// define('DB_USER', 'root');
// define('DB_PASS', '');

// Base URL (fixes your navigation issue too) -->
