<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us | IMMUNITRACK</title>

  <!-- Fonts & Libraries -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    * {
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: #fff;
      overflow-x: hidden;
    }

    /* Video Background */
    .video-bg {
      position: fixed;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -2;
      object-fit: cover;
    }

    /* Dark Overlay */
    .video-overlay {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: -1;
    }

    .contact-section {
      padding-top: 140px;
      padding-bottom: 80px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .contact-form-box {
      background: rgba(255, 255, 255, 0.08);
      border-radius: 15px;
      padding: 40px;
      width: 100%;
      max-width: 700px;
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }

    .contact-form-box h2 {
      color: #00ffcc;
      margin-bottom: 30px;
      font-weight: 700;
      text-align: center;
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.15);
      border: none;
      color: #fff;
      padding: 12px;
      margin-bottom: 20px;
      border-radius: 6px;
    }

    .form-control::placeholder {
      color: #ddd;
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.2);
      outline: none;
      box-shadow: none;
    }

    .btn-submit {
      width: 100%;
      padding: 12px;
      background-color: #00ffaa;
      color: #000;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      transition: 0.3s ease;
    }

    .btn-submit:hover {
      background-color: transparent;
      border: 1px solid #00ffaa;
      color: #00ffaa;
    }

    @media (max-width: 768px) {
      .contact-form-box {
        padding: 25px;
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
  </style>
</head>
<body>

<!-- Video Background -->
<video class="video-bg" autoplay muted loop playsinline>
  <source src="images/contact-bg.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
<div class="video-overlay"></div>

<!-- Contact Form -->
<section class="contact-section">
  <div class="contact-form-box">
    <h2>Get In Touch</h2>
    <form method="post">
      <input type="text" name="name" class="form-control" placeholder="Your Name" required />
      <input type="email" name="email" class="form-control" placeholder="Your Email" required />
      <input type="text" name="subject" class="form-control" placeholder="Subject" required />
      <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit" name="send" class="btn-submit">Send Message</button>
    </form>
    <?php
      if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        // Here you can insert into DB or send an email
        echo "<script>alert('Message sent successfully!');</script>";
      }
    ?>
  </div>
</section>
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
</body>
</html>
