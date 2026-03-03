<!-- root folder php file -->

<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to homepage
require_once 'includes/config.php';
header("Location: " . BASE_URL . "index.php");
exit;

