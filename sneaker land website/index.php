<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sneaker Land - Admin</title>
  <link rel="icon" href="website/template/images/amusement-park.png" type="image/x-icon">

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
	
		<h1 class='head'>Login</h1>
		<form action="" method="post">
			<div class="inputs">
				<label for="emid">Email Id</label>
				<input type="email" name="emid" placeholder="Enter Email Id" required>
				<br>
				<label for="pwd">Password</label>
				<input type="password" autocomplete name="pwd" placeholder="Enter Password" required>
			</div>		
			<a href= "forgot_password.php">forget password?</a>
			<input type="submit" name="btn" id="btn" class="button" value="Login"></input>
		</form>
	</div>
</body>
</html>
<?php
if (isset($_REQUEST['btn'])) {
	require("connect.php");
	$email = $_REQUEST['emid'];
	$pwd = $_REQUEST['pwd'];
	$q="select * from tbl_usr where email_id='$email' and password='$pwd'";

        $res=mysqli_query($mysql,$q);
        if(mysqli_fetch_array($res)){
			$_SESSION['email']=$email;

            header("location:website/template/");
        }
        else{
            echo"<script>alert('Please Enter proper email and password')</script>";
        }
}
?>