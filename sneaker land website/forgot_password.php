<?php
    session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '..\phpmailer\src\Exception.php';
	require '..\phpmailer\src\PHPMailer.php';
	require '..\phpmailer\src\SMTP.php';


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sneaker Land - Admin</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="icon" href="website/template/images/amusement-park.png" type="image/x-icon">



<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">
<script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });

</script>
</head>

<body>
<!-- partial:index.partial.html -->
	<div class="box-form">
	
		<h1 class='head'>Forgot Password</h1>
		<form action="" method="post">
			<div class="inputs">
				<label for="emid">Email Id</label>
				<input type="email" name="emid" placeholder="Enter Email Id" required>
				<br>
			</div>		
			<input type="submit" name="btn" id="btn" class="button" value="Send"></input>
		</form>
	</div>
</body>
</html>

<?php
	if(isset($_REQUEST["btn"])){
		$mail = new PHPMailer(true);
		$to=$_REQUEST['emid'];

		$mail ->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'sneakerland218@gmail.com';
		$mail->Password = 'vpyr alln rzip egqj';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;

		$mail->setFrom('sneakerland218@gmail.com');

		$mail->addAddress($_REQUEST['emid']);

		$mail->isHTML(true);

		$mail->WordWrap =

		$mail->Subject = 'Retrieve Password';
		$msg = "<div style='background:url()'><p style='color:black;font-size-16px;'>You recently requested to get the password for your sneaker land account.Use the Code below to proceed.
				</p>";
				$rand = rand(10000,99999); 
				 $msg .=  "<br><br><center><b style='text-align:center;width:100%;color:red;font-size:20px;'>".$rand."</b></center><br><br></div>"; 
				$msg .= "<p style='color:black;font-size-16px;'>
				If you did not request a password reset, please ignore this email or reply to let us know. </p>";
		
		$mail->Body = $msg;

		$mail->send();

		echo "<script>alert('send Successfully');</script>";
			$hash = password_hash($rand,PASSWORD_DEFAULT);
			echo "<script type='text/javascript'>window.location.href='verify.php?cd=$hash&eml=$to'</script>";
	  
	}
?>
<?php
// // the message
// $msg = "You recently requested to get the password for your sneaker land account. Use the Code below to proceed.<br><br> <b style='font-size:18px'> ";
// $msg .=  rand(10000,99999); 
// $msg .= "</b> <br><br>If you did not request a password reset, please ignore this email or reply to let us know. ";

// echo $msg;
// // use wordwrap() if lines are longer than 70 characters

// // send email
// mail("someone@example.com","My subject",$msg);
// ?>