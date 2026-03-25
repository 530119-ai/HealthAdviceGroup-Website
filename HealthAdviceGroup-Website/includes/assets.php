<!-- CODE LIBRARIES / ASSETS Pack manager downloads sources -->

<?php
// Centralised asset configuration

define('BOOTSTRAP_CSS', BASE_URL . 'bootstrap/css/bootstrap.min.css');
define('BOOTSTRAP_JS', BASE_URL . 'bootstrap/js/bootstrap.bundle.min.js');

// duplicated <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> in from header.php in index.php but as its embedded as 
// navigation and in the html head tag (header.php) its become an absloute vs relative path depending on resolution of page depth. 
// this now is the correct architecture without hardcoding but centralised configuration key settings.

// Future-proofing (easy to extend later)
// define('FONT_AWESOME', BASE_URL . 'assets/vendor/fontawesome/css/all.min.css');

?>
