<!-- Missing a page content link or button for link navigation -->
<?php
require_once 'includes/header.php';
?>

<h1 class="mb-4">Login</h1>

<p class="lead">
  Log in to access your dashboard and manage your health-related
  information and consultation requests.
</p>

<section class="mt-4">
  <form method="post" class="row g-3">

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

    <div class="col-md-6">
      <label for="password" class="form-label">Password</label>
      <input
        type="password"
        id="password"
        name="password"
        class="form-control"
        required
      >
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">
        Login
      </button>
    </div>

  </form>
</section>

<hr class="my-5">

<section>
  <h2>Why Log In?</h2>
  <p>
    Logging in allows users to access personalised health advice,
    track consultation requests, and view environmental health
    information relevant to their needs.
  </p>
</section>

<?php
require_once 'includes/footer.php';
?>
