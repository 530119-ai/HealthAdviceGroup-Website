

<?php
// Include reusable header
require_once 'includes/header.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
    <!-- alternative boostrap styled CSS method (package manager compiled file extraction individual .text js an css files), otherwise use CDN ->
    CSS: <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    JS: <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    -->
    <!-- The compiled Bootstrap CSS and JavaScript files were used 
      rather than source files to ensure browser compatibility, 
      performance, and ease of maintenance. -->
    <!-- Compiled boostrap vs source files URL boostrap -->

</head>
<body>

<h1 class="mb-4">Welcome to Health Advice Group</h1>

<p class="lead">
  Health Advice Group provides information and support to help individuals
  make informed decisions about environmental health risks.
</p>

<div class="row mt-4">
  <!-- Weather & Environmental Health -->
  <div class="col-md-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Weather & Air Quality</h5>
        <p class="card-text">
          View local weather forecasts and air quality information to help
          manage health risks related to environmental conditions.
        </p>
        <a href="<?= BASE_URL ?>weather.php" class="btn btn-success">View Weather</a>
      </div>
    </div>
  </div>

  <!-- Health Advice -->
  <div class="col-md-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Health Advice</h5>
        <p class="card-text">
          Access guidance on managing conditions such as asthma, hay fever,
          and extreme temperature exposure.
        </p>
        <a href="advice.php" class="btn btn-success">Get Advice</a>
      </div>
    </div>
  </div>

  <!-- Consultation & Risk Assessment -->
  <div class="col-md-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Consultation & Risk Assessment</h5>
        <p class="card-text">
          Request personalised advice or submit details for a home
          environmental risk assessment.
        </p>
        <a href="consultation.php" class="btn btn-success">Request Consultation</a>
      </div>
    </div>
  </div>
</div>

<hr class="my-5">

<section>
  <h2>Our Mission</h2>
  <p>
    Our mission is to support communities by providing clear, accessible
    information on environmental health issues, helping people reduce risk
    and improve wellbeing.
  </p>
</section>

<?php
// Include reusable footer
require_once 'includes/footer.php';
?>

    <!-- <button class="btn btn-success">Bootstrap Test</button>
    <script src="bootstrap/js/boostrap.bundle.min.js"></script> -->
</body>
</html>

<!-- ✔ Maintainability
A third-party developer can immediately understand the page structure -->
<!-- BOOTSTRAP GRID COLUMNS: For each grid configuration and layout cards must have columns in a row and rows must 
 be in a container (grid system/ horizonal wrapper for alignment)  -->
<!-- class="row": This is part of Bootstrap's Grid System. It creates a horizontal 
 wrapper that holds columns (e.g., col-md-6) and ensures they align properly on the page. -->


<!-- Final Maintainable Folder Structure (Folder organisation) ^

     ✔ maintainability
     ✔ reusability
     ✔ scalability

    "produce code that can be maintained by a third party", Centralised configuration -> configuration in one place using outside 
    sources (included modual .php files such as footer.php) 

    Separation of concerns

    Reusable components

    Centralised configuration (configured all in one place or file thats reusable components for each 
    web page that requires it suchas the footer and header.php includes folder/.php file)

    Minimal duplication

    Easier debugging and updates
    -->

    <!-- The solution was developed using a modular structure with reusable components such as headers, footers, 
     database connections (seperation of data dependencies inbetween php and html), and shared functions. This approach improves 
     maintainability, reduces code duplication, and enables third-party developers to understand, modify, 
     and extend the system efficiently. -->
    
    <!-- Why this is called centralised configuration

It is considered centralised configuration because all key setup and settings are stored in 
one dedicated file, rather than being repeated across multiple pages.

For example, the database connection details are kept in db.php inside the 
includes folder. Every page that needs database access simply includes this file. -->

<!-- The configuration is handled all into one dedicated file rather than spread across mutiple and repeated for each web page -->

<!-- explicitly demonstrates modular includes for layout and logic and Change layout without touching logic,
 Update security in ONE PLACE
  so changing or using the single dedicated file with all key setup and 
 settings can be reused anywhere without inconsistencies, because every web page uses the 
 same includes/.php file it shares it which means it can be changed and 
 accessed all in one place for all web pages to use , THEREFORE Centralisd (one stop one location OR centered 
 around one dedicated file) Configuration-->
 <!-- 
// Include reusable footer
require_once 'includes/footer.php'; keyword require_once is used for each included dedicated 
file on mutiple pages all changes made in one place (the single dedicated include file shared across web pages)
 -->
<!-- >>>>>>> 4bab416 (Update index.php) -->
