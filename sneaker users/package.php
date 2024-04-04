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
                        <li>Book Ticket</li>
                    </ul>
                    <div class="title">
                        <h1>Book Ticket</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <section class="animals-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>Our exclusive <br />packages</h2>
                </div>
                <div class="tabs-box">
                        <!-- <img class="arrow-left" src="assets\images\arrow_left.png" alt=""> -->
                    <div class="tab-btn-box p_relative d_block mb_60 centred">
                        <div class="tab-btns tab-buttons centred">
                            <div class="row clearfix pck_row">
                                <?php
                                    require("connect.php");
                                    $q="select * from tbl_package;";
                                    $result=mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
                                    if(mysqli_num_rows($result)>0){
                                        while($r=mysqli_fetch_array($result)){
                                            $img = "assets\images\gallery/ride\chair-swinger.jpg";
                                            echo "<div class='col-lg-2 col-md-6 col-sm-12 single-column pck'>";
                                                echo "<div class='single-item pck_item tab-btn' data-tab='#tab".$r[0]."'>";
                                                    echo "<div class='icon-box'><img src=$img alt=''></div>";
                                                    echo "<h5>$r[1]</h5>";
                                                echo "</div>
                                            </div>";
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <!-- <img class="arrow-right" src="assets\images\arrow_right.png" alt=""> -->
                    </div>
                    <?php
                            require("connect.php");
                            $q="select * from tbl_package";
                            $result=mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
                            if(mysqli_num_rows($result)>0){
                                while($r=mysqli_fetch_array($result)){
                                    echo "<div class='tabs-content'>
                                        <div class='tab' id='tab$r[0]'>
                                            <div class='inner-box'>
                                                <div class='row clearfix'>";
                                        $img = "assets\images\gallery/ride\chair-swinger.jpg";
                                                    echo "<div class='col-lg-6 col-md-6 col-sm-12 text-column'>";
                                                        echo "<div class='text'>";
                                                            echo "<h2>$r[1]</h2>";
                                                            echo "<p>$r[5]";
                                                            echo "</p>";
                                                            echo "<p><b>Kids Price</b> : $r[4]";
                                                            echo "<p><b>Teenager Price</b> : $r[3]";
                                                            echo "<p><b>Adult Price</b> : $r[2]";
                                                    echo "</div></div>";
                                                echo "<div class='col-lg-6 col-md-6 col-sm-12 image-column ride'>
                                                    <figure class='video-box'>
                                                        <img src=$img>
                                                    </figure>
                                                </div>";
                                        echo "</div>
                                        
                                        <button class='theme-btn' id='package$r[0]'>Select Package</button>
                                        </div></div>
                                    </div>";
                                    echo "<script>
                                        $(function (){
                                            $('#package$r[0]').bind('click', function () {
                                                window.location.href= 'book_package.php?id=' + ".$r[0].";
                                            });
                                        });
                                    </script>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>

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