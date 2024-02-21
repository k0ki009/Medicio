<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("header.php") ?>
  <style>
    /* Outpatient layout styles */
    .outpatient-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .outpatient-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .outpatient-content {
      font-size: 16px;
      margin-bottom: 20px;
    }

    .outpatient-image {
      max-width: 100%;
      border-radius: 5px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <?php include("footer.php") ?>

  <div class="outpatient-container">
    <img src="assets/img/DOH.png" alt="Outpatient Services" class="outpatient-image">
    <h2 class="outpatient-title">Outpatient Services</h2>
    <p class="outpatient-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec mauris non ante hendrerit dapibus. In hac habitasse platea dictumst. Fusce maximus, arcu sed luctus lobortis, mauris elit aliquet justo, eget congue justo diam non nisl. Sed nec semper nunc. Sed id quam ut massa aliquet commodo. Fusce auctor ex velit, non aliquam nunc efficitur eu. Sed id massa vel odio placerat ullamcorper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
  </div>
</body>

</html>