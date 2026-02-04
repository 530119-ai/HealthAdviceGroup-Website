<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/assets.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Health Advice Group</title>

  
  <!-- Centralised Bootstrap CSS -->
  <link rel="stylesheet" href="<?= BOOTSTRAP_CSS ?>">

  <!-- Global styles -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
  
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="/index.php">Health Advice Group</a>
      <div class="navbar-nav">
        <a class="nav-link" href="/weather.php">Weather</a>
        <a class="nav-link" href="/advice.php">Advice</a>
        <a class="nav-link" href="/consultation.php">Consultation</a>
      </div>
    </div>
  </nav>
</header>

<main class="container mt-4">
