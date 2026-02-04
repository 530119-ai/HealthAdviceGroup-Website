<<<<<<< HEAD
<?php
$host = "localhost";
$user = "root"; 
// local IP address
$pass = "";
$db   = "health_advice";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Database connection failed");
}

=======
<?php
$host = "localhost";
$user = "root"; 
// local IP address
$pass = "";
$db   = "health_advice";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Database connection failed");
}

>>>>>>> 0e844d0 (Initial prototype for Health Advice Group)
