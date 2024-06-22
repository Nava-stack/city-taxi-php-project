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
							<h1>Reset Password</h1>
							<p class="account-subtitle">Your new password must be different from previous used passwords.</p>								
							<form action="index.php">
								<div class="input-block">
									<label class="form-label">New Password <span class="text-danger">*</span></label>
									<div class="pass-group">
										<input type="password" class="form-control pass-input" placeholder="">
										<span class="fas fa-eye-slash toggle-password"></span>
									</div>
								</div>	
								<div class="input-block">
									<label class="form-label">Confirm Password <span class="text-danger">*</span></label>
									<div class="pass-group">
										<input type="password" class="form-control pass-input-two" placeholder="">
										<span class="fas fa-eye-slash toggle-password-two"></span>
									</div>
								</div>
								<button class="btn btn-outline-light w-100 btn-size">Save Changes</button>
							</form>							
						</div>
					</div>
				</div>
			</div>
			
			<?php include 'log-process-footer.php'; ?>