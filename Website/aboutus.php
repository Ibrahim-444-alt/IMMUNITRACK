<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us | IMMUNITRACK</title>

  <!-- Fonts & Libraries -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      height: 100%;
    }


    /* HERO AREA */
    .hero_area {
      padding-top: 120px; /* Enough space for fixed navbar */
      padding-bottom: 80px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background: rgba(0, 0, 0, 0.6);
      z-index: 1;
    }

    .about-content {
      position: relative;
      z-index: 2;
      padding: 60px 20px;
      max-width: 900px;
      margin: auto;
      text-align: center;
    }

    h1 {
      font-size: 42px;
      font-weight: 700;
      margin-bottom: 30px;
      color: #00ffcc;
    }

    .section-title {
      font-size: 24px;
      font-weight: 600;
      margin-top: 50px;
      margin-bottom: 15px;
      color: #00ffaa;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: -6px;
      height: 3px;
      width: 60px;
      background-color: #00ffaa;
      border-radius: 3px;
    }

    p {
      font-size: 16px;
      color: #e0f0ed;
      line-height: 1.8;
      margin-bottom: 20px;
    }

    strong {
      color: #ffffff;
    }

    .contact {
      margin-top: 50px;
      font-size: 18px;
    }

    .contact a {
      color: #00ffcc;
      text-decoration: underline;
    }

    .contact a:hover {
      text-decoration: none;
    }

    /* Footer Customizations */
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
.about-video-container {
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  transform: translate(-50%, -50%);
  object-fit: cover;
  z-index: -2;
}

.about_overlay {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.6);
  z-index: -1;
}
  </style>
</head>
<body>
<video class="about-video-container" autoplay muted loop playsinline>
  <source src="images/back.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
<div class="about_overlay"></div>
<!-- HERO SECTION -->
<div class="hero_area">
  <div class="overlay"></div>

  <div class="about-content">
    <h1>About Us</h1>

    <h2 class="section-title">Who We Are</h2>
    <p>We are a dedicated healthcare initiative focused on streamlining the vaccination process for individuals, parents, and healthcare providers. Our platform helps monitor, manage, and improve immunization through secure digital services.</p>

    <h2 class="section-title">Our Mission</h2>
    <p>To protect lives by providing a seamless vaccination tracking and management solution for all age groups – from newborns to seniors. We aim to improve health access and awareness through technology.</p>

    <h2 class="section-title">What We Do</h2>
    <p>
      <strong>✔ Digital Vaccination Records:</strong> Access your immunization history anytime, anywhere.<br>
      <strong>✔ Smart Reminders:</strong> Never miss a vaccine with timely notifications.<br>
      <strong>✔ Clinic Integration:</strong> Hospitals and clinics can manage records directly.<br>
      <strong>✔ Admin Tools:</strong> Public health officials can monitor vaccination trends and reports.
    </p>

    <h2 class="section-title">Our Values</h2>
    <p>
      <strong>Transparency:</strong> Clear and open access to health data.<br>
      <strong>Accessibility:</strong> Easy-to-use across devices.<br>
      <strong>Responsibility:</strong> Strong commitment to safety and privacy.
    </p>

    <div class="contact">
      <p>📧 Got questions? Contact us at <a href="mailto:support@vaxcenter.org">support@vaxcenter.org</a></p>
      <p>🌍 Together, let’s build a disease-free world – one vaccine at a time.</p>
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

<script>
  // Auto year update
  document.getElementById('displayYear').textContent = new Date().getFullYear();
</script>

</body>
</html>
