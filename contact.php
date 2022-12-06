<?php
   include("connection.php");
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/MANTA-LOGO-03.png" rel="icon">
  <link href="assets/img/MANTA-LOGO-03.png" rel="apple-touch-icon">

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
  <style>
/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 20px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f6f9fe;
  background: url("assets/img/line10.png") center ;
  background-size: cover;
  position: relative;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h1 {
  margin: 15px 0 15px 0;
  font-size: 50px;
  font-weight: 700;
}

.section-title h1 span {
  color: #106eea;
}

.section-title h2 {
  font-size: 13px;
  letter-spacing: 1px;
  font-weight: 700;
  padding: 8px 20px;
  margin: 0;
  background: #e7f1fd;
  color: #106eea;
  display: inline-block;
  text-transform: uppercase;
  border-radius: 50px;
}

.section-title h3 {
  margin: 15px 0 0 0;
  font-size: 32px;
  font-weight: 700;
}

.section-title h3 span {
  color: #106eea;
}

.section-title p {
  margin: 15px auto 0 auto;
  font-weight: 600;
}

@media (min-width: 1024px) {
  .section-title p {
    width: 50%;
  }
}
/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
div.ex2 {
  
  padding-top: 65px;
  box-sizing: border-box;

}
.column3 {
  float: left;
  width: 40.33%;
  padding: 0px;
  height: 300px; /* Should be removed. Only for demonstration */
}

.column4 {
  float: left;
  width: 50.33%;
  padding: 12px;
  height: 300px; /* Should be removed. Only for demonstration */
}
  </style>
</head>

<body>

<?php include("navbar.php");?>

	<!-- ======= Contact Header Section ======= -->

    <section id="contact-us" class="section-bg">
	<div class="section-title">
		<h1>Contact<span> Us</span></h1>
	</div>
	</section><!-- End Contact Header Section -->

 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact ">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>1-30-01, Level 30 Menara Bangkok Bank, No 105, <br> Jalan Ampang, 50450 Kuala Lumpur</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>manta@syafz.com</p>
			  <br>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>03-2714 6488</p>
				<p>03-2714 6489 (fax)</p>
            </div>
          </div>
		  

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1110.4367262394794!2d101.7039018!3d3.1562439!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49e26e204fd7%3A0x1969e337e45319bd!2sManta%20Services%20Sdn%20Bhd!5e1!3m2!1sen!2smy!4v1670314624505!5m2!1sen!2smy" width="1115" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <!-- ======= Contact Form ======= -->
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
        <!-- ======= End Contact Form ======= -->
      </div>
    </section><!-- End Contact Section -->

 <?php include("footer.php");?>

</body>

</html>