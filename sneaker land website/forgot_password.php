<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


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

<!-- <?php
// the message
$msg = "You recently requested to get the password for your sneaker land account. Use the Code below to proceed.<br><br> <b style='font-size:18px'> ";
$msg .=  rand(10000,99999); 
$msg .= "</b> <br><br>If you did not request a password reset, please ignore this email or reply to let us know. ";

echo $msg;
// use wordwrap() if lines are longer than 70 characters

// send email
mail("someone@example.com","My subject",$msg);
?> -->