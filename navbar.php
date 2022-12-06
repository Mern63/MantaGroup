<?php
   include("connection.php");
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Navigation Bar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Manta-Group-Logo.png" rel="icon">
  <link href="assets/img/Manta-Group-Logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.1.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <br><a href="index.php" class="logo"><img src="assets/img/Manta-Group-Logo.png" alt="" width="" ></a>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- Home -->
          <li>
            <a class="nav-link" href="index.php">HOME</a>
          </li>

          <!-- About -->
          <li class="dropdown"><a ><span>ABOUT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li>
                <a href="">Organizational Structure</a>
              </li>
              <li>
                <a href="">Collaboration Partners</a>
              </li>
            </ul>
          </li>

          <!-- Group of Companies -->
          <li class="dropdown"><a ><span>GROUP OF COMPANIES</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- Manta Services -->
              <li class="dropdown"><a href=""><span>Manta Services</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li>
                    <a href="#">About Us</a>
                  </li>
                  <li>
                    <a href="#">Vision and Mission</a>
                  </li>
                  <li>
                    <a href="#">Achievements</a>
                  </li>
                  <li>
                    <a href="#">Key Personnel</a>
                  </li>
                </ul>
              </li>
              <!-- Manta Construction -->
              <li class="dropdown"><a href=""><span>Manta Construction</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li>
                    <a href="#">About Us</a>
                  </li>
                  <li>
                    <a href="#">Vision and Mission</a>
                  </li>
                  <li>
                    <a href="#">Achievements</a>
                  </li>
                  <li>
                    <a href="#">Key Personnel</a>
                  </li>
                </ul>
              </li>
              <!-- Manta Solutions -->
              <li class="dropdown"><a href=""><span>Manta Solutions</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li>
                    <a href="#">About Us</a>
                  </li>
                  <li>
                    <a href="#">Vision and Mission</a>
                  </li>
                  <li>
                    <a href="#">Achievements</a>
                  </li>
                  <li>
                    <a href="#">Key Personnel</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <!-- News & Events -->
      		<li>
            <a class="nav-link " href="latestnews.php">NEWS & EVENTS</a>
          </li>

    			<!-- Career -->
    		  <li>
            <a class="nav-link " href="">CAREER</a>
          </li>

          <!-- Contact -->
          <li>
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
</html>