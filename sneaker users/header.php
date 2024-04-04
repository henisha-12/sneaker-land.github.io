<?php
  session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '..\phpmailer\src\Exception.php';
	require '..\phpmailer\src\PHPMailer.php';
	require '..\phpmailer\src\SMTP.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaker Land-Adventure Park</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Forum&family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\style2.css">

</head>
<script>
  function logout(){
    window.location.href = 'logout.php';
  }
  
  function booking(){
    window.location.href = 'package.php';
                      }
</script>
<body>
        <header class="top_header">
            <div class="logo">
                <img src="assets/logo.jpg" alt="">
            </div>
            <div class="nav_menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown"><a >Rides</a>
                        <div class="drop_content">
                            <a href="all_ride.php">
                                All Rides
                            </a>
                            <a href="high_ride.php">High Thriller Rides</a>
                            <a href="thrill_ride.php">
                                Thriller Rides
                            </a>
                            <a href="kid_ride.php">
                                Kiddie Rides
                            </a>
                        </div>
                    </li>
                    <li><a href="resort.php">Resort</a></li>
                    <li class="dropdown"><a href="#">Gallery</a>
                      <div class="drop_content">
                        <a href="photo.php">
                          Photos
                        </a>
                        <a href="video.php">
                          Videos
                        </a>
                      </div>
                    </li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="right_side">
                <div class="btn1">
                    <div class="btn_hover"></div>
                    <button onclick="logout()">LOG OUT</button>
                </div>
                <?php
                  if(isset($_SESSION["email"])){
                    echo "<style>.lin{display:none;}</style>";
                    echo "<div class='btn2'><button onclick='booking()'>BOOK TICKET</button></div>";
                    
                  }
                ?>
                <div data-target="#login" id="" data-toggle="modal" class="btn2 lin"><button id="book">BOOK TICKET</button></div><pre></pre>
                <span style="display:inline-block;margin-left:10px;flex: 0 0 22% !important;"><a href="edit_profile.php" ><img src="assets\images\face28.png" alt="profile"/></a></span>

            </div>
        </header>

        <?php
  
  if (!isset($_SESSION['email'])){
    echo "<style>.right_side .btn1{visibility:hidden} .right_side img{visibility:hidden}</style>";
  }
?>
<div id="login"  aria-hidden="true" tabindex="-1" class="modal" role="dialog">            
<div class="container">
	<div class="screen">
		<div class="screen__content">
    <button class="close" data-dismiss="modal">X</button>
			<form class="login">
				<div class="login__field">
					<i class="login__icon fas fa-envelope"></i>
					<input type="email" name="email" required class="login__input" placeholder="Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="pwd" required class="login__input" placeholder="Password">
				</div>
				<button name="lin" class="button login__submit">
					<span class="button__text">Log In</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
      <!-- <div class="social-login"> -->
        <a href="" data-dismiss="modal" data-target="#forgot" data-toggle="modal">forgot password?</a>
      <!-- </div> -->
			<div class="social-login">
				<p>Don't have account?</p><a href="" data-dismiss="modal" data-target="#signup" data-toggle="modal">Sign Up</a>
      </div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</div>
      

<?php
if (isset($_REQUEST['lin'])) {
	require("connect.php");
	$email = $_REQUEST['email'];
	$pwd = $_REQUEST['pwd'];
	$q="select * from tbl_usr where email_id='$email' and password='$pwd' and type='user'";

        $res=mysqli_query($mysql,$q);
        if(mysqli_fetch_array($res)){
			    $_SESSION['email']=$email;

          echo "<script type='text/javascript'>window.location.href='package.php'</script>";
        }
        else{
            echo"<script>alert('Please Enter proper email and password')</script>";
        }
}
?>


<div id="signup"  aria-hidden="true" tabindex="-1" class="modal" role="dialog">            
<div class="container">
	<div class="sign_screen screen">
		<div class="screen__content">
    <button class="close" data-dismiss="modal">X</button>
			<form class="signup" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="unm" class="signup_in login__input" required placeholder="User name">
          <i class="login__icon fas fa-envelope"></i>
					<input type="email" name="email" class="signup_in login__input" required placeholder="Email">
				</div>
        <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="pwd" class="signup_in login__input" required placeholder="Password">
          <i class="login__icon fas fa-lock"></i>
					<input type="password" name="cpwd" class="signup_in login__input" required placeholder="Confirm Password">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-calendar"></i>
					<input type="date" name="dob" class="signup_in login__input" required placeholder="Date of Birth">
          <i class="login__icon fas fa-city"></i>
					<input type="text" name="city" class="signup_in login__input" required placeholder="City">
					</div>
				<button class="button login__submit" name="sup">
					<span class="button__text">Sign Up</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
      
			<!-- <div class="social-login">
				<p>Don't have account?</p><a href="">Sign Up</a>
      </div>-->
		</div> 
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</div>

<?php
  if(isset($_REQUEST['sup'])){
    $unm = $_REQUEST['unm'];
    $email = $_REQUEST['email'];
    $pwd = $_REQUEST['pwd'];
    $cpwd = $_REQUEST['cpwd'];
    $dob = $_REQUEST['dob'];
    $city = $_REQUEST['city'];

    if($pwd == $cpwd){
      require("connect.php");
      $q = "insert into tbl_usr values(null,'$email','$unm','$pwd','$dob','$city','user')";
      // $q = "insert into tbl_usr values (null,'$email','$unm','$pwd','$dob','$city')";
      if (mysqli_query($mysql,$q)) {
        $_SESSION['email']=$email;
        
        echo "<script type='text/javascript'>window.location.href='package.php'</script>";
      }
      echo $q;  
    }
  }
?>



<div id="forgot" class="modal" role="dialog" aria-hidden="true">  
  <div class="container">
    <div class="screen" style="height: 400px">
      <div class="screen__content">
      <button class="close" data-dismiss="modal">X</button>
        <form class="login">
          <div class="login__field">
            <i class="login__icon fas fa-envelope"></i>
            <input type="text" name="emid" class="login__input" placeholder="Email">
          </div>
          <button class="button login__submit" name="btn">
            <span class="button__text" >Send</span>
            <i class="button__icon fas fa-chevron-right"></i>
          </button>				
        </form>
      </div>
      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape4"></span>
        <span class="screen__background__shape screen__background__shape3"></span>		
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>		
    </div>
  </div>
</div>

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



    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    
    <script src="assets/js/log_script.js"></script>
  <h1></h1>
</body>
</html>

<?php

  if (isset($_REQUEST['lbtn'])) {

  }

  
  if (isset($_REQUEST['sbtn'])) {
    // define('__ROOT__', dirname(dirname(__FILE__)));
    include_once("connect.php");
  }

?>

