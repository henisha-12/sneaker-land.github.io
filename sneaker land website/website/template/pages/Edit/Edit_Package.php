<?php
session_start();

  $pid = $_GET['p_id'];
  require('../../database/connect.php');
  $q="Select * from tbl_package where p_id=$pid";
  $reslut=mysqli_query($mysql,$q);  
  $r=mysqli_fetch_array($reslut);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kapella Bootstrap Admin Dashboard Template</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  
</head>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">            
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="../../index.php"><img class="logo-img" src="http://localhost/main_project/sneaker%20users/assets/logo.jpg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="http://localhost/main_project/sneaker%20users/assets/logo.jpg" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown  d-lg-flex d-none">
              <a  href="../logout.php" target="_blank" onclick= "window.close();" class="btn btn-inverse-primary btn-sm">Log Out </a>
                      </li>
              <li class="nav-item nav-profile">
                          <a class="nav-link" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                  <span class="nav-profile-name"><?php echo $_SESSION['email'] ?></span>
                  <span class="online-status"></span>
                            <img src="../../images/faces/face28.png" alt="profile"/>
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
                <a class="nav-link" href="../../index.php">
                  <i class="mdi mdi-file-document-box mdi-18px menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="../Rides.php" class="nav-link">
                    <i class="mdi mdi-bridge mdi-18px menu-icon"></i>
                    <span class="menu-title">Rides</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../Resort.php" class="nav-link">
                    <i class="mdi mdi-church menu-icon"></i>
                    <span class="menu-title">Resort</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../Event.php" class="nav-link">
                    <i class="mdi mdi-airballoon menu-icon"></i>
                    <span class="menu-title">Event</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../Gallery.php" class="nav-link">
                    <i class="mdi mdi-panorama menu-icon"></i>
                    <span class="menu-title">Gallery</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item active">
                  <a href="../Package.php" class="nav-link">
                    <i class="mdi mdi-package menu-icon"></i>
                    <span class="menu-title">Packages</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
              <a href="../Age.php" class="nav-link">
                <i class="mdi mdi-account-alert menu-icon"></i>
                <span class="menu-title">Age Limit</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
              <li class="nav-item">
                  <a href="../Reviews.php" class="nav-link">
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
							<li class="nav-item"><a class="nav-link" href="../Package_book.php">Package</a></li>
							<li class="nav-item"><a class="nav-link" href="../Resort_book.php">Resort</a></li>
							<li class="nav-item"><a class="nav-link" href="../Event_book.php">Event</a></li>
						</ul>
					</div>
              </li>
            </ul>
        </div>
      </nav>
    </div>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="main-panel">
            <div class="content-wrapper">
            <div class="row">
                <div class='col-12 grid-margin stretch-card'>
                  <div class='card'>
                    <div class='row'>
                      <div class='card-body'>
                        <h4 class='card-title'>Edit Package</h4>
                        <form action="" method="POST">
                          <label for="pnm">Package Name</label><br>
                          <input class='form-control border-dark' value="<?= $r[1]; ?>" name="pnm" type="text" id='pnm' required/><br>
                          <label for="aprc">Adult Price</label><br>
                          <input class='form-control border-dark' value="<?= $r[2]; ?>" name="aprc" type="number" id='aprc' step='500' min='0' required/><br>
                          <label for="tprc">Teenager Price</label><br>
                          <input class='form-control border-dark' value="<?= $r[3]; ?>" name="tprc" type="number" id='tprc' step='500' min='0' required/><br>
                          <label for="kprc">Kids Price</label><br>
                          <input class='form-control border-dark' value="<?= $r[4]; ?>" name="kprc" type="number" id='kprc' step='500' min='0' required/><br>
                          <label for="info">Information</label><br>
                          <textarea class='form-control border-dark' name="info" id='info' rows=5 required><?= $r[5]; ?></textarea><br>
                          <input class='w-100 btn btn-inverse-primary btn-large btn-block ' name="updt" type="submit" value="Edit Package">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <script src="../../../vendors/base/vendor.bundle.base.js"></script>
      <script src="../../../js/template.js"></script>
    </body>
</html>

<?php
        if (isset($_REQUEST['updt'])) {
          require("../../database/connect.php");
          $pnm=$_REQUEST['pnm'];
          $aprc=$_REQUEST['aprc'];
          $tprc=$_REQUEST['tprc'];
          $kprc=$_REQUEST['kprc'];
          $info=$_REQUEST['info'];
          
          $q = "update tbl_package set p_name ='$pnm',a_price='$aprc',t_price='$tprc',k_price='$kprc',info='$info' where p_id=$pid";
          echo $q;
          if (mysqli_query($mysql,$q)) {
            echo "<script type='text/javascript'>window.location.href='../Package.php'</script>";
          // header("Location: ../Event.php",true);
            // echo "Updated Successfully!!";           
            
          }
          else{
            // echo "<h1> Insertion Failed!!!</h1>";
          }
          // header('location:../Packegs .php');
        }
?>
