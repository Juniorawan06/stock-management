<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Vista Computers</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script> -->
</head>
<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("conn.php");
if (isset($_POST['forgot'])) {
	$qry = "select * from staff_user_db where staffEmail='" . $_POST["email"] . "';";
	$data = $con->query($qry);
	$count = mysqli_num_rows($data);
	if ($count > 0) {
		if ($row = $data->fetch_assoc()) {
			// echo $row["staffPass"];


//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'juniorawan21@gmail.com';                     //SMTP username
    $mail->Password   = 'aufkowbomayzerta';                               //SMTP password
    $mail->SMTPSecure =  'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('juniorawan21@gmail.com', 'Junior Awan');
    $mail->addAddress($_POST['email'], $_POST['email']);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Forgot Passward';
    $mail->Body    = "<br>Dear {$row['staffName']},<br><br>Your Login Password is <b>{$row['staffPass']}</b>, We highly recommend you to change it after first login using editStaff. <br><br> Please make sure your password contains at least 8 characters which includes symbols and numbers. e.g: <b>(12@example54)</b>  <br><br>Regards,<br><br>CEO Vista Computers.<br><br>This is a system generated email.";

    $mail->AltBody = "Dear {$row['staffName']},{$row['staffPass']} is your Login Password that was set by you, We highly reccommed you to change it after first login using edit Staff.Please make sure your password contains at least 8 characters which includes symbols and numbers. e.g = 12@example54";

    $mail->send();
    $sent = "Success";

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
		}
	} else {
		$warning = "Invalid";
		// echo "<script>alert('invalid')</script>";
	}
}
?>

<body>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="vendors/images/Logo.png" alt="Forgot-Passward-img" width="35%">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="vendors/images/forgot-password.png" alt="Forgot Passward">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Forgot Password</h2>
						</div>
						<h6 class="mb-20">Enter your email address to reset your password</h6>
						<form method="POST">
							<div class="input-group custom">
								<input type="email" class="form-control form-control-lg" placeholder="Email" name="email" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-5">
									<div class="input-group mb-0">

										<input class="btn btn-primary btn-lg btn-block" type="submit" name="forgot" value="Submit">

										<!-- <a class="btn btn-primary btn-lg btn-block" href="index.php">Submit</a> -->
									</div>
								</div>
								<div class="col-2">
									<div class="font-16 weight-600 text-center" data-color="#707373">OR</div>
								</div>
								<div class="col-5">
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="login.php">Login</a>
									</div>
								</div>
							</div>
							<br>
							<?php
							if (isset($warning) && $warning == 'Invalid') { ?>
								<h6 class="text-center"><strong style="color:red;">Sorry!</strong> the email is not registered with us.</h6>

								<?php  } elseif (isset($sent) && $sent == 'Success') { ?>
									<h6 class="text-center"> You will shortly recieve an <strong style="color:#1b00ff;">Email</strong> with your login password.</h6>
							<?php  } ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<!-- <script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script> -->
</body>

</html>