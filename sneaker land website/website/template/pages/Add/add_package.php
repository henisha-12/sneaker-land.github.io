<?php
    session_start();
    if (!isset( $_SESSION["email"])) {
      die("");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sneaker Land - Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->  
  <link rel="icon" href="../../images/amusement-park.png" type="image/x-icon">

  
</head>
<script>
  function logout(){
    window.close();
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
              <a  href="../logout.php" target="_blank" onclick= "logout()" class="btn btn-inverse-primary btn-sm">Log Out </a>
                      </li>
				<li class="nav-item dropdown  d-lg-flex d-none">
				<a  href="../change_pass.php" class="btn btn-inverse-primary btn-sm">Change Password </a>
                </li>
              <li class="nav-item nav-profile">
                          <a class="nav-link" href="../edit_profile.php" data-bs-toggle="dropdown" id="profileDropdown">
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
                        <h4 class='card-title'>Add Package</h4>
                        <form action="" method="POST">
                          <label for="pnm">Package Name</label><span class="err" id="pnm_err">*</span><br>
                          <input class='form-control border-dark' name="pnm" type="text" id='pnm'/><br>
                          <label for="aprc">Adult Price</label><span class="err" id="aprc_err">*</span><br>
                          <input class='form-control border-dark' name="aprc" type="number" id='aprc' step='500' min='0'/><br>
                          <label for="tprc">Teenager Price</label><span class="err" id="tprc_err">*</span><br>
                          <input class='form-control border-dark' name="tprc" type="number" id='tprc' step='500' min='0'/><br>
                          <label for="kprc">Kids Price</label><span class="err" id="kprc_err">*</span><br>
                          <input class='form-control border-dark' name="kprc" type="number" id='kprc' step='500' min='0'/><br>
                          <label for="info">Information</label><span class="err" id="info_err">*</span><br>
                          <textarea class='form-control border-dark' name="info" id='info' rows=5></textarea><br>
                          <input class='w-100 btn btn-inverse-primary btn-large btn-block ' name="add" type="submit" value="Add Package">
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
        if (isset($_REQUEST['add'])) {
          require("../../database/connect.php");
          $pnm=$_REQUEST['pnm'];
          $aprc=$_REQUEST['aprc'];
          $tprc=$_REQUEST['tprc'];
          $kprc=$_REQUEST['kprc'];
          $info=$_REQUEST['info'];

          if ($pnm == "" || $aprc == "" || $tprc== "" || $kprc == "" || $info == "") {
            if($pnm == ""){
              $pnm_err = "Please enter package name";
              echo "<script> document.querySelector('#pnm_err').innerHTML='$pnm_err'</script>";
            }
            else{
              $pnm_err = "*";
              echo "<script> document.querySelector('#pnm_err').innerHTML='$pnm_err'</script>";
            
            }


            if($aprc == ""){
              $aprc_err = "Please enter adult price";
              echo "<script> document.querySelector('#aprc_err').innerHTML='$aprc_err'</script>";
            }
            else{
              $aprc_err = "*";
              echo "<script> document.querySelector('#aprc_err').innerHTML='$aprc_err'</script>";
            
            }


            if($tprc == ""){
              $tprc_err = "Please enter Teenager price";
              echo "<script> document.querySelector('#tprc_err').innerHTML='$tprc_err'</script>";
            }
            else{
              $tprc_err = "*";
              echo "<script> document.querySelector('#tprc_err').innerHTML='$tprc_err'</script>";
            
            }


            if($kprc == ""){
              $kprc_err = "Please enter kid price";
              echo "<script> document.querySelector('#kprc_err').innerHTML='$kprc_err'</script>";
            }
            else{
              $kprc_err = "*";
              echo "<script> document.querySelector('#kprc_err').innerHTML='$kprc_err'</script>";
            
            }

            
            if($info == ""){
              $info_err = "Please enter package information";
              echo "<script> document.querySelector('#info_err').innerHTML='$info_err'</script>";
            }
            else{
              $info_err = "*";
              echo "<script> document.querySelector('#info_err').innerHTML='$info_err'</script>";
            
            }
          }
          else{
          
            $q = "insert into tbl_package values(null,'$pnm','$aprc','$tprc','$kprc','$info')";
            echo $q;
            if (mysqli_query($mysql,$q)) {
                echo "Inserted Successfully!!";
                echo "<script type='text/javascript'>window.location.href='../Package.php'</script>";
              }
              else{
                echo "<h1>Insertion Failed!!!</h1>";
              }
            } 
          }
        ?>
