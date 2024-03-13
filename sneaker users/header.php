<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Forum&family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
</head>
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
                    <button data-target="#login" data-toggle="modal">LOGIN</button>
                </div>
                <div class="btn2"><button>BOOK TICKET</button></div>
            </div>
        </header>

<div id="login"  aria-hidden="true" tabindex="-1" class="modal" role="dialog">            
<div class="wrapper pop">
  <button data-dismiss="modal" class="close">&times;</button>
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form method="post" class="login">
            <div class="field">
              <input type="text" name="leml" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="lpwd" placeholder="Password" required>
            </div>
            <div class="pass-link"><a href="forgot.php" role="dialog" data-target="#forgot"  data-toggle="modal" data-dismiss="modal">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="lbtn" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>

          <form method="post" class="signup">
            <div class="sfield">
              <input type="email" name="seml" placeholder="Email Address" required>
              <input type="text" name="sunm" placeholder="User Name" required>
            </div>
            <div class="sfield">
              <input type="password" name="spwd" placeholder="Password" required>
              <input type="password" name="cpwd" placeholder="Confirm password" required>
            </div>
            <div class="sfield-gen">
                <!-- <input type="radio" name="gen" id="ml" value="Male"> -->
              <input type="radio" name="sgen" class="gen" value="Male"><span>Male</span></input>
              <input type="radio" name="sgen" class="gen" value="Female"><span>Female</span></input>
              <input type="radio" name="sgen" class="gen" value="Other"><span>Other</span></input>
            </div>
            <div class="sfield">
              <input type="date" name="sdob" placeholder="Date Of Birth" required>
              <input type="text" name="scity" placeholder="City" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="sbtn" value="Signup">
            </div>
          </form>
        </div>
      </div>
</div>
</div>
      
<div id="forgot" class="modal" role="dialog" aria-hidden="true">  
           
    <div class="wrapper forgotw">
  <button data-dismiss="modal" data-target="#login" data-toggle="modal" class="close">&times;</button>
      <div class="title-text">
        <div class="title login">Forgot Password</div>
      </div>
        <div class="form-inner">
          <form method="post" class="login">
            <div class="ffield">
              <input type="text" name="feml" placeholder="Email Address" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="fbtn" value="Forgot password">
            </div>
          </form>
        </div>
      </div>
    </div>
</div>



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
