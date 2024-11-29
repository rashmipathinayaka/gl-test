<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Land Details</title>
  <link rel="stylesheet" href="<?= ROOT ?>/assets/css/land.css">
</head>

<body>

  <div class="land-page">
    <header class="land-header">
      <h1 id="land-title">Organic Wheat Plantation</h1>
      <p class="location">Location: <span id="land-location">Area 15, Sri Lanka</span></p>
    </header>

    <div class="land-content">
      <div class="land-image">
        <img id="land-photo" src="<?= ROOT ?>/assets/images/hero.jpg" alt="Land Image">
      </div>

      <div class="land-info">
        <h2>Description</h2>
        <p id="land-description">
          This land is located in a fertile region with rich soil perfect for agricultural activities.
          The land area is approximately 10 acres, ideal for plantation of crops like rice, vegetables, and fruits.
        </p><br><br>

        <h3>Additional Information</h3>
        <ul>
          <li>Soil Quality: Fertile</li>
          <li>Climate: Tropical</li>
          <li>Owner: John Karunaratne</li>
          <li>Crop Type: Wheat</li>
        </ul><br>

        <h3>Status</h3>
        <p>This plantation has started and the first phase of planting rice has been completed.</p><br><br>

        <h3>Timeline</h3><br>
        <ul class="timeline">
          <li class="timeline-event">
            <span class="timeline-date">January 2025</span>
            <span class="timeline-description">Initial soil testing and preparation completed.</span>
          </li>
          <li class="timeline-event">
            <span class="timeline-date">February 2025</span>
            <span class="timeline-description">First crops planted.</span>
          </li>
          <li class="timeline-event">
            <span class="timeline-date">March 2025</span>
            <span class="timeline-description">First harvest expected.</span>
          </li>
          <li class="timeline-event">
            <span class="timeline-date">April 2025</span>
            <span class="timeline-description">Fertilizing - Phase 01</span>
          </li>
          <li class="timeline-event">
            <span class="timeline-date">May 2025</span>
            <span class="timeline-description">Harvesting - Phase 01</span>
          </li>
          <li class="timeline-event">
            <span class="timeline-date">Jun 2025</span>
            <span class="timeline-description">Second crops planted.</span>
          </li>
        </ul><br>

        <h3>Gallery </h3>
        <p>No Imaged uploaded yet.</p>

        <!-- <div class="carousel">
          <div class="carousel-cell">
            <img src="<?= ROOT ?>/assets/images/hero.jpg" alt="Fertilizing event 1">
          </div>
          <div class="carousel-cell">
            <img src="<?= ROOT ?>/assets/images/hero.jpg" alt="Fertilizing event 2">
          </div>
          <div class="carousel-cell">
            <img src="<?= ROOT ?>/assets/images/hero.jpg" alt="Fertilizing event 3">
          </div>
        </div> -->

        <!-- <button id="file-complaint-btn" class="complaint-btn">File a Complaint</button> -->
      </div>
    </div>
  </div>

  <script>
    document.getElementById('file-complaint-btn').addEventListener('click', function () {
      // You can replace the alert with actual complaint filing functionality
      alert('Complaint filed successfully. We will look into the issue.');
    });
  </script>
</body>

</html>