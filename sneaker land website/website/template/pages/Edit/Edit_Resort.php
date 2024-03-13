<?php
session_start();

  $rid = $_GET['r_id'];
  require('../../database/connect.php');
  $q="Select * from tbl_resort where r_id=$rid";
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
<script>
function ConfirmDelete()
{
  return confirm("Are you sure you want to delete?");
}
</script>
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
              <li class="nav-item active">
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
              <li class="nav-item">
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
                        <h4 class='card-title'>Edit Room</h4>
                        <form action="" method="POST" enctype='multipart/form-data'>
                          <label for="rtp">Room Type</label><br>
                          <input class='form-control border-dark' value="<?= $r[1];?>" name="rtp" type="text" id='rtp' required/><br>
                          <label for="info">Information</label><br>
                          <textarea class='form-control border-dark' name="info" id='info' rows=5 required><?= $r[2];?></textarea><br>
                          <label for="prc">Price</label><br>
                          <input class='form-control border-dark' value="<?= $r[3];?>" name="prc" type="number" id='prc' step='500' min='0' required/><br>
                          <label for="no">No of Rooms</label><br>
                          <input class='form-control border-dark' value="<?= $r[4];?>" name="no" type="number" id='no' min="0" required/><br>
                          <div class="hero">
                              <label for="input-file" id='drop-area'>
                                <input type="file" accept="image/*" name="img" id="input-file" hidden>
                                <div id="img-view" class='' style="background-image:url('<?php echo "../../images/Events/$r[5] "; ?>')"></div>
                                  
                              </label>
                            </div>
                          <input class='w-100 btn btn-inverse-primary btn-large btn-block' name="updt" id="updt" type="submit" value="Edit Event">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script src="../../../vendors/base/vendor.bundle.base.js"></script>
      <script src="../../../js/template.js"></script>
      <script src="../../js/script.js"></script>

    </body>
</html>


<?php
        if (isset($_REQUEST['updt'])) {
          require("../../database/connect.php");
          $rtp=$_REQUEST['rtp'];
          $info=$_REQUEST['info'];
          $prc=$_REQUEST['prc'];
          $no=$_REQUEST['no'];
          $img_name = "";
          // $is_img_new = "no";
          if($_FILES['img']['name']){
            $img_name=$_FILES['img']['name'];
            echo "Hello";
          }
          else{
              $img_name=$r[5];
          }
          $tmp_loc=$_FILES['img']['tmp_name'];
          $q = "update tbl_resort set type='$rtp',info='$info',prc='$prc',no='$no',img='$img_name' where r_id=$rid";
          echo $q;
          if (mysqli_query($mysql,$q)) {
            echo "<script type='text/javascript'>window.location.href='../Resort.php'</script>";
          // header("Location: ../Event.php",true);
            // echo "Updated Successfully!!";
            move_uploaded_file($tmp_loc,'../../images/Resort/'.$img_name);
            
          }
          else{
            // echo "<h1> Insertion Failed!!!</h1>";
          }
          // header('location:../Event.php');
        }
?>

<script src="../../../vendors/base/vendor.bundle.base.js"></script>
<script src="../../../js/template.js"></script>
</body>