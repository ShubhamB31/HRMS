<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Litmus IT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Register</a>
            </li>
            <li class="nav-item">
            <div>
              <div class="w3-dropdown-hover">
                <button class="w3-button w3-none">Login</button>
                  <div class="w3-dropdown-content w3-bar-block w3-none">
                    <a href="employee.php" class="w3-bar-item w3-button">Employee</a>
                    <a href="login.php" class="w3-bar-item w3-button">HR</a>
                  </div>
              </div>
            </div>
            </li>

<meta name="viewport" content="width=device-width, initial-scale=5">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      </div>
    </nav>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method = "post" action = "login.php">
					<?php include('errors.php'); ?>
					<span class="login100-form-title p-b-32">
						HR Login
					</span>
					<form >
					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" input type='submit' name='login_user' value='Submit'>
							Login
						</button> <!-- <input type='submit' name='login_user' value='Submit'/>  -->
						
						<div class="txt4">
  						Not yet a member? <a href="register.php" ><div style = "font-size = 20px">Sign up</div></a>

  					</div>
					</div>
					
				</form>
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<!-- / <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	// <script src="vendor/animsition/js/animsition.min.js"></script>
	// <script src="vendor/bootstrap/js/popper.js"></script>
	// <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	// <script src="vendor/select2/select2.min.js"></script>
	// <script src="vendor/daterangepicker/moment.min.js"></script>
	// <script src="vendor/daterangepicker/daterangepicker.js"></script>
	// <script src="vendor/countdowntime/countdowntime.js"></script>
	// <script src="js/main.js"></script>
 -->
</body>
</html>