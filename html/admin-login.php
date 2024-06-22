<?php include 'admin-login-process.php' ?>
<?php include 'top.php' ?>
	
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
							<h1>Sign In</h1>
							<p class="account-subtitle">We'll send a confirmation mail to your email.</p>								
							<form action="admin-login.php" method="post">
								
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
									<a class="forgot-link" href="forgot-password.php">Forgot Password ?</a>
								</div>
								
								<div class="input-block m-0">
									<label class="custom_check d-inline-flex"><span>Remember me</span>
										<input type="checkbox" name="remeber">
										<span class="checkmark"></span>
									</label>
								</div>

								<input class="btn btn-outline-light w-100 btn-size mt-1" type="submit" value="Sign In" name="signin">

								<!-- <a href="index.php" class="btn btn-outline-light w-100 btn-size mt-1">Sign In</a> -->
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or-log">Or, log in with your email</span>
								</div>
								<!-- Social Login -->
								<div class="social-login">
									<a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="assets/img/icons/google.svg" class="img-fluid" alt="Google"></span>Log in with Google</a>
								</div>
								<div class="social-login">
									<a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="assets/img/icons/facebook.svg" class="img-fluid" alt="Facebook"></span>Log in with Facebook</a>
								</div>
								<!-- /Social Login -->
								<div class="text-center dont-have">Don't have an account yet? <a href="register.php">Register</a></div>
							</form>							
						</div>
					</div>
				</div>
			</div>
			
<?php include 'log-process-footer.php'; ?>