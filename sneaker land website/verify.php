<?php
    session_start();
    $code = $_GET['cd'];
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
	
		<h1 class='head'>Verify Code</h1>
		<form action="" method="post">
			<div class="inputs">
				<label for="emid">Code</label>
				<input type="text" name="code" placeholder="Enter Verification Code" required>
				<br>
			</div>		
			<input type="submit" name="btn" id="btn" class="button" value="Send"></input>
		</form>
	</div>
</body>
</html>

<?php
	if(isset($_REQUEST["btn"])){
        $code1 = $_REQUEST['code'];
        $verify = password_verify($code1, $code);
        if($verify){
            $to = $_GET['eml'];
            require('connect.php');
            $q= "select * from tbl_usr where email_id = '$to'";
            if($result=mysqli_query($mysql,$q)){
                $r = mysqli_fetch_array($result);
                print_r($r);
                echo "<script>alert('$r[3]')</script>";
                echo "<script type='text/javascript'>window.location.href='index.php'</script>";
            }
        }
        else{
            echo "<script>alert('Failed')</script>";
        }
	}
?>