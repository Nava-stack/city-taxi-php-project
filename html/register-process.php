<?php
session_start(); // Start the session
require 'database-config.php';

	if(isset($_POST["signup"]))
	{
	$na = $_POST["name"];
    $una = $_POST["username"];
    $pass= $_POST["password"];   // Plain text password
    $email = $_POST["email"];
    $phonenum = $_POST["phone_number"];

	 // Hash the password before storing it
	 $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

	$sql = "insert into passenger (name, username, password, email, phone_number) values('$na','$una','$hashed_password','$email','$phonenum') ";
		if(mysqli_query($conn, $sql))
		{
			echo 
			"
			<script>
			alert('Registration Successful');
			document.location.href = 'login-as.php';
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
    $mail->Body = "<B>Hi ".$_POST["name"] .",</B>". "<br>You are successfully registered as a passenger in CITY TAXI. " ."<br>Below Your username and password availabe don't share it to anyone.". "<br><br>Username: " . $_POST["username"] . "<br>Password: " . $_POST["password"];

    $mail->send();

    echo
    "
    <script>
    alert('sent successfully');
    document.location.href = 'login.php';
    </script>
    ";
}
?>