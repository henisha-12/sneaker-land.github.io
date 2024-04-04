<?php
session_start();
if (!isset( $_SESSION["email"])) {
  die("");
}

  $eid = $_GET['e_id'];
  require('../../database/connect.php');
  $q="Select * from tbl_event where e_id=$eid";
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
				<a  href="" class="btn btn-inverse-primary btn-sm">Change Password </a>
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
                        <h4 class='card-title'>Edit Events</h4>
                        <form action="" method="POST" enctype='multipart/form-data'>
                          <label for="enm">Event Name</label><span class="err" id="enm_err">*</span><br>
                          <input class='form-control border-dark' value="<?= $r[1]; ?>" name="enm" type="text" id='enm'/><br>
                          <label for="sdt">Starting Date</label><span class="err" id="sdt_err">*</span><br>
                          <input class='form-control border-dark' min='<?php echo date('Y-m-d')?>' value="<?= $r[2]; ?>" name="sdt" type="date" id='sdt'/><br>
                          <label for="edt">Ending Date</label><span class="err" id="edt_err">*</span><br>
                          <input class='form-control border-dark' value="<?= $r[3]; ?>" name="edt" type="date" id='edt'/><br>
                          <label for="info">Information</label><span class="err" id="info_err">*</span><br>
                          <textarea class='form-control border-dark' name="info" id='info' rows=5><?= $r[4]; ?></textarea><br>
                          <label for="prc">Price</label><span class="err" id="prc_err">*</span><br>
                          <input class='form-control border-dark' value="<?= $r[6]; ?>" name="prc" type="number" id='prc' step='500' min='0'/><br>                          
                          <span  class="err" id="img_err">*</span><br>
                          <div class="hero">
                              <label for="input-file" id='drop-area'>
                                <input type="file" accept="image/*" name="img" id="input-file" hidden>
                                <div id="img-view" class='' style="background-image:url('<?php echo "../../images/Events/$r[5] "; ?>')"></div>
                              </label>
                            </div>
                          
                          <input class='w-100 btn btn-inverse-primary btn-large btn-block' name="updt" id="updt" type="button" value="Edit Event">
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
      <script>
        $('document').ready(function(){
          jQuery('#sdt').change(function(){
            let min = new Date(Date.parse(jQuery('#sdt').val()));
            let min2 = new Date();
            min2.setDate(min.getDate()+1);
            const month = min2.getUTCMonth()+1;
            const day = min2.getUTCDate();
            const year = min2.getUTCFullYear();

            console.log(typeof (jQuery('#sdt').val()))

            const newmin = year+'-'+month+'-'+day;
            jQuery('#edt').attr({'min': ''+newmin+''});
          })
        })
      </script>
    </body>
</html>

<?php
        if (isset($_REQUEST['updt'])) {
          require("../../database/connect.php");
          $enm=$_REQUEST['enm'];
          $sdt=$_REQUEST['sdt'];
          $edt=$_REQUEST['edt'];
          $info=$_REQUEST['info'];
          $prc=$_REQUEST['prc'];
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

          if ($enm == "" || $sdt == "" || $edt== "" || $info == "" || $prc == "" || $img_name == "") {
            if($enm == ""){
              $enm_err = "This field is required";
              echo "<script> document.querySelector('#enm_err').innerHTML='$enm_err'</script>";
            }
            else{
              $enm_err = "*";
              echo "<script> document.querySelector('#enm_err').innerHTML='$enm_err'</script>";
            
            }


            if($sdt == ""){
              $sdt_err = "This field is required";
              echo "<script> document.querySelector('#sdt_err').innerHTML='$sdt_err'</script>";
            }
            else{
              $sdt_err = "*";
              echo "<script> document.querySelector('#enm_err').innerHTML='$sdt_err'</script>";
            
            }


            if($edt == ""){
              $edt_err = "This field is required";
              echo "<script> document.querySelector('#edt_err').innerHTML='$edt_err'</script>";
            }
            else{
              $edt_err = "*";
              echo "<script> document.querySelector('#edt_err').innerHTML='$edt_err'</script>";
            
            }

            
            if($info == ""){
              $info_err = "This field is required";
              echo "<script> document.querySelector('#info_err').innerHTML='$info_err'</script>";
            }
            else{
              $info_err = "*";
              echo "<script> document.querySelector('#info_err').innerHTML='$info_err'</script>";
            
            }


            if($prc == ""){
              $prc_err = "This field is required";
              echo "<script> document.querySelector('#prc_err').innerHTML='$prc_err'</script>";
            }
            else{
              $prc_err = "*";
              echo "<script> document.querySelector('#enm_err').innerHTML='$prc_err'</script>";
            
            }


            if($img_name == ""){
              $img_err = "This field is required";
              echo "<script> document.querySelector('#img_err').innerHTML='$img_err'</script>";
            }
            else{
              $img_err = "*";
              echo "<script> document.querySelector('#img_err').innerHTML='$img_err'</script>";
            
            }
          }
          else{
          $q = "update tbl_event set event_name='$enm',start_date='$sdt',end_date='$edt',info='$info',price='$prc',image='$img_name' where e_id=$eid";
          echo $q;
          if (mysqli_query($mysql,$q)) {
            echo "<script type='text/javascript'>window.location.href='../Event.php'</script>";
          // header("Location: ../Event.php",true);
            // echo "Updated Successfully!!";
            move_uploaded_file($tmp_loc,'../../images/Events/'.$img_name);
            
          }
          else{
            // echo "<h1> Insertion Failed!!!</h1>";
          }
          // header('location:../Event.php');
        }
      }
?>