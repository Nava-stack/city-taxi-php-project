<?php include 'top.php'; ?>
	
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
							<h1>Forgot Password</h1>
							<p class="account-subtitle">Enter your email and we will send you a link to reset your password.</p>								
							<form action="index.php">
								<div class="input-block">
									<label class="form-label">Email Address <span class="text-danger">*</span></label>
									<input type="email" class="form-control"  placeholder="">
								</div>
								<a href="reset-password.php" class="btn btn-outline-light w-100 btn-size">Save Changes</a>								
							</form>							
						</div>
					</div>
				</div>
			</div>
			
			<?php include 'log-process-footer.php'; ?>