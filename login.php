<!-- Missing a page content link or button for link navigation -->

<?php
session_start();
require_once 'includes/header.php';
require_once 'includes/conn.php';

$conn->select_db($dbname);

$error = "";

// Handle form submission
// Server request query post initialise/fill data/information.
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
    } else {

        // Prepare statement
        $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {

            $user = $result->fetch_assoc();

            // Verify hashed password
            if (password_verify($password, $user['password'])) {

                // Set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];

                // Redirect to dashboard
                header("Location: " . BASE_URL . "dashboard.php");
                exit;

            } else {
                $error = "Invalid email or password.";
            }

        } else {
            $error = "Invalid email or password.";
        }

        $stmt->close();
    }
}
?>

<h1 class="mb-4">Login</h1>

<?php if (!empty($error)) : ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php endif; ?>

<form method="post" class="row g-3">

    <div class="col-md-6">
        <label class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="col-md-6">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">
            Login
        </button>
    </div>

</form>


<!--
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
?> -->
