<?php include 'register-process.php' ?>	
<?php include 'top.php' ?>	

		<script>
        // JavaScript to display alert
        <?php
        // Check if a success message is set in the session
        if (isset($_SESSION['registration_success'])) {
            echo "alert('" . $_SESSION['registration_success'] . "');";
            unset($_SESSION['registration_success']); // Clear the session variable
        }
        ?>
    </script>

<!-- <script type="text/javascript">

function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition, showError);
	}
	//  else {
	// 	alert("Geolocation is not supported by this browser.");
	// }
}

function showPosition(position) {
	document.querySelector('.myform input[name = "latitude"]').value = position.coords.latitude;
	document.querySelector('.myform input[name = "longitude"]').value = position.coords.longitude;
}

function showError(error) {
	switch(error.code)
	{
	case error.PERMISSION_DENIED:
		alert("You must allow the request for geolocation");
		location.reload();
		break;
	}
	// body...
}

</script>  -->
	</head>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper login-body">
			<!-- Header -->
			<header class="log-header">
				<a href="index.php"><img class="img-fluid logo-dark" src="assets/img/logo.png" alt="Logo"></a>
			</header>
			<!-- /Header -->

			<div class="login-wrapper">
				<div class="loginbox">						
					<div class="login-auth">
						<div class="login-auth-wrap">
							<div class="sign-group">
								<a href="index.php" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span> Back To Home</a>
							</div>
							<h1>Sign Up</h1>
							<p class="account-subtitle">We'll send a confirmation mail to your email.</p>								
							<form action="register.php" method="post">

							<div class="input-block">
									<label class="form-label">Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control"  placeholder="" name="name" required value="">
								</div>

								<div class="input-block">
									<label class="form-label">Username <span class="text-danger">*</span></label>
									<input type="text" class="form-control"  placeholder="" name="username" required value="">
								</div>
								
								<div class="input-block">
									<label class="form-label">Password <span class="text-danger">*</span></label>
									<div class="pass-group">
										<input type="password" class="form-control pass-input" placeholder="" name="password" required value="">
										<span class="fas fa-eye-slash toggle-password"></span>
									</div>
								</div>

								<div class="input-block">
									<label class="form-label">Email <span class="text-danger">*</span></label>
									<input type="email" class="form-control"  placeholder="" name="email" required value="">
								</div>	

								<div class="input-block">
									<label class="form-label">Phone No <span class="text-danger">*</span></label>
									<input type="text" class="form-control"  placeholder="" name="phone_number" required value="">
								</div>

								<input class="btn btn-outline-light w-100 btn-size mt-1" type="submit" value="Sign Up" name="signup">
								<!-- <a href="login.php" class="btn btn-outline-light w-100 btn-size mt-1">Sign Up</a> -->
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">Or, Create an account with your email</span>
								</div>
								<!-- Social Login -->
								<div class="social-login">
									<a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="assets/img/icons/google.svg" class="img-fluid" alt="Google"></span>Log in with Google</a>
								</div>
								<div class="social-login">
									<a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="assets/img/icons/facebook.svg" class="img-fluid" alt="Facebook"></span>Log in with Facebook</a>
								</div>
								<!-- /Social Login -->
								<div class="text-center dont-have">Already have an Account? <a href="login-as.php">Sign In</a></div>
							</form>							
						</div>
					</div>
				</div>
			</div>
			<?php include 'log-process-footer.php'; ?>