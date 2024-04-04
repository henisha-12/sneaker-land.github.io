<?php
    session_start();
    if (!isset( $_SESSION["email"])) {
      die("");
    }
    $uid = $_SESSION['email'];
    require('../database/connect.php');
  $q="Select * from tbl_usr where email_id='$uid'";
  $reslut=mysqli_query($mysql,$q);  
  $r=mysqli_fetch_array($reslut);
  $id = $r[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sneaker Land - Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="icon" href="../images/amusement-park.png" type="image/x-icon">
  
</head>
<script>
  function logout(){
    window.close();
  }
</script>
<body>
<div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">            
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="../index.php"><img class="logo-img" src="http://localhost/main_project/sneaker%20users/assets/logo.jpg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="http://localhost/main_project/sneaker%20users/assets/logo.jpg" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown  d-lg-flex d-none">
              <a  href="logout.php" target="_blank" onclick= "logout()" class="btn btn-inverse-primary btn-sm">Log Out </a>
                      </li>
                      
				<li class="nav-item dropdown  d-lg-flex d-none">
				<a  href="change_pass.php" class="btn btn-inverse-primary btn-sm">Change Password </a>
                </li>
              <li class="nav-item nav-profile">
                          <a class="nav-link" href="edit_profile.php" data-bs-toggle="dropdown" id="profileDropdown">
                  <span class="nav-profile-name"><?php echo $_SESSION['email'] ?></span>
                  <span class="online-status"></span>
                            <img src="../images/faces/face28.png" alt="profile"/>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">
                  <i class="mdi mdi-file-document-box mdi-18px menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="Rides.php" class="nav-link">
                    <i class="mdi mdi-bridge mdi-18px menu-icon"></i>
                    <span class="menu-title">Rides</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="Resort.php" class="nav-link">
                    <i class="mdi mdi-church menu-icon"></i>
                    <span class="menu-title">Resort</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="Event.php" class="nav-link">
                    <i class="mdi mdi-airballoon menu-icon"></i>
                    <span class="menu-title">Event</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="Gallery.php" class="nav-link">
                    <i class="mdi mdi-panorama menu-icon"></i>
                    <span class="menu-title">Gallery</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="Package.php" class="nav-link">
                    <i class="mdi mdi-package menu-icon"></i>
                    <span class="menu-title">Packages</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
              <a href="Age.php" class="nav-link">
                <i class="mdi mdi-account-alert menu-icon"></i>
                <span class="menu-title">Age Limit</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
              <li class="nav-item">
                  <a href="Reviews.php" class="nav-link">
                    <i class="mdi mdi-heart-half-full menu-icon"></i>
                    <span class="menu-title">Reviews</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-currency-usd menu-icon"></i>
                    <span class="menu-title">Bookings</span></a>
					<div class="submenu">
						<ul>
							<li class="nav-item"><a class="nav-link" href="Package_book.php">Package</a></li>
							<li class="nav-item"><a class="nav-link" href="Resort_book.php">Resort</a></li>
							<li class="nav-item"><a class="nav-link" href="Event_book.php">Event</a></li>
						</ul>
					</div>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="container-fluid page-body-wrapper">
          <div class="main-panel">
            <div class="content-wrapper">
            <div class="row">
                <div class='col-12 grid-margin stretch-card'>
                  <div class='card'>
                    <div class='row'>
                      <div class='card-body'>
                        <h4 class='card-title'>Change Password</h4>
                        <form action="" method="POST" enctype='multipart/form-data'>
                          <label for="eml">Email</label><br>
                          <input class='form-control border-dark' value="<?= $r[1]; ?>" readonly name="eml" type="email" id='eml' required/><br>
                          <label for="opwd">Old Password</label><br>
                          <input class='form-control border-dark' name="opwd" type="password" id='opwd' required/><br>
                          <label for="npwd">New Password</label><br>
                          <input class='form-control border-dark' name="npwd" type="password" id='npwd' required/><br>
                          <label for="cpwd">Confirm Password</label><br>
                          <input class='form-control border-dark' name="cpwd" type="password" id='cpwd' required/><br>
                          <input class='w-100 btn btn-inverse-primary btn-large btn-block' name="updt" id="updt" type="submit" value="Change Password">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>



<?php
        if (isset($_REQUEST['updt'])) {
          require("../database/connect.php");
          $opwd=$_REQUEST['opwd'];
          $npwd=$_REQUEST['npwd'];
          $cpwd=$_REQUEST['cpwd'];

          if($npwd == $cpwd){
          $q = "update tbl_usr set password='$npwd' where id=$id";
        //   echo $q;
          if (mysqli_query($mysql,$q)) {
            Session_destroy();
            echo "<script type='text/javascript'>window.location.href='../../../'</script>";
          // header("Location: ../Event.php",true);
            // echo "Updated Successfully!!";
          
          }
          else{
            // echo "<h1> Insertion Failed!!!</h1>";
          }
          // header('location:../Event.php');
        }
        else{
            echo "<script>alert('Password not match')</script>";
        }
    }
?>