<!DOCTYPE html>
<html lang="en">

<?php
include('head.php');
?>
<header>
  <?php
  include("navbar.php");
  ?>
</header>

<body>



  <div class="container-fluid mainbody">

    <section id="s1">
      <img class="img-fluid banner animate__animated animate__flipInX" src="images/Slide1.jpg" alt="">
    </section>

    <section id="s2">
      <div style="padding: 2% 0;">
        <div class="container">
          <iframe style="width: 70%;height:450px ;" class="responsive-iframe"
            src="https://www.youtube.com/embed/hIo3lkALDlg" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
        <br>
        <hr>
        <br>
        <h1 class="animate__animated animate__jackInTheBox">Welcome to Dhaka</h1>
        <h3 style="color: brown;">"Where Culture Meets Innovation in the Heart of Bangladesh"</h3>
        <p style="text-align: justify center;font-size: 20px;">IEEE Computer Society R10 comprises more than 40
          chapters. For increasing the collaborations among these chapters a flagship conference of IEEE CS R10 that
          will be hosted at different countries in a rotation basis can be very much helpful. Considering this fact IEEE
          CS R10 is going to organize 1st R10CS International Conference on Computing and Information Technology (R10CIT
          2023) on November 25-26, 2023 to be held at Dhaka, Bangladesh. R10CIT is going to be an excellent platform for
          the students, academicians, and professionals of ICT, CSE, EEE and allied fields from various universities,
          research institutes, and industries to share their ideas, discuss recent developments and research with
          eminent researchers and academicians. Researchers will get an opportunity to publish their research outcomes
          at the proceedings of R10CIT that will be included at IEEE Xplore and will be indexed by Scopus and other
          indexing services.</p>

      </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonial">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial-slide  ">
              <h3>"Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for
                previewing layouts and visual mockups."</h3>
              <img class="testimonial-image img-fluid" src="images/shamsul__arefin.jpg" alt="">
              <div class="testimonial-text">
                <h4>Dr. Mohammad shamsul Arefin</h4>
                <p>Chair, IEEE CS BDC</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-slide  ">
              <h3>"Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for
                previewing layouts and visual mockups."</h3>
              <img class="testimonial-image img-fluid" src="images/samin_rahman.jpg" alt="">
              <div class="testimonial-text">
                <h4>Md Samin Rahman</h4>
                <p>Secretary, IEEE CS BDC</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-slide  ">
              <h3>"Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for
                previewing layouts and visual mockups."</h3>
              <img class="testimonial-image img-fluid" src="images/sajeeb_saha.jpg" alt="">
              <div class="testimonial-text">
                <h4>Dr. Sajeeb Saha</h4>
                <p>Treasurer, IEEE CS BDC</p>
              </div>

            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>





    </section>

    <!-- Track Section -->
    <section id="s3">
      <div class="row" style="padding: 0%;">
        <div class="col-md-6 col-sm-12" style="padding: 0; text-align: right;">
          <img class="img-fluid" src="images/homei1.webp" alt="">
        </div>
        <div class="col-md-6 col-sm-12" style="padding:0 2%; text-align: left;">
          <h4>Proposed Tracks of the Conference:</h4>
          <ol type="1" style="font-size: 20px;">
            <li>Artificial Intelligence, Machine Learning, and Soft Computing</li>
            <li>Cognitive Science and Computational Biology</li>
            <li>Internet of Things (IoT) and Data Analytics</li>
            <li>Network and Security</li>
            <li>Signal Processing and Computer Vision</li>
            <li>Algorithms and Computation</li>
            <li>Quantum Computing, Communication, and Optics</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- Proposed Date Section -->
    <section id="s4">
      <div style="text-align: center;">
        <h2 style="color: white;">Important Dates</h2>
        <div class="important-date">
          <h4 style="color: white;">Proposed Dates: 25th & 26th November 2023</h4>
        </div>
      </div>
    </section>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>