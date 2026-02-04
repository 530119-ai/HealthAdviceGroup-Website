<?php
// advice.php
$pageTitle = "Health Advice";
include 'includes/header.php';
?>

<main class="container my-5">
    <h1 class="mb-4">Health Advice</h1>
    <p class="lead">
        Practical advice to help you manage health risks related to weather
        conditions and environmental factors.
    </p>

    <div class="row g-4">

        <!-- Extreme Heat -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Extreme Heat</h5>
                    <p class="card-text">
                        High temperatures can increase the risk of dehydration,
                        heat exhaustion, and heatstroke.
                    </p>
                    <ul>
                        <li>Drink plenty of water</li>
                        <li>Avoid direct sunlight at peak hours</li>
                        <li>Wear light, breathable clothing</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Cold Weather -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Cold Weather</h5>
                    <p class="card-text">
                        Cold temperatures can worsen respiratory conditions and
                        increase the risk of hypothermia.
                    </p>
                    <ul>
                        <li>Dress in warm layers</li>
                        <li>Keep indoor spaces heated</li>
                        <li>Limit time spent outdoors</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Air Quality & Allergies -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Air Quality & Allergies</h5>
                    <p class="card-text">
                        Poor air quality and pollen levels can trigger asthma
                        and seasonal allergies.
                    </p>
                    <ul>
                        <li>Monitor local air quality levels</li>
                        <li>Keep windows closed on high pollen days</li>
                        <li>Follow prescribed medication plans</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="alert alert-info mt-5" role="alert">
        <strong>Note:</strong> This advice is general guidance and does not replace
        professional medical advice.
    </div>
</main>

<?php include 'includes/footer.php'; ?>
