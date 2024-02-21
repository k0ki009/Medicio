<!DOCTYPE html>
<html lang="en">

<head>
<?php include("header.php") ?>
<link href="/assets/css/style.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/doctors.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- <style>
    /* Style for chatbot container */
    #chatbot-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 300px;
      height: 400px;
      border: 1px solid #ccc;
      border-radius: 10px;
      overflow: hidden;
      z-index: 1000;
    }
  </style> -->
</head>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i>Open Open 24/7
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now (083) 887 9898
      </div>
    </div>
  </div>
  <!-- chatbot -->
  <!-- <div id="chatbot-container">
    <div id="chatbot-title" style="background-color: #007bff; color: #fff; padding: 10px; text-align: center;">
      Chatbot
    </div>
    <div id="chatbot-messages" style="padding: 10px; height: 300px; overflow-y: scroll;"> -->
      <!-- Chatbot messages will be displayed here -->
    <!-- </div>
    <div id="chatbot-input" style="padding: 10px;">
      <input type="text" id="user-input" placeholder="Type your message...">
      <button onclick="sendMessage()">Send</button>
    </div>
  </div> -->
<!-- <div id="chatbot-container">
    <div id="chatbot-title" style="background-color: #007bff; color: #fff; padding: 10px; text-align: center;">
      Chatbot
    </div>
    <div id="chatbot-messages" style="padding: 10px; height: 300px; overflow-y: scroll;">
      Chatbot messages will be displayed here
    </div>
    <div id="chatbot-input" style="padding: 10px;">
      <input type="text" id="user-input" placeholder="Type your message...">
      <button onclick="sendMessage()">Send</button>
    </div>
  </div> -->
<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>News</h2>
        </div>

        <div class="row">
            <!-- Existing News Item -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/img/departments-1.jpg" class="card-img" alt="News Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">CHR to LGUs: Boost reproductive health educ to curb teen pregnancy</p>
                                <a href="#" class="btn btn-primary">Read more &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New News Item -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/img/departments-2.jpg" class="card-img" alt="News Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">Tobacco consumption declining worldwide: WHO</p>
                                <a href="#" class="btn btn-primary">Read more &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- End Doctors Section -->

<!-- ======= Footer ======= -->
<?php include("footer.php") ?>

  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Chatbot JavaScript -->
  <!-- <script>
    // Function to send user message
    function sendMessage() {
      var userInput = document.getElementById('user-input').value;
      displayUserMessage(userInput);
      // Call a function to handle user input and get response from chatbot
      // For example, you can use an API call to a chatbot service
      // Replace the following line with your actual implementation
      displayBotMessage("Hello! You typed: " + userInput);
      document.getElementById('user-input').value = ''; // Clear input field after sending message
    }

    // Function to display user message
    function displayUserMessage(message) {
      var chatbotMessages = document.getElementById('chatbot-messages');
      var userMessageElement = document.createElement('div');
      userMessageElement.innerText = "You: " + message;
      chatbotMessages.appendChild(userMessageElement);
    }

    // Function to display bot message
    function displayBotMessage(message) {
      var chatbotMessages = document.getElementById('chatbot-messages');
      var botMessageElement = document.createElement('div');
      botMessageElement.innerText = "Bot: " + message;
      chatbotMessages.appendChild(botMessageElement);
    }
  </script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>