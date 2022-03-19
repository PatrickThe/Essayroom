<?php
require_once("Customer/include/connection.php");

session_start();
if(!isset($_SESSION["email_address"])){
    header("location:../login.php");

} else{
    $email_address = $_SESSION['email_address'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Essayroom - Register</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area" style="background-color:#83E9F0">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>      
                  <li class="nav-item "><a class="nav-link" href="#">Main Blog</a></li>
             <li class="nav-item"><a class="nav-link" href="How-it-works.php">How it Works</a></li>
              <li class="nav-item"><a class="nav-link" href="prices.php">Prices</a></li>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Signup</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                  <li class="nav-item active" ><a class="nav-link" href="register.php">Register</a></li>
                  
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>

            <ul class="nav-shop">
             
              <li class="nav-item"><a class="button button-header" href="Customer/Order/orderfinal.php">Order Now</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	



	<?php 

     //require_once("include/connection.php");


   $userid = mysqli_real_escape_string($conn,$_SESSION['email_address']);


  $r = mysqli_query($conn,"SELECT * FROM login_user where email_address = '$userid'") or die (mysqli_error($con));

  $row = mysqli_fetch_array($r);

   $email_address=$row['email_address'];
   //$avarta=$row['avarta'];
   $user_id=$row['user_id'];
   //$last_seen_noti=$row['last_seen_noti'];
?>
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Already have an account?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="button button-account" href="login.php">Login Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Create a new password</h3>
						<form class="row login_form" action="Customer/recovery.php" id="register_form" method="POST">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email_address" value="<?php echo $email_address ?>"/readonly>
							</div>
							<div class="col-md-12 form-group">
								<input type="hidden" class="form-control" id="email" name="user_id" value="<?php echo $user_id ?>"/readonly>
							</div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="password" name="password" placeholder="New Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'New Password'">
              </div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="confirmPassword" name="password1" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="button button-register w-100" name="UpdatePass">Reset Password</button>
							</div>
						</form>

						<script type="text/javascript">
	
	var password = document.getElementById("password")
  , confirmPassword = document.getElementById("confirmPassword");

function validatePassword(){
  if(password.value != confirmPassword.value) {
    confirmPassword.setCustomValidity("Passwords Don't Match");
  } else {
    confirmPassword.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirmPassword.onkeyup = validatePassword;
</script>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->



  <!--================ Start footer Area  =================-->	
	<footer class="footer" >
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no 
								divided deep moved us lan Gathering thing us land years living.
							</p>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="#">Home</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Price</a></li>
								<li><a href="#">Howit works</a></li>
								<li><a href="#">Signup</a></li>
                <li><a href="#">Signin</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget instafeed">
							<h4 class="footer_title">Our Writer</h4>
							<ul class="list instafeed d-flex flex-wrap">
								<li><img src="img/gallery/r1.jpg" alt=""></li>
								<li><img src="img/gallery/r2.jpg" alt=""></li>
								<li><img src="img/gallery/r3.jpg" alt=""></li>
								<li><img src="img/gallery/r5.jpg" alt=""></li>
								<li><img src="img/gallery/r7.jpg" alt=""></li>
								<li><img src="img/gallery/r8.jpg" alt=""></li>
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Head Office
								</p>
								<p>123, Main Street, Your City</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Phone Number
								</p>
								<p>
									+123 456 7890 <br>
									+123 456 7890
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									free@infoexample.com <br>
									www.infoexample.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom" style="background-color:#83E9F0">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
</script> <img src="img/debitcard.jpg" width="60px" height="60px"> | <img src="img/paypal.png" width="60px" height="60px">|<img src="img/gallery/r1.jpg" alt="">
</p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>