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
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
	<link rel="icon" href="images/amusement-park.png" type="image/x-icon">
  </head>
  <body>
		<!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">            
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.php"><img class="logo-img" src="http://localhost/main_project/sneaker%20users/assets/logo.jpg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="index.php"><img src="http://localhost/main_project/sneaker%20users/assets/logo.jpg" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
				<li class="nav-item dropdown  d-lg-flex d-none">
				<a  href="pages/logout.php" target="_blank" onclick= '<?php echo "<script>window.close()</script>";?>' class="btn btn-inverse-primary btn-sm">Log Out </a>
                </li>
				<li class="nav-item dropdown  d-lg-flex d-none">
				<a  href="pages/change_pass.php" class="btn btn-inverse-primary btn-sm">Change Password </a>
                </li>
				
				<li class="nav-item nav-profile">
                  	<a class="nav-link" href="pages/edit_profile.php" id="profileDropdown">
						<span class="nav-profile-name"><?php echo $_SESSION['email'] ?></span>
						<span class="online-status"></span>
                    	<img src="images/faces/face28.png" alt="profile"/>
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
              <li class="nav-item active">
                <a class="nav-link" href="index.php">
                  <i class="mdi mdi-file-document-box mdi-18px menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="pages/Rides.php" class="nav-link">
                    <i class="mdi mdi-bridge mdi-18px menu-icon"></i>
                    <span class="menu-title">Rides</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/Resort.php" class="nav-link">
                    <i class="mdi mdi-church menu-icon"></i>
                    <span class="menu-title">Resort</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/Event.php" class="nav-link">
                    <i class="mdi mdi-airballoon menu-icon"></i>
                    <span class="menu-title">Event</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/Gallery.php" class="nav-link">
                    <i class="mdi mdi-panorama menu-icon"></i>
                    <span class="menu-title">Gallery</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/Package.php" class="nav-link">
                    <i class="mdi mdi-package menu-icon"></i>
                    <span class="menu-title">Packages</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
			  <li class="nav-item">
				<a href="pages/Age.php" class="nav-link">
				  <i class="mdi mdi-account-alert menu-icon"></i>
				  <span class="menu-title">Age Limit</span>
				  <i class="menu-arrow"></i>
				</a>
			</li>
              <li class="nav-item">
                  <a href="pages/Reviews.php" class="nav-link">
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
							<li class="nav-item"><a class="nav-link" href="pages/Package_book.php">Package</a></li>
							<li class="nav-item"><a class="nav-link" href="pages/Resort_book.php">Resort</a></li>
							<li class="nav-item"><a class="nav-link" href="pages/Event_book.php">Event</a></li>
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
						<div class="col-sm-6 mb-4 mb-xl-0">
							<div class="d-lg-flex align-items-center">
								<div>
									<h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-8 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<?php include("pages/chart.php");?>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 mb-3 mb-lg-0">
							<div class="card congratulation-bg text-center">
								<div class="card-body pb-0">
									<img src="images/dashboard/face29.png" alt="">  
									<h2 class="mt-3 text-white mb-3 font-weight-bold">Congratulation</h2>
									<p>
									<?php 
										require("database/connect.php");
										$q = "select count(*) from tbl_usr where type='user'";
										if($result = mysqli_query($mysql,$q)){
											while($r = mysqli_fetch_array($result)){
												echo "$r[0]";
											}
										}
									?>	
									119K People visit your adventure park today!!.
										Keep More Pattionate!!. 
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-8 flex-column d-flex stretch-card">
							<div class="row">
								<div class="col-lg-4 d-flex grid-margin stretch-card">
									<div class="card review-border">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold">
												<?php
													require("database\connect.php");
													$q= "select count(*) from tbl_ride where type='High Thriller'";
													$result = mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
          											if(mysqli_num_rows($result)>0){
														while($r=mysqli_fetch_array($result)){
															echo $r[0];
														}
													}
												?>
											</h2>
											<h4 class="card-title mb-2">High Thriller Rides</h4>
										</div>
									</div>
								</div>
								<div class="col-lg-4 d-flex grid-margin stretch-card">
									<div class="card park-visit-border">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold">
												<?php
													require("database\connect.php");
													$q= "select count(*) from tbl_ride where type='Thriller'";
													$result = mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
          											if(mysqli_num_rows($result)>0){
														while($r=mysqli_fetch_array($result)){
															echo $r[0];
														}
													}
												?>
												</h2>
											<h4 class="card-title mb-2">Thriller Ride</h4>
										</div>
									</div>
								</div>
								<div class="col-lg-4 d-flex grid-margin stretch-card">
									<div class="card users-border">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold">
											<?php
													require("database\connect.php");
													$q= "select count(*) from tbl_ride where type='Kiddi'";
													$result = mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
          											if(mysqli_num_rows($result)>0){
														while($r=mysqli_fetch_array($result)){
															echo $r[0];
														}
													}
												?>
												</h2>
											<h4 class="card-title mb-2">Kiddie Ride</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 flex-column d-flex stretch-card">
							<div class="row flex-grow">
								<div class="col-sm-12 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-lg-8">
													<h3 class="font-weight-bold text-dark">
														<?php
															$today = date('d-m-y'); 
															echo $today; 
														?>
													</h3>
													<p class="text-dark">
														<?php
															$DayOfWeekNumber = date("w");
															switch($DayOfWeekNumber)
															{
															   case 0 : echo("Sunday"); break;
															   case 1 : echo("Monday"); break;
															   case 2 : echo("Tuesday"); break;
															   case 3 : echo("Wednesday"); break;
															   case 4 : echo("Thursday"); break;
															   case 5 : echo("Friday"); break;
															   case 6 : echo("Saturday");
															}
														?>
													</p>
													<!-- <div class="d-lg-flex align-items-baseline mb-3">
														<h1 class="text-dark font-weight-bold">
															
															
														23<sup class="font-weight-light"><small>o</small><small class="font-weight-medium">c</small></sup></h1>
														<p class="text-muted ms-3">Partly cloudy</p>
													</div> -->
												</div>
												<div class="col-lg-4">
													<div class="position-relative">
														<img src="images/dashboard/live.png" class="w-100" alt="">
														<div class="live-info badge badge-success">Live</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 grid-margin stretch-card">
							<a href="pages/users.php" style="text-decoration:none;width:100%">
							<div class="card">
								<div class="card-body pb-0">
									<div class="d-flex align-items-center justify-content-between">
										<h2 class="text-success font-weight-bold">
										<?php
													require("database\connect.php");
													$q= "select count(*) from tbl_usr";
													$result = mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
          											if(mysqli_num_rows($result)>0){
														while($r=mysqli_fetch_array($result)){
															echo $r[0];
														}
													}
												?>
										</h2>
										<i class="mdi mdi-account mdi-24px text-dark"></i>
									</div>
								</div>
								<canvas id="newClient"></canvas>
								<div class="line-chart-row-title">USERS</div>
							</div>
							</a>
						</div>
						<div class="col-lg-2 grid-margin stretch-card">
							<a href="pages/Rides.php" style="text-decoration:none;width:100%">
							<div class="card">
								<div class="card-body pb-0">
									<div class="d-flex align-items-center justify-content-between">
										<h2 class="text-danger font-weight-bold">
										<?php
													require("database\connect.php");
													$q= "select count(*) from tbl_ride";
													$result = mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
          											if(mysqli_num_rows($result)>0){
														while($r=mysqli_fetch_array($result)){
															echo $r[0];
														}
													}
												?>
										</h2>
										<i class="mdi mdi-bridge mdi-24px text-dark"></i>
									</div>
								</div>
								<canvas id="allProducts"></canvas>
								<div class="line-chart-row-title">All Rides</div>
							</div>
							</a>
						</div>
						<div class="col-lg-2 grid-margin stretch-card">
							<a href="pages/Package.php" style="text-decoration:none;width:100%">
							<div class="card">
								<div class="card-body pb-0">
									<div class="d-flex align-items-center justify-content-between">
										<h2 class="text-info font-weight-bold">
										<?php
													require("database\connect.php");
													$q= "select count(*) from tbl_package";
													$result = mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
          											if(mysqli_num_rows($result)>0){
														while($r=mysqli_fetch_array($result)){
															echo $r[0];
														}
													}
												?>
										</h2>
										<i class="mdi mdi-package mdi-24px text-dark"></i>
									</div>
								</div>
								<canvas id="invoices"></canvas>
								<div class="line-chart-row-title">PACKAGES</div>
							</div>
							</a>
						</div>
						<div class="col-lg-2 grid-margin stretch-card">
							<a href="pages/Event.php" style="text-decoration:none;width:100%">
							<div class="card">
								<div class="card-body pb-0">
									<div class="d-flex align-items-center justify-content-between">
										<h2 class="text-warning font-weight-bold">
										<?php
													require("database\connect.php");
													$q= "select count(*) from tbl_event";
													$result = mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
          											if(mysqli_num_rows($result)>0){
														while($r=mysqli_fetch_array($result)){
															echo $r[0];
														}
													}
												?>
										</h2>
										<i class="mdi mdi-airballoon mdi-24px text-dark"></i>
									</div>
								</div>
								<canvas id="projects"></canvas>
								<div class="line-chart-row-title">EVENTS</div>
							</div>
							</a>
						</div>
						<div class="col-lg-2 grid-margin stretch-card">
							<a href="pages/Resort.php" style="text-decoration:none;width:100%">
							<div class="card">
								<div class="card-body pb-0">
									<div class="d-flex align-items-center justify-content-between">
										<h2 class="text-secondary font-weight-bold">
										<?php
													require("database\connect.php");
													$q= "select count(*) from tbl_resort";
													$result = mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
          											if(mysqli_num_rows($result)>0){
														while($r=mysqli_fetch_array($result)){
															echo $r[0];
														}
													}
												?>
										</h2>
										<i class="mdi mdi-church mdi-24px text-dark"></i>
									</div>
								</div>
								<canvas id="orderRecieved"></canvas>
								<div class="line-chart-row-title">RESORTS</div>
							</div>
							</a>
						</div>
						<div class="col-lg-2 grid-margin stretch-card">
							<a href="pages/Reviews.php" style="text-decoration:none;width:100%">
							<div class="card">
								<div class="card-body pb-0">
									<div class="d-flex align-items-center justify-content-between">
										<h2 class="text-dark font-weight-bold">
										<?php
													require("database\connect.php");
													$q= "select count(*) from tbl_review";
													$result = mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
          											if(mysqli_num_rows($result)>0){
														while($r=mysqli_fetch_array($result)){
															echo $r[0];
														}
													}
												?>
										</h2>
										<i class="mdi mdi-star text-dark mdi-24px"></i>
									</div>
								</div>
								<canvas id="transactions"></canvas>
								<div class="line-chart-row-title">Review</div>
							</div>
							</a>
						</div>
					</div>
				</div>
				
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
    </div>
		<!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
		<script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
		<script src="vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="vendors/justgage/justgage.js"></script>
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>