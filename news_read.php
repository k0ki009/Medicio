<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("header.php") ?>
  <style>
    /* News layout styles */
    .news-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .news-item {
      margin-bottom: 20px;
      padding: 20px;
      background-color: #f5f5f5;
      border-radius: 5px;
    }

    .news-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .news-date {
      font-size: 14px;
      color: #888;
      margin-bottom: 10px;
    }

    .news-content {
      font-size: 16px;
    }

    .news-image {
      max-width: 100%;
      margin-bottom: 20px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  

  <div class="news-container">
    <div class="news-item">
      <h2 class="news-title">Breaking News</h2>
      <p class="news-date">February 21, 2024</p>
      <img src="assets/img/DSWD.PNG" alt="Breaking News" class="news-image">
      <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec mauris non ante hendrerit dapibus. In hac habitasse platea dictumst. Fusce maximus, arcu sed luctus lobortis, mauris elit aliquet justo, eget congue justo diam non nisl. Sed nec semper nunc. Sed id quam ut massa aliquet commodo. Fusce auctor ex velit, non aliquam nunc efficitur eu. Sed id massa vel odio placerat ullamcorper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>

    <!-- <div class="news-item">
      <h2 class="news-title">Sports News</h2>
      <p class="news-date">February 21, 2024</p>
      <img src="assets/img/DOH.PNG" alt="Sports News" class="news-image">
      <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec mauris non ante hendrerit dapibus. In hac habitasse platea dictumst. Fusce maximus, arcu sed luctus lobortis, mauris elit aliquet justo, eget congue justo diam non nisl. Sed nec semper nunc. Sed id quam ut massa aliquet commodo. Fusce auctor ex velit, non aliquam nunc efficitur eu. Sed id massa vel odio placerat ullamcorper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>

    <div class="news-item">
      <h2 class="news-title">Entertainment News</h2>
      <p class="news-date">February 21, 2024</p>
      <img src="assets/img/alabel.png" alt="Entertainment News" class="news-image">
      <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec mauris non ante hendrerit dapibus. In hac habitasse platea dictumst. Fusce maximus, arcu sed luctus lobortis, mauris elit aliquet justo, eget congue justo diam non nisl. Sed nec semper nunc. Sed id quam ut massa aliquet commodo. Fusce auctor ex velit, non aliquam nunc efficitur eu. Sed id massa vel odio placerat ullamcorper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div> -->
  </div>
  <?php include("footer.php") ?>
</body>

</html>