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
                        <li>Event</li>
                    </ul>
                    <div class="title">
                        <h1>Event</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <section class="animals-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>Our exclusive <br />Event</h2>
                </div>
                <div class="tabs-box">
                    <?php
                            require("connect.php");
                            $eid = $_GET['eid']; 
                            $q="select * from tbl_event where e_id = $eid";
                            $result=mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
                            if(mysqli_num_rows($result)>0){
                                while($r=mysqli_fetch_array($result)){
                                    echo "<div class='tabs-content'>
                                            <div class='inner-box'>
                                                <div class='row clearfix'>";
                                        $img = "http://localhost/main_project/sneaker%20land%20website/website/template/images/Events/$r[5]";
                                                    echo "<div class='col-lg-6 col-md-6 col-sm-12 text-column'>";
                                                        echo "<div class='text'>";
                                                            echo "<h2>$r[1]</h2>";
                                                            echo "<p>$r[4]";
                                                            echo "<p><b>Start Date</b> : $r[2]";
                                                            echo "<p><b>End Date</b> : $r[3]";
                                                            echo "<p><b>Price</b> : $r[6]";
                                                    echo "</div></div>";
                                                echo "<div class='col-lg-6 col-md-6 col-sm-12 image-column ride'>
                                                    <figure class='video-box'>
                                                        <img src=$img>
                                                    </figure>
                                                </div>";
                                        echo "
                                        
                                        <button class='theme-btn' id='package'>Book Event</button>
                                        </div></div>
                                    </div>";
                                    echo "<script>
                                        $(function (){
                                            $('#package').bind('click', function () {
                                                window.location.href= 'book_event.php?id=' + ".$r[0].";
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