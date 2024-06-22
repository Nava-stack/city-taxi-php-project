<?php include 'top.php'?>
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
							<h1>Sign In As</h1>						
							<form action="index.php">
								<a href="passenger-login.php" class="btn btn-outline-light w-100 btn-size mt-1">Passenger</a>
                <a href="driver-login.php" class="btn btn-outline-light w-100 btn-size mt-1">Driver</a>
                <a href="admin-login.php" class="btn btn-outline-light w-100 btn-size mt-1">Admin</a>
                <div class="text-center dont-have">Don't have an account yet? <a href="register-as.php">Register</a></div>
							</form>							
						</div>
					</div>
				</div>
			</div>	     	
  <?php include 'log-process-footer.php'; ?>