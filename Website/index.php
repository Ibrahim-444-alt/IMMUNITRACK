<?php
  include("../Admin/connection.php");
  $fetch_patient_query = "SELECT * FROM tbl_patient";
  $active_patient = mysqli_fetch_assoc(mysqli_query($connection,$fetch_patient_query));
  
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>IMMUNITRACK </title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<style>
  .hideContact
  {
    display: none;
  }
  .footer_section {
      background: #000;
      color: #fff;
      padding: 60px 0 20px;
    }

    .footer_section a {
      color: #fff;
    }

    .footer_section a:hover {
      color: #62d2a2;
    }

    .footer_social a {
      margin-right: 10px;
      font-size: 24px;
      color: #fff;
    }

    .footer_social a:hover {
      color: #62d2a2;
    }

    .footer_links a {
      margin-right: 15px;
      display: block;
      margin-bottom: 10px;
    }

    .footer_section form input {
      border: none;
      background-color: #fefefe;
      width: 100%;
      height: 45px;
      color: #000;
      padding: 0 15px;
      border-radius: 5px;
    }

    .footer_section form button {
      margin-top: 10px;
      padding: 10px 25px;
      border: 1px solid #62d2a2;
      background: #62d2a2;
      color: white;
      border-radius: 5px;
    }

    .footer_section form button:hover {
      background: transparent;
      color: #62d2a2;
    }

    @media (max-width: 768px) {
      h1 { font-size: 30px; }
      .section-title { font-size: 20px; }
    }
    .hero_bg_box video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -1;
}
.hero_bg_box {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: -1;
}

</style>
<body>

<div class="hero_bg_box">
  <video autoplay muted loop playsinline>
    <source src="images/bg.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

    <!-- header section strats -->
    <?php
      include("header.php");
    ?>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      We Provide Best Healthcare
                    </h1>
                    <p>
                     At our partner hospitals, we are committed to delivering exceptional medical care through experienced professionals, advanced facilities, and compassionate service. From preventive care to specialized treatments, every patient receives personalized attention designed to promote healing and well-being.

                    </p>
                    <div class="btn-box">
                      <a href="appointment.php" class="btn1" style="color:black">
                        Appointment
                      </a>
                      <a href="covid-test.php" class="btn1"  style="color:black">
                        Covid Test
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- department section -->

  <section class="department_section layout_padding" style="margin-top: 80px;>
  <div class="department_container">
    <div class="container">
      <div class="heading_container heading_center" data-aos="fade-down">
        <h2 style="color:black; font-weight: 700;">
          Our Departments
        </h2>
        <p style="color:black">
          Providing expert care through our specialized medical departments — focused on your health and comfort.
        </p>
      </div>
      <div class="row">
        <!-- Department Card -->
        <div class="col-md-3" data-aos="zoom-in">
          <div class="box text-center p-3" style="background: rgba(255,255,255,0.05); border-radius: 10px;">
            <div class="img-box mb-3">
              <img src="images/s1.png" alt="Cardiology" style="max-width: 80px;">
            </div>
            <div class="detail-box">
              <h5 style="color:rgb(119, 128, 46);">Cardiology</h5>
              <p style="color:black">Comprehensive heart care from diagnostics to surgical solutions.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="box text-center p-3" style="background: rgba(255,255,255,0.05); border-radius: 10px;">
            <div class="img-box mb-3">
              <img src="images/s2.png" alt="Diagnosis" style="max-width: 80px;">
            </div>
            <div class="detail-box">
              <h5 style="color:rgb(119, 128, 46);">Diagnosis</h5>
              <p style="color:black">Accurate lab testing and digital diagnostics for faster treatment.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="box text-center p-3" style="background: rgba(255,255,255,0.05); border-radius: 10px;">
            <div class="img-box mb-3">
              <img src="images/s3.png" alt="Surgery" style="max-width: 80px;">
            </div>
            <div class="detail-box">
              <h5 style="color:rgb(119, 128, 46);">Surgery</h5>
              <p style="color:black">Advanced surgical procedures performed by experienced specialists.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
          <div class="box text-center p-3" style="background: rgba(255,255,255,0.05); border-radius: 10px;">
            <div class="img-box mb-3">
              <img src="images/s4.png" alt="First Aid" style="max-width: 80px;">
            </div>
            <div class="detail-box">
              <h5 style="color:rgb(119, 128, 46);">First Aid</h5>
              <p style="color:black">Immediate care and emergency response — when every second matters.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="btn-box text-center mt-4" data-aos="fade-up">
        <a href="#" style="background: #00ffcc; color: #000; padding: 10px 25px; border-radius: 30px; font-weight: 600;">
          View All
        </a>
      </div>
    </div>
  </div>
</section>

  <!-- end department section -->



 
    

  <!-- contact section -->
  <section class='contact_section layout_padding <?php if(!isset($_SESSION['patient_session'])){ echo "hideContact";} ?>'>
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
            <form method="post">
              <div class="form-row">
                <div class="col-lg-6">
                  <div>
                    <input type="hidden" value="<?php echo $active_patient['id'];?>" name="pid">
                    <input type="text" placeholder="Your Name" value="<?php echo $active_patient['name'];?>"  readonly/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div>
                    <input type="text" placeholder="Phone Number" value="<?php echo $active_patient['contact'];?>" readonly/>
                  </div>
                </div>
              </div>
              <div>
                <input type="email" placeholder="Email" value="<?php echo $active_patient['email'];?>" readonly/>
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="message"/>
              </div>
              <div class="btn_box">
                <button type="submit" name="btnsend">Send</button>
              </div>
            </form>
            <?php
                if(isset($_POST['btnsend']))
                {
                  $pid = $_POST['pid'];
                  $message = $_POST['message'];
                  $result = mysqli_query($connection,"INSERT INTO tbl_feedback(p_id,message) VALUES('$pid','$message')");
                  if($result)
                  {
                    echo "<script>alert('Feedback Sent Successfully')</script>";
                  }
                }
            ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php 

            $result = mysqli_query($connection,"SELECT tbl_feedback.*, tbl_patient.name as 'pname',tbl_patient.image FROM tbl_feedback INNER JOIN tbl_patient ON tbl_feedback.p_id = tbl_patient.id WHERE tbl_feedback.status='show'");

            $firstFeedback = true;

            foreach($result as $feedback)
            {
              $activeClass = $firstFeedback?'active':'';
              echo '<div class="carousel-item '.$activeClass.'">
              <div class="row">
                <div class="col-md-11 col-lg-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="'.$feedback['image'].'" alt="" />
                    </div>
                    <div class="detail-box">
                      <div class="name">
                        <h6>'.$feedback['pname'].'</h6>
                      </div>
                      <p>'.$feedback['message'].'</p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
            $firstFeedback=false;
            }
          ?>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <<!-- FOOTER -->
<footer class="footer_section">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Reach at</h4>
        <p><i class="fa fa-map-marker-alt"></i> Location</p>
        <p><i class="fa fa-phone-alt"></i> +01 1234567890</p>
        <p><i class="fa fa-envelope"></i> demo@gmail.com</p>
        <div class="footer_social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <h4>About</h4>
        <p>We’re committed to better healthcare through digital vaccination management. Fast, safe, and secure.</p>
      </div>
      <div class="col-md-4">
        <h4>Newsletter</h4>
        <form action="#">
          <input type="email" placeholder="Enter email" />
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </div>
    <div class="footer-info mt-4 text-center">
      <p>&copy; <span id="displayYear"></span> All Rights Reserved By <a href="#">Vaccination System</a></p>
    </div>
  </div>
</footer>
  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

</body>

</html>