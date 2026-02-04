<<<<<<< HEAD
<?php

function sanitize($data) {
  return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function isLoggedIn() {
  return isset($_SESSION['user_id']);
}
=======
<?php

function sanitize($data) {
  return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function isLoggedIn() {
  return isset($_SESSION['user_id']);
}
>>>>>>> 0e844d0 (Initial prototype for Health Advice Group)
// PHP database backend processing , validation, security.