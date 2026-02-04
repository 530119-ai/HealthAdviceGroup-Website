<<<<<<< HEAD
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}
=======
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}
>>>>>>> 0e844d0 (Initial prototype for Health Advice Group)
// check if the user is logged in