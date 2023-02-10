<?php
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Archiolatech Construction</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- Template Main CSS File -->

  <link rel="stylesheet" type="text/css" href="register.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Archiolatech Construction<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
           <li><a href="http://localhost/UpConstruction/index.php" class="active">Home</a></li>
          <li><a href="http://localhost/UpConstruction/about.php">About</a></li>
          <li><a href="http://localhost/UpConstruction/services.php">Services</a></li>
          <li><a href="http://localhost/UpConstruction/projects.php">Projects</a></li>
          <li><a href="http://localhost/UpConstruction/blog.php">Blog</a></li>
          <li><a href="http://localhost/UpConstruction/contact.php">Contact</a></li>
          
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <div class="container" action="/action_page.php">
    <div class="row">
      <div class="col-lg-4">
        <form class="animate__fadeInRight">
          <h3 class=" text-center" style=" font-family: 'Montserrat', sans-serif;">
            Get a QUOTE <span style=" color: #ff9900;">!</span>
          </h3>
          <div class="form-group">
             <label for="first name"></label>
             <input type="text" id="first name" name="first name" placeholder="first name" required>
          </div>
          <div class="form-group">
             <label for="Last name"></label>
             <input type="text" id="Last name" name="Last name" placeholder="Last name" required>
          </div>        
      <div class="form-group">
       <label for="email"></label>
      <input type="email" id="email" name="email" placeholder="email" required>
    </div>
     <div class="form-group">
  <label for="comment">Description</label>
  <textarea class="form-control" rows="5" id="Describe your project"></textarea>
</div>
<div class="form-group">
  <label for="myfile">Attached file</label>
  <input type="file" id="myfile" name="myfile">
</div>
  <input type="submit" value="Submit">
        </form>
       </div>
            <div class=" col-lg-8">
                <div class="content">
                  <h3 class="animate__fadeInRight" style="font-family: 'Montserrat', sans-serif; ">we feature your designs 
                  and give you the best touch
                   of excellence in your projects
                    fast delivery</h3>
                </div>  
              </div>
          </div>
      </div> 

 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

<script>
$(document).ready(function() {
  $("#client-form").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true,
        digits: true,
        minlength: 10,
        maxlength: 10
      }
    },
    messages: {
      name: "Please enter your name",
      email: {
        required: "Please enter your email",
        email: "Please enter a valid email"
      },
      phone: {
        required: "Please enter your phone number",
        digits: "Phone number must be numeric",
        minlength: "Phone number must be 10 digits",
        maxlength: "Phone number must be 10 digits"
      }
    }
  });
});
</script>
  </body>
  </html>
  ?>