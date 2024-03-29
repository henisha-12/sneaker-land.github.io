<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kapella Bootstrap Admin Dashboard Template</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  
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
            <a class="navbar-brand brand-logo" href="../index.php"><img class="logo-img" src="http://localhost/main_project/sneaker%20users/assets/logo.jpg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="http://localhost/main_project/sneaker%20users/assets/logo.jpg" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown  d-lg-flex d-none">
              <a  href="logout.php" target="_blank" onclick= "window.close();" class="btn btn-inverse-primary btn-sm">Log Out </a>
                      </li>
              <li class="nav-item nav-profile">
                          <a class="nav-link" href="#" data-bs-toggle="dropdown" id="profileDropdown">
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
              <li class="nav-item active">
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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="main-panel">
            <div class="content-wrapper">       
        <?php
          require("../database/connect.php");
          $q="select r.*, a.to_age, a.from_age from tbl_ride as r INNER JOIN tbl_age as a on r.age_id = a.age_id;";
          $result=mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
          if(mysqli_num_rows($result)>0){
            echo "<div class='row'>
            <div class='col-12 m-1 grid-margin'>
              <div class='card'>
                <div class='row'>
                  <div class='card-body'>
                    <h4 class='card-title'>Rides</h4>
                    <div class='table-responsive'>
                      <table class='table table-hover'>
                        <thead>
                          <tr>
                            <th>Ride</th>
                            <th>Name</th>
                            <th>Capacity</th>
                            <th>Location</th>
                            <th>Information</th>
                            <th>Type</th>
                            <th>Minimum Age</th>
                            <th>Maximum Age</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>";
                        while($r=mysqli_fetch_array($result)){
                          echo "<tbody>
                            <tr>
                              <td><img src='../images/Rides/roler_coaster.jpg' style='width:100px !important;height: 100px !important;border-radius:0% !important' alt=$r[2]></td>
                              <td>$r[2]</td>
                              <td class='ext-danger'>$r[3]</td>
                              <td>$r[4]</td>
                              <td>$r[5]</td>
                              <td>$r[6]</td>
                              <td>$r[7]</td>
                              <td>$r[8]</td>
                              <td><a class='btn btn-inverse-primary btn-sm' href='Edit_Ride.php?ride_id=$r[0]'><i class='mdi mdi-pencil-circle-outline mdi-24px'></i></td>
                              <td><a class='btn btn-inverse-primary btn-sm' onclick='ConfirmDelete()' href='Delete_Ride.php?ride_id=$r[0]'><i class='mdi mdi-delete-empty mdi-24px'></td>
                            </tr>
                          </tbody>";
                        }
                        echo "</table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
          }
        ?>
        </div>
          </div>
        </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
    <script src="../../js/template.js"></script>
    <script src="../js/script.js"></script>
    <!-- endinject -->
  </body>
</html>