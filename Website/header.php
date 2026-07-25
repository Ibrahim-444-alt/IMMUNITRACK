<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Vaccination System</title>

  <link rel="stylesheet" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
    }

    .hero_area {
      position: relative;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .hero_bg_box {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: flex-end;
      overflow: hidden;
      z-index: -1;
    }

    .hero_bg_box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: bottom right;
    }

    .header_section {
      padding: 15px 0;
      background-color:black;
    }

    .navbar-brand span {
      font-weight: bold;
      font-size: 24px;
      color: white;
      text-transform: uppercase;
    }

    .custom_nav-container {
      padding: 0;
    }

    .navbar-nav {
      margin-left: auto;
    }

    .nav-link {
      padding: 5px 20px;
      color: white !important;
      text-align: center;
      text-transform: uppercase;
      border-radius: 5px;
      transition: all 0.3s;
    }

    .nav-link:hover {
      background-color: white;
      color: #62d2a2 !important;
    }

    .nav_search-btn {
      width: 35px;
      height: 35px;
      padding: 0;
      border: none;
      color: white;
    }

    .navbar-toggler {
      padding: 0;
      width: 37px;
      height: 42px;
      border: none;
      background: transparent;
    }

    .navbar-toggler span {
      display: block;
      width: 35px;
      height: 4px;
      background-color: white;
      margin: 7px 0;
      border-radius: 5px;
      position: relative;
      transition: all 0.3s;
    }

    .navbar-toggler[aria-expanded="true"] span {
      transform: rotate(45deg);
    }

    .navbar-toggler span::before,
    .navbar-toggler span::after {
      content: "";
      position: absolute;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: white;
      border-radius: 5px;
      transition: all 0.3s;
    }

    .navbar-toggler span::before {
      top: -10px;
    }

    .navbar-toggler span::after {
      top: 10px;
    }

    .navbar-toggler[aria-expanded="true"] span::before,
    .navbar-toggler[aria-expanded="true"] span::after {
      transform: rotate(90deg);
      top: 0;
    }
    .navbar-brand span{
      color:yellow;
    }
  </style>
</head>
<body>
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container">
<a class="navbar-brand d-flex align-items-center" href="index.php">
  <img src="images/immunitrack.png" alt="Logo" style="height: 80px; margin-right: 10px;" />
  <span>ImmuniTrack</span>
</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hospital.php">Hospital</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <?php
              if (isset($_SESSION['patient_session'])) {
                echo "<li class='nav-item'>
                        <a class='nav-link' href='profile.php'>{$_SESSION['patient_name']}</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='logout.php'><i class='fa fa-sign-out' style='font-size: 22px;'></i></a>
                      </li>";
              } else {
                echo '<li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fa fa-user" style="font-size: 22px;"></i></a>
                      </li>';
              }
            ?>
          </ul>
        </div>
      </nav>
    </div>
  </header>
</body>
</html>
