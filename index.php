<!DOCTYPE html>
<html lang="en">

<head>
<?php include("header.php") ?>
<style>
  /* <!-- Add the following CSS styles to your existing CSS file or within a <style> tag in your HTML --> */

  /* Define animation keyframes */
  @keyframes bounce {
    0% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-20px);
    }
    100% {
      transform: translateY(0);
    }
  }

  /* Apply animation to the icons */
   .info-box i {
    animation: bounce 3s infinite;
  } 
  /* @keyframes circularMotion {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.info-box {
  text-align: center;
}

.icon-container {
  position: relative;
  width: 100px;
  height: 100px;
  margin: 0 auto 20px;
  animation: circularMotion 5s linear infinite; /* Adjust the duration and timing function as needed */
  /* border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
} */ 

@font-face {
            font-family: 'Perfect Beloved';
            src: url('assets/scss/Perfect Beloved.otf') format('truetype');

        }

        #hero h2 {
            font-family: 'Perfect Beloved', sans-serif; 
            font-size: 60px;
        }

        @font-face {
            font-family: 'TheHospital-eZ7De';
            src: url('assets/scss/TheHospital-eZ7De.woff') ;

        }

        #hero h2 {
            font-family: 'TheHospital-eZ7De', sans-serif; 
            font-size: 60px;
        }


</style>
</head>

<body>
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/bg.jpg)">
          <div class="container">
            <h2>Caring Beyond Healing</h2>
           
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/gmc1.jpg)">
          <div class="container">
            <h2>Welcome to Gensan Medical Center</h2>
            
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Your Partner in Health and Wellness</h2>
            
          </div>
        </div>
 <!-- Slide 4 -->
 <div class="carousel-item" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>We care about your HEALTH</h2>
            
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <section id="counts" class="counts">
    <div class="container">
       <p><strong>Partners:</strong> </p>
       <div class="image">
       <div id="carousel" style="overflow-x: hidden; white-space: nowrap; width: 100%;">
  <img src="assets/img/TPP.png" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/DOH.png" height="80px" width="80px" style="margin: 10px;">
  <img src="assets/img/Philhealth.png" height="70px" width="150px" style="margin: 10px;">
  <img src="assets/img/UHC.png" height="80px" width="100px" style="margin: 10px;">
  <img src="assets/img/PCSO.png" height="80px" width="80px" style="margin: 10px;">
  <img src="assets/img/DSWD.png" height="100px" width="150px" style="margin: 10px;">
  <img src="assets/img/Labangal.png" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/sealcity.jpg" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/amping.png" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/konsulta.jpg" height="120px" width="170px" style="margin: 10px;">
  <img src="assets/img/MAXICARE.png" height="50px" width="130px" style="margin: 10px;">
  <img src="assets/img/intellicare.png" height="50px" width="130px" style="margin: 10px;">
  <img src="assets/img/lifehealth.png" height="80px" width="160px" style="margin: 10px;">
  <img src="assets/img/coop.png" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/amaphil.png" height="80px" width="160px" style="margin: 10px;">
  <img src="assets/img/Pacific.png" height="80px" width="160px" style="margin: 10px;">
  <img src="assets/img/cocolife.png" height="70px" width="190px" style="margin: 10px;">
  <img src="assets/img/EastWest.png" height="70px" width="150px" style="margin: 10px;">
  <img src="assets/img/avega.png" height="50px" width="180px" style="margin: 10px;">
  <img src="assets/img/etiqa.png" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/benlife.png" height="70px" width="150px" style="margin: 10px;">
  <img src="assets/img/Generali.png" height="100px" width="150px" style="margin: 10px;">
  <img src="assets/img/kaiser.png" height="70px" width="230px" style="margin: 10px;">
  <img src="assets/img/sarangani.png" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/maasim.jpg" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/malungon.png" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/TPP.png" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/alabel.png" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/malapatan.jpg" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/Glan.jpg" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/SOCO.png" height="90px" width="90px" style="margin: 10px;">
  <img src="assets/img/Tupi.png" height="90px" width="90px" style="margin: 10px;">
</div>
    </div>
    <br>
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
            <i class="fa-solid fa-handshake"></i>
              <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Partnership</strong> Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              <!-- <a href="">Find out more &raquo;</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
            <i class="fas fa-user-md"></i>
              <!-- <i class="far fa-hospital"></i> -->
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Specialist</strong> Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi </p>
              <!-- <a href="#">Find out more &raquo;</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <!-- <i class="fas fa-flask"></i> -->
              <!-- <i class="fa-solid fa-head-side-gear"></i> -->
              <i class="fa-solid fa-magnifying-glass"></i>
              <span data-purecounter-start="0" data-purecounter-end="17" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Specialization</strong> Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi </p>
              <!-- <a href="#">Find out more &raquo;</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <!-- <i class="fas fa-award"></i> -->
              <i class="fa-solid fa-gears"></i>
              <span data-purecounter-start="0" data-purecounter-end="19" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Services</strong> Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi </p>
              <!-- <a href="#">Find out more &raquo;</a> -->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

     <!-- ======= News Section ======= -->
     <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>LATEST NEWS</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>CHR to LGUs: Boost reproductive health educ...</h4>
                  <i class='bx bxs-calendar'></i><span>February 9, 2024, 5:34 pm</span>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Tobacco consumption declining worldwide: WHO</h4>
                  <i class='bx bxs-calendar'></i><span>February 21, 2024, 10:34 am</span>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>Health expert: Lifestyle change effective...</h4>
                  <i class='bx bxs-calendar'></i><span>February 6, 2024, 2:34 pm</span>
                </a>
              </li>

            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>CHR to LGUs: Boost reproductive health educ to curb teen pregnancy</h3>
                <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  <p>MANILA – The Commission on Human Rights (CHR) on Friday urged local government units (LGUs) to focus on comprehensive measures to enhance sexual and reproductive health education and services.
                      In its situation report on the interplay of gender inequality and teenage pregnancy, the CHR noted that one out of 10 Filipino females aged 15 to 19 years has begun childbearing.
                      "Teenage pregnancy entails numerous risks for both the mother and child. Adolescent pregnancy takes a colossal bearing on a girl's education and income-generating potential," it added.
                  </p>
                  <a href="#">Read more &raquo;</a>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Tobacco consumption declining worldwide: WHO</h3>
                <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                <p>ANKARA – The number of people using tobacco products, which are the main cause of respiratory diseases as well as cardiovascular ailments, fell from 1.26 billion in 2020 to 1.24 billion in 2022, according to data from the World Health Organization (WHO).
                   At the initiative of the UN agency, Feb. 9 is observed annually as World Stop Smoking Day every year to help prevent the harm from smoking, reduce its use, and raise social awareness.
                   While approximately 1.26 billion people worldwide used tobacco products in 2020, by 2022 this number fell to 1.24 billion.
                </p>
                <a href="#">Read more &raquo;</a>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Health expert: Lifestyle change effective way to prevent cancer</h3>
                <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                <p>ILOILO CITY – A lifestyle change, including a plant-based diet and being physically active, is the cheapest, most practical and effective way to prevent cancer and other lifestyle-related diseases, a health expert said Tuesday.
                  “Plant-based diet is not necessarily vegan or not necessarily vegetarian. It’s only saying that your plate should be composed predominantly of whole food,” said Dr. Mechelle Palma, president of the Philippine College of Lifestyle Medicine.
                  In a media interview, Palma said it means one’s diet must contain fruits, vegetables.
                </p>
                <a href="#">Read more &raquo;</a>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Pediatrics</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End News Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Services & Facilities</h2>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="fas fa-heartbeat animation__shake"></i></div>
          <h4 class="title"><a href="facilities/operating.php">OPERATING ROOM</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="fas fa-pills animation__spin"></i></div>
          <h4 class="title"><a href="family/pharmacy.php">PHARMACY SERVICES</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="fas fa-thermometer animation__pulse"></i></div>
          <h4 class="title"><a href="medlab.php">DRUG TESTING</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
          <div class="icon"><i class="fas fa-dna animation__rotate"></i></div>
          <h4 class="title"><a href="">CLINICAL MICROSCOPY</a></h4>
          <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <!-- <p>Muisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/gmc1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
          <p class="about" style="text-align: justify;">Gensan Medical Center (GensanMed) stands as a beacon of healthcare excellence in General Santos City,
           recognized and accredited by the Department of Health and PhilHealth. As a Level II Tertiary hospital, it is meticulously 
           designed to cater to the diverse medical needs of the populace.</p> 
           <p style="text-align: justify;">Situated in the heart of Barangay Calumpang, GensanMed extends its services beyond geographical boundaries, 
              reaching out to the wider community of General Santos City and its surrounding areas. Committed to delivering
              cutting-edge medical care, GensanMed prides itself on its state-of-the-art facilities and advanced medical technologies. 
              From diagnostic tools to treatment modalities, the hospital ensures that patients receive the highest physicians, 
              nurses, social workers, and support staff, GensanMed is poised to address a myriad of medical conditions with expertise and compassion.</p>
              <a href="aboutus.php">Read more &raquo;</a>
        </div>
            <p class="about">
              
            </p>
          </div>
        </div>

    
    </section>

   <div class="contact-container">
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>LOCATION</h2>
      </div>
    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589.7506210444478!2d125.14772443154469!3d6.082986741915807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f7a1e83a729f59%3A0x3b684e885cd70c77!2sGensan%20Medical%20Center!5e0!3m2!1sen!2sph!4v1707449723988!5m2!1sen!2sph" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">
  <div class="row mt-5">
    <div class="col-md-4">
      <div class="info-box">
        <div class="icon-container">
          <div class="circle-animation"></div>
          <i class="bx bx-map"></i>
        </div>
        <h3>Our Address</h3>
        <p>National Highway, Purok Veterans, Barangay Calumpang, General Santos City, Philippines, 9500</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-box">
        <div class="icon-container">
          <div class="jumping-animation"></div>
          <i class="bx bx-envelope"></i>
        </div>
        <h3>Email Us</h3>
        <a href="mailto:contactus@gensanmed.com">contactus@gensanmed.com</a> 
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-box">
        <div class="icon-container">
          <div class="circle-animation"></div>
          <i class="bx bx-phone-call"></i>
        </div>
        <h3>Call Us</h3>
        <a href="tel:+639985604326">(0998) 560 4326</a> <br>
        <a href="tel:+639985604326">(083) 887 9898</a>
      </div>
    </div>
  </div>
</div>

      </section>

      </main>

  <!-- ======= Footer ======= -->
  <?php include("footer.php") ?>

  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <script>
  const carousel = document.getElementById('carousel');
  let scrollAmount = 0;
  const scrollIncrement = 300;
  const scrollSpeed = 50;
  const intervalTime = 2000;

  function scrollCarousel() {
    scrollAmount += scrollIncrement;
    if (scrollAmount >= carousel.scrollWidth - carousel.clientWidth) {
      scrollAmount = 0;
    }
    carousel.scrollTo({
      top: 0,
      left: scrollAmount,
      behavior: 'smooth'
    });
  }

  setInterval(scrollCarousel, intervalTime);
</script>
</body>

</html>