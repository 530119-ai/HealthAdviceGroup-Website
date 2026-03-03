<!-- NO duplicate Bootstrap (files are configured for web pages included content and links and maintainable and repeated) -->
<!-- 3 files accordingly work in strict syncronisation with requirements for a modular web design approach across all website pages (reset the architecture)-->
<!-- No hard-coded Bootstrap. Use the configuration / configurated prepared files -->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
require_once __DIR__ . '/config.php'; //initilize all sessions, keep open mysql connection files (may need to switch to conn.php file)
require_once __DIR__ . '/assets.php'; //code library and pack manager
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <!-- Metadata is essential for organizing digital assets, enabling search functionality, and ensuring long-term usability of data.  -->
   <!-- "self-referential" data increase visiblity with straightfoward keyword descriptions content context in a way that search engines can 
    understand by filtering a catalog and organising data/ large information-->
  <title>Health Advice Group</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Centralised Bootstrap CSS -->
  <link rel="stylesheet" href="<?= BOOTSTRAP_CSS ?>"> 
<!-- parameterised method default centralised configuration file directory-->
  <!-- Global styles -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/styles.css"> 
<!-- unparameterised method only use BASE_URL method then "hardcodes directory, without centralised configuration (like assets.php file)" -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?= BASE_URL ?>index.php">Health Advice Group</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>index.php">Home</a> 
        </li>
        <!-- BASE_URL = absloute path = actual assigned definitive path vs 
         before was using the relative path = current or working file path location or base root 
         (xampp server program directory) being relative to itself-->
         <!-- use case / previous example changed <li class="nav-item">
          <a class="nav-link" href="index.php">index/home</a> -->
          <!-- Use absolute (or root-relative) when linking across hosts or to avoid ambiguity. 
          "If it comes from your domain - relative, if it’s from someone else’s domain - absolute." -->
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>weather.php">Weather</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>advice.php">Health Advice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>dashboard.php">Dashboard</a>
        </li>

      <!-- 🔐 Login link -->
      <!-- Detect Session-based dynamic nav bar login > logout toggle. Global architecture.  -->

        <?php if (isset($_SESSION['user_id'])): ?>
        <!--Example echo output: Welcome, admin@example.com
            Logout -->
            <!--Conditonal session-based management > Show user-specific content -->
    <li class="nav-item">
        <span class="nav-link">
            Welcome, <?= htmlspecialchars($_SESSION['user_email']) ?> 
        </span>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL ?>logout.php">Logout</a>
    </li>

<?php else: ?>

    <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL ?>login.php">Login</a>
    </li>

<?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Global navigation (header.php) -->
<!-- Login is site-wide, not page-specific

Users expect Login / Logout in the top navigation

Only needs to be added once

Automatically appears on every page -->
<!-- Exam-safe: demonstrates DRY (Do Not Repeat Yourself) + separation of concerns -->

<main class="container mt-4">
