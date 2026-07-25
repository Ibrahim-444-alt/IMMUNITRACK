<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> Hospitals | IMMUNITRACK</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- AOS Library for Animations -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: 'Poppins', sans-serif;
      color: #fff;
    }

    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('images/aboutback.jpg') no-repeat center center/cover;
      z-index: -1;
      filter: brightness(0.4);
    }

       .header_section {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      padding: 15px 0;

      backdrop-filter: blur(5px);
    }

    .navbar {
      padding: 0;
    }

    .navbar-brand span {
      font-weight: bold;
      font-size: 26px;
      color: white;
      text-transform: uppercase;
    }

    .navbar-nav {
      margin-left: auto;
    }
    a{
        color:white;
    }
.navbar-nav .nav-item .nav-link:hover {
  background-color: red !important;
  color: white !important;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.navbar-nav .nav-link {
  padding: 8px 16px;
}




    .hero_area {
      padding-top: 120px;
      padding-bottom: 60px;
    }

    h1 {
      text-align: center;
      color: #00ffcc;
      margin-bottom: 50px;
      font-size: 42px;
      font-weight: 700;
      animation: slideDown 1s ease;
    }

    .hospital-card {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      margin-bottom: 40px;
      overflow: hidden;
      transition: transform 0.3s;
      color: #fff;
    }

    .hospital-card:hover {
      transform: scale(1.02);
    }

    .hospital-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      max-height: 300px;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .hospital-info {
      padding: 25px;
    }

    .hospital-info h3 {
      color: #00ffaa;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .hospital-info p {
      font-size: 16px;
      line-height: 1.7;
      color: #e0f0ed;
    }

    @keyframes slideDown {
      0% { transform: translateY(-30px); opacity: 0; }
      100% { transform: translateY(0); opacity: 1; }
    }

    @media screen and (min-width: 768px) {
      .hospital-row {
        display: flex;
        align-items: center;
        gap: 30px;
      }

      .hospital-row.reverse {
        flex-direction: row-reverse;
      }

      .hospital-image {
        flex: 1;
        border-radius: 15px;
        height: 100%;
      }

      .hospital-info {
        flex: 1;
      }
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
  </style>
</head>
<body>
<?php
include("header.php");
?>

<!-- MAIN CONTENT -->
<div class="hero_area">
  <div class="container">
    <h1 data-aos="zoom-in">Our Partner Hospitals</h1>

    <!-- Hospital 1 -->
    <div class="hospital-card hospital-row" data-aos="fade-up">
      <img src="images/hospital1.jpg" alt="Hospital 1" class="hospital-image">
      <div class="hospital-info">
        <h3>CityCare General Hospital</h3>
        <p>CityCare is a state-of-the-art facility offering 24/7 emergency care, pediatric services, and advanced diagnostics. Our hospital is fully integrated with our Vaccination System for real-time updates.</p>
      </div>
    </div>

    <!-- Hospital 2 -->
    <div class="hospital-card hospital-row reverse" data-aos="fade-up" data-aos-delay="100">
      <img src="images/hospital2.jpg" alt="Hospital 2" class="hospital-image">
      <div class="hospital-info">
        <h3>Green Valley Medical Center</h3>
        <p>Known for its compassionate care and vaccination outreach programs, Green Valley serves thousands annually with a dedicated immunization department and mobile vaccination units.</p>
      </div>
    </div>

    <!-- Hospital 3 -->
    <div class="hospital-card hospital-row" data-aos="fade-up" data-aos-delay="200">
      <img src="images/hospital3.jpg" alt="Hospital 3" class="hospital-image">
      <div class="hospital-info">
        <h3>HopeLife Children's Hospital</h3>
        <p>A specialized pediatric hospital, HopeLife ensures every child gets timely vaccinations with automated scheduling and parent-friendly reminders through our platform.</p>
      </div>
    </div>

    <!-- Hospital 4 -->
    <div class="hospital-card hospital-row reverse" data-aos="fade-up" data-aos-delay="300">
      <img src="images/hospital4.jpg" alt="Hospital 4" class="hospital-image">
      <div class="hospital-info">
        <h3>MetroHealth Clinic</h3>
        <p>MetroHealth Clinic supports both urban and rural patients with their community-based health initiatives, and has fully adopted our Vaccination Management System across all branches.</p>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
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

<!-- JS Libraries -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1200 });
</script>

</body>
</html>