<!-- ✅ Structural consistency

consultation.php now matches:

index.php

weather.php

advice.php

This is exactly what “maintainable by a third party” means. --> 
<!-- Maintainable or maintain it means keep the same up keep it or repeat it keep it consistent and the same not different-->

<?php
require_once 'includes/header.php';
?>

<h1 class="mb-4">Consultation & Risk Assessment</h1>

<p class="lead">
  Request personalised environmental health advice or submit details
  for a home environmental risk assessment.
</p>

<section class="mt-4">
  <form method="post" class="row g-3">

    <div class="col-md-6">
      <label for="name" class="form-label">Full Name</label>
      <input
        type="text"
        id="name"
        name="name"
        class="form-control"
        required
      >
    </div>

    <div class="col-md-6">
      <label for="email" class="form-label">Email Address</label>
      <input
        type="email"
        id="email"
        name="email"
        class="form-control"
        required
      >
    </div>

    <div class="col-12">
      <label for="message" class="form-label">Describe your concern</label>
      <textarea
        id="message"
        name="message"
        class="form-control"
        rows="5"
        required
      ></textarea>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-success">
        Submit Consultation Request
      </button>
    </div>

  </form>
</section>

<hr class="my-5">

<section>
  <h2>What Happens Next?</h2>
  <p>
    Once your request is submitted, a member of the Health Advice Group
    will review your information and provide guidance based on
    environmental and health risk factors.
  </p>
</section>

<?php
require_once 'includes/footer.php';
?>
