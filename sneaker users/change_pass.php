

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Sneaker Land-Adventure Park</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/amusement-park.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>



<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader about-page-2">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="k" class="letters-loading">
                                k
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <?php
            include "header.php";
        ?>


        <!-- Page Title -->
        <section class="page-title">
            <div class="img-wrap parallax-demo-1">
                <div class="parallax-inner back-img" style="background-image: url(assets/images/gallery/ride/group-of-happy-best-friends-laughing-and-having-fun-at-amusement-park.jpg);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Profile</li>
                    </ul>
                    <div class="title">
                        <h1>Profile</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <?php
            if(isset($_SESSION["email"])){
                echo "<style>.contact-section{display:block}</style>";
            }
            else{
                echo "<style>.contact-section{display:none}</style>";                
            }
        ?>

      <?php 
        $uid = $_SESSION['email'];
        require('connect.php');
        $q="Select * from tbl_usr where email_id='$uid'";
        $reslut=mysqli_query($mysql,$q);  
        $r=mysqli_fetch_array($reslut);
        $id = $r[0];
      ?>

        <!-- contact-section -->
        <section class="contact-section centred">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 offset-xl-2 big-column">
                        <div class="sec-title centred">
                            <h2>change password</h2>
                        </div>
                        <div class="form-inner">
                            <form method="post" id="contact-form" class="default-form" novalidate="novalidate">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email address" value="<?php echo $_SESSION['email'] ?>"  required="" aria-required="true">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="password" name="opwd" placeholder="Old password" required="" aria-required="true">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="password" name="npwd" placeholder="New Password" required="" aria-required="true">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="password" name="cpwd" placeholder="Confirm Password" required="" aria-required="true">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                        <button class="theme-btn btn-one" type="submit" name="updt"><span>Change Password</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <?php
            include "footer.php";
        ?>



        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>
    </div>


    <!-- jequery plugins -->
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

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Weldlfe/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jan 2024 07:05:16 GMT -->

</html>


<?php
        if (isset($_REQUEST['updt'])) {
          require("connect.php");
          $opwd=$_REQUEST['opwd'];
          $npwd=$_REQUEST['npwd'];
          $cpwd=$_REQUEST['cpwd'];

          if($npwd == $cpwd){
          $q = "update tbl_usr set password='$npwd' where id=$id";
        //   echo $q;
          if (mysqli_query($mysql,$q)) {
            Session_destroy();
            echo "<script type='text/javascript'>window.location.href='index.php  '</script>";
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