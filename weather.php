<?php
// Reusable layout
require_once 'includes/header.php';
?>

<h1 class="mb-4">Weather & Environmental Health</h1>

<p class="lead">
  Use local weather information to make informed health decisions,
  particularly during extreme temperatures or poor air quality.
</p>

<section class="mt-4">
  <form onsubmit="getWeather(); return false;" class="row g-3">
    <div class="col-md-8">
      <label for="city" class="form-label">Enter your location</label>
      <input
        type="text"
        id="city"
        class="form-control"
        placeholder="e.g. London"
        required
        aria-label="City or location input"
      >
    </div>

    <div class="col-md-4 d-flex align-items-end">
      <button type="submit" class="btn btn-success w-100">
        Get Weather Information
      </button>
    </div>
  </form>
</section>

<section class="mt-5">
  <div id="weatherResult" aria-live="polite"></div>
</section>

<!-- Page-specific JavaScript -->
<script src="assets/js/weather.js"></script>

<?php
// Reusable footer
require_once 'includes/footer.php';
?>
