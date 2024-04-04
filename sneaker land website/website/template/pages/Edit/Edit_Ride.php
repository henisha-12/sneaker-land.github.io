<?php
session_start();
if (!isset( $_SESSION["email"])) {
  die("");
}
  $rid = $_GET['ride_id'];
  require('../../database/connect.php');
  $q="Select * from tbl_ride where ride_id=$rid";
  $reslut=mysqli_query($mysql,$q);  
  $r=mysqli_fetch_array($reslut);
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <!-- <meta charset="utf-8"> -->
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
              <li class="nav-item active">
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
                        <h4 class='card-title'>Edit Rides</h4>
                        <form action="" method="POST" enctype='multipart/form-data'>
                          <label for="rnm">Ride Name</label>                          
                          <!-- <span class="error">* <?php echo $rnmErr;?></span><br> -->
                          <input class='form-control border-dark' value="<?= $r[2]; ?>" name="rnm" type="text" id='rnm' required/><br>
                          
                          <label for="cpct">Capacity</label>
                          <!-- <span class="error">* <?php echo $cpctErr;?></span><br> -->
                          <input class='form-control border-dark' value="<?php echo $r[3]; ?>" name="cpct" type="text" id='cpct' required/><br>
                          
                          <label for="loc">Location</label>
                          <!-- <span class="error">* <?php echo $locErr;?></span><br> -->
                          <input class='form-control border-dark' value="<?php echo $r[4]; ?>" name="loc" type="text" id='loc' required/><br>
                          
                          <label for="info">Information</label>             
                          <!-- <span class="error">* <?php echo $infoErr;?></span><br> -->
                          <textarea class='form-control border-dark' name="info" id='rnm' rows=5 required><?php echo $r[5]; ?></textarea><br>
                          
                          <label for="">Type of Ride</label>
                          <!-- <span class="error">* <?php echo $typeErr;?></span><br> -->
                          <div class="row m-2">
                          <?php
                                if($r[6] == "Thriller"){
                                    echo "
                                        <div class='col'><input class='form-check-input m-1' type='radio' id='thriller' checked name='type' value='Thriller'>Thriller</input></div>
                                        <div class='col'><input class='col form-check-input m-1' type='radio' id='kiddi' name='type' value='Kiddi'>Kiddi</input></div>
                                        <div class='col'><input class='col form-check-input m-1' type='radio' id='high' name='type' value='High Thriller'>High Thriller</input></div><br>
                                    ";
                                }
                                elseif ($r[6] == "Kiddi") {
                                    echo "
                                        <div class='col'><input class='form-check-input m-1' type='radio' id='thriller' name='type' value='Thriller'>Thriller</input></div>
                                        <div class='col'><input class='col form-check-input m-1' type='radio' id='kiddi' checked name='type' value='Kiddi'>Kiddi</input></div>
                                        <div class='col'><input class='col form-check-input m-1' type='radio' id='high' name='type' value='High Thriller'>High Thriller</input></div><br>
                                    ";                               
                                }
                                else{
                                    echo "
                                        <div class='col'><input class='form-check-input m-1' type='radio' id='thriller' name='type' value='Thriller'>Thriller</input></div>
                                        <div class='col'><input class='col form-check-input m-1' type='radio' id='kiddi' name='type' value='Kiddi'>Kiddi</input></div>
                                        <div class='col'><input class='col form-check-input m-1' type='radio' id='high' checked name='type' value='High Thriller'>High Thriller</input></div><br>
                                    ";   
                                }
                            ?>
                            </div>
                          <label for="age">Age</label>
                          <!-- <span class="error">* <?php echo $ageErr;?></span><br> -->
                            <div class="row m-2">
                              <?php
                                require("../../database/connect.php");
                                $q="select * from tbl_age";
                                $result=mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
                                if(mysqli_num_rows($result)>0){
                                  while($r1=mysqli_fetch_array($result)){
                                    echo "<div class='col'>";
                                    if($r[7] == $r1[0]){
                                        echo "<input class='form-check-input m-1' type='radio' checked value='$r1[0]' name='age' id='5-10'>".$r1[1]." - ".$r1[2]."</input></div> ";  
                                    }          
                                    else{        
                                    echo "<input class='form-check-input m-1' type='radio' value='$r1[0]' name='age' id='5-10'>".$r1[1]." - ".$r1[2]."</input></div> ";  
                                    }
                                  }
                                }
                              ?>
                            </div>
                            <div class="hero">
                              <label for="input-file" id='drop-area'>
                                <input type="file" accept="image/*" name="img" id="input-file" hidden>
                                <div id="img-view" class='' style="background-image:url('<?php echo "../../images/Rides/$r[1]"?>')">
                                  
                                </div>
                              </label>
                            </div>
                          <input type="hidden" name="img_path" id="img2" value="<?php echo $r[1];?>">
                          <input class='w-100 btn btn-inverse-primary btn-large btn-block ' name='updt' id='updt' type="submit" value="Edit Ride">
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
          $rnm=$_REQUEST['rnm'];
          $cpct=$_REQUEST['cpct'];
          $loc=$_REQUEST['loc'];
          $info=$_REQUEST['info'];
          $type=$_REQUEST['type'];
          $age=$_REQUEST['age'];
          $age=(int)$age;
          $img_name = "";
          // $is_img_new = "no";
          if($_FILES['img']['name']){
            $img_name=$_FILES['img']['name'];
            echo "Hello";
          }
          else{
              $img_name=$r[1];
          }
          $tmp_loc=$_FILES['img']['tmp_name'];
          $q = "update tbl_ride set image='$img_name',name='$rnm',capacity='$cpct', location='$loc',information='$info',type='$type',age_id='$age' where ride_id=$rid";
          echo $q;
          if (mysqli_query($mysql,$q)) {
            echo "<script type='text/javascript'>window.location.href='../Rides.php'</script>";
          // header("Location: ../Rides.php",true);
            // echo "Updated Successfully!!";
            move_uploaded_file($tmp_loc,'../../images/Rides/'.$img_name);
            
          }
          else{
            // echo "<h1> Insertion Failed!!!</h1>";
          }
          // header('location:../Rides.php');
        }
?>