<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COVACC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/title_logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- MODAL -->

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/title_logo.png" alt=""> COVACC</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#departments">Departments</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
                  <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="drop-down"><a href="#">Deep Drop Down</a>
                      <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                  </ul>
                </li> -->
          <li><a href="#contact">Contact</a></li>
          <li><a href="#myLoginModal" class="trigger-btn" data-toggle="modal">Login</a></li>
          <li><a href="#myRegisterModal" class="trigger-btn" data-toggle="modal">Register</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <!--
      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Login</span></a>
      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Register</span></a>
    -->
    </div>
  </header><!-- End Header -->

  <!-- LOGIN Modal HTML -->
  <div id="myLoginModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Member Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="/examples/actions/confirmation.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
            </div>
          </form>
          <p class="hint-text"><a href="#">Forgot Password?</a></p>
        </div>
      </div>
    </div>
  </div>


  <!-- REGISTER Modal HTML -->
  <div id="myRegisterModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New User Registration</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Mobile" maxlength="10" data-msg="Please enter correct Mobile Number">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="date" class="form-control" name="dob" id="dob" placeholder="DD/MM/YYY">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
                <div class="validate"></div>
              </div>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block btn-lg" value="Register" disabled>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>