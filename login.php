<?php 
include 'backend/conn.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Zanex - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="bootstrap template, template dashboard bootstrap, admin template, html admin panel template, bootstrap admin template, html and css templates, bootstrap, bootstrap html template, html admin dashboard template, bootstrap dashboard, admin panel html template">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/brand-logos/favicon.ico" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="assets/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">


</head>

<body  class="login-img">

    <!-- Loader -->
    <div id="loader" >
        <img src="assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
     	<!-- PAGE -->
			<div class="page login-page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto mt-7">
						<div class="text-center">
							<img src="assets/images/brand-logos/desktop-white.png" class="header-brand-img" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="card  wrap-login100 p-0">
							<div class="card-body">
								<form action="backend/login.php" class="login100-form validate-form">
									<span class="login100-form-title">
										Login
									</span>
									
										<?php 
										if(isset($_SESSION['already_exist'])){

											?>
											<div class="alert alert-warning" role="alert">
												User Exist, wait until admin aprove!
											</div>
											<?php
											unset($_SESSION['already_exist']);
										}
										?>

<?php 
										if(isset($_SESSION['password_changed'])){

											?>
											<div class="alert alert-warning" role="alert">
												Password changed, Please login again
											</div>
											<?php
											unset($_SESSION['password_changed']);
										}
										?>

<?php 
										if(isset($_SESSION['already_exist_verified'])){

											?>
											<div class="alert alert-warning" role="alert">
												User Exist, Please login!
											</div>
											<?php
											unset($_SESSION['already_exist_verified']);
										}
										?>

<?php 
										if(isset($_SESSION['already_exist_rejected'])){

											?>
											<div class="alert alert-danger" role="alert">
												User rejected by the admin, please contact admin!!
											</div>
											<?php
											unset($_SESSION['already_exist_rejected']);
										}
										?>

<?php 
										if(isset($_SESSION['not_verified'])){

											?>
											<div class="alert alert-primary" role="alert">
												Still not verified by the admin, stay tuned.
											</div>
											<?php
											unset($_SESSION['not_verified']);
										}
										?>

<?php 
										if(isset($_SESSION['verify_rejected'])){

											?>
											<div class="alert alert-danger" role="alert">
												User rejected. please contact the admin!!
											</div>
											<?php
											unset($_SESSION['verify_rejected']);
										}
										?>

<?php 
										if(isset($_SESSION['user_created'])){

											?>
											<div class="alert alert-success" role="alert">
												User Created,Please Log in.
											</div>
											<?php
											unset($_SESSION['user_created']);
										}
										?>
										<?php 
										if(isset($_SESSION['something_went_wrong'])){

											?>
											<div class="alert alert-danger" role="alert">
												Something went wrong, please contact the Developer..
											</div>
											<?php
											unset($_SESSION['something_went_wrong']);
										}
										?>

									<?php 
										if(isset($_SESSION['logged_in_failed'])){

											?>
											<div class="alert alert-warning" role="alert">
												Incorrect User Name or Password..
											</div>
											<?php
											unset($_SESSION['logged_in_failed']);
										}
										?>
										
									
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                                        <input type="text" class="form-control input100" name="email" id="input" placeholder="Email">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-mail-fill" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                                        <input type="password" class="form-control input100" name="password" id="input2" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-lock-fill" aria-hidden="true"></i>
										</span>
									</div>
									<div class="text-end pt-1">
										<p class="mb-0"><a href="forgot-password.php" class="text-primary ms-1">Forgot Password?</a></p>
									</div>
									<div class="container-login100-form-btn">
										<button type="submit" class="login100-form-btn btn-primary">
											Login
									</button>
									</div>
									<div class="text-center pt-3">
										<p class="text-dark mb-0">Not a member?<a href="register.php" class="text-primary ms-1">Create an Account</a></p>
									</div>
								</form>
							</div>
							<div class="card-footer border-top">
								<div class="d-flex justify-content-center my-3">
									<a href="javascript:void(0);" class="social-login  text-center">
										<i class="ri-google-fill"></i>
									</a>
									<a href="javascript:void(0);" class="social-login  text-center mx-4">
										<i class="ri-facebook-fill"></i>
									</a>
									<a href="javascript:void(0);" class="social-login  text-center">
										<i class="ri-twitter-fill"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->

        
        

    </div>


</body>

</html>