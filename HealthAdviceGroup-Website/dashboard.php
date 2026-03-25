<?php
require_once 'includes/header.php';
?>

<h1 class="mb-4">Dashboard</h1>

<p class="lead">
  Welcome to your Health Advice Group dashboard.
</p>

<div class="row mt-4">

  <!-- Weather Overview -->
  <div class="col-md-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Weather Overview</h5>
        <p class="card-text">
          Check current weather and environmental conditions that may
          impact health.
        </p>
        <!-- absolute path URL strategy + link + boostrap button class -->
        <a href="<?= BASE_URL ?>weather.php" class="btn btn-success">
          View Weather
        </a>
      </div>
    </div>
  </div>

  <!-- Health Advice -->
  <div class="col-md-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Health Advice</h5>
        <p class="card-text">
          Access environmental health guidance and preventative advice.
        </p>
        <a href="<?= BASE_URL ?>advice.php" class="btn btn-success">
          View Advice
        </a>
      </div>
    </div>
  </div>

  <!-- Consultation Requests -->
  <div class="col-md-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Consultations</h5>
        <p class="card-text">
          Submit or review consultation and risk assessment requests.
        </p>
        <a href="<?= BASE_URL ?>consultation.php" class="btn btn-success">
          Consultation
        </a>
      </div>
    </div>
  </div>

</div>

<hr class="my-5">

<section>
  <h2>About This Dashboard</h2>
  <p>
    This dashboard provides quick access to key Health Advice Group
    features. In later development stages, this area can be expanded
    to show personalised data, recent consultations, and alerts.
  </p>
</section>

<?php
require_once 'includes/footer.php';
?>
