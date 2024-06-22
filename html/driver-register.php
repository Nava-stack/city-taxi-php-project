<?php
session_start(); // Start the session
require 'database-config.php';

	if(isset($_POST["signup"]))
	{
	$na = $_POST["name"];
    $una = $_POST["username"];
    $pass= $_POST["password"];
    $email = $_POST["email"];
		$nic = $_POST["NIC"];
    $phonenum = $_POST["phone_number"];


	 // Hash the password before storing it
	 $hashed_password = password_hash($pass, PASSWORD_DEFAULT);


	$sql = "insert into drivers (name, username, password, email, NIC, phone_number) values('$na','$una','$hashed_password','$email','$nic','$phonenum') ";
		if(mysqli_query($conn, $sql))
		{
			echo 
			"
			<script>
			alert('Driver Registration successful');
			document.location.href = 'driver-login.php';
			</script>
			"
			;
			// $_SESSION['registration_success'] = "Registration successful.";
			// header("Location: login.php");
        	// exit();
		}
		else {
			echo "Unable to insert data: " . mysqli_error($conn);
		}
	}
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["signup"]))
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sajanaesoft@gmail.com';      //my gmail account
    $mail->Password = 'pnuh sbvo akve aqgg';    //copy from that app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('sajanaesoft@gmail.com'); //my gmail

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);
    $mail->Subject = "Confirmation Email";
    $mail->Body = "<B>Hi ".$_POST["name"] .",</B>". "<br>You are successfully registered as a Driver in CITY TAXI. " ."<br>Below Your username and password availabe don't share it to anyone.". "<br><br>Username: " . $_POST["username"] . "<br>Password: " . $_POST["password"];

    $mail->send();

    echo
    "
    <script>
    alert('sent successfully');
    document.location.href = 'driver-login.php';
    </script>
    ";
}
?>

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
							<h1>Sign Up</h1>
							<p class="account-subtitle">We'll send a confirmation mail to your email.</p>								
							<form action="driver-register.php" method="post">
              					
								<div class="input-block">
									<label class="form-label">Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control"  placeholder="" name="name" required value="">
								</div>
                				
								<div class="input-block">
									<label class="form-label">Contact No <span class="text-danger">*</span></label>
									<input type="tel" class="form-control"  placeholder="" name="phone_number" required value="">
								</div>
                				
								<div class="input-block">
									<label class="form-label">NIC <span class="text-danger">*</span></label>
									<input type="number" class="form-control"  placeholder="" name="NIC" required value="">
								</div>

								<div class="input-block">
									<label class="form-label">Email <span class="text-danger">*</span></label>
									<input type="email" class="form-control"  placeholder="" name="email" required value="">
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

								<input class="btn btn-outline-light w-100 btn-size mt-1" type="submit" value="Sign Up" name="signup">

								<!-- <a href="login.php" class="btn btn-outline-light w-100 btn-size mt-1" name="sign_up_btn">Sign Up</a> -->

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
								<div class="text-center dont-have">Already have an Account? <a href="login.php">Sign In</a></div>
							</form>							
						</div>
					</div>
				</div>
			</div>
			<?php include 'log-process-footer.php';?>