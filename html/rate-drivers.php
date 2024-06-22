<?php include 'top.php' ?>	
    <div class="main-wrapper">
      <!-- Header -->
      <?php include 'passenger-header.php'; ?>

			<div class="login-wrapper">
				<div class="loginbox">						
					<div class="login-auth">
						<div class="login-auth-wrap">
							<h1>Rate <i>@Ramesh Kumar</i></h1>
							<p class="account-subtitle">Your ratings is valuable for us.</p>								
							<form action="driver-register.php" method="post">
              					
								<div class="input-block">
									<label class="form-label">Rating<span class="text-danger">*</span></label>
									<input type="number" class="form-control"  placeholder="" name="rating" required value="">
								</div>
                				
								<div class="input-block">
									<label class="form-label">Reservations<span class="text-danger">*</span></label>
									<input type="number" class="form-control"  placeholder="" name="reserve" required value="">
								</div>
                <div class="input-block">
									<label class="form-label">Comments<span class="text-danger"></span></label>
									<input type="" class="form-control"  placeholder="" name="comment" required value="">
								</div>

								<input class="btn btn-outline-light w-100 btn-size mt-1" type="submit" value="Rate Now" onclick="rateNow()" name="signup">

								<!-- <a href="login.php" class="btn btn-outline-light w-100 btn-size mt-1" name="sign_up_btn">Sign Up</a> -->
							</form>							
						</div>
					</div>
				</div>
			</div>
      <script>
			function rateNow() {
	    alert('Rated Successfully');
			document.location.href = 'rate-drivers.php';
      }
			</script>
<?php include 'footer.php';?>