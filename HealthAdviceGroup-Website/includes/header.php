<!-- NO duplicate Bootstrap (files are configured for web pages included content and links and maintainable and repeated) -->
<!-- 3 files accordingly work in strict syncronisation with requirements for a modular web design approach across all website pages (reset the architecture)-->
<!-- No hard-coded Bootstrap. Use the configuration / configurated prepared files -->
<?php
require_once __DIR__ . '/config.php'; //initilize all sessions, keep open mysql connection files 
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

  <!-- Global styles -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/styles.css">
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
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>weather.php">Weather</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>advice.php">Health Advice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>dashboard.php">Dashboard</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container mt-4">
