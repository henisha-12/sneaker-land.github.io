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
                <div class="parallax-inner back-img" style="background-image: url(assets/images/gallery/amusment/1920x500.jpg);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.php">Home</a></li>
                        <li>About Us</li>
                    </ul>
                    <div class="title">
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- about-style-three -->
        <section class="about-style-three sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <figure class="image-box"><img src="assets/images/gallery/aquarium/an-extra-ordinary-kind-of-fish-e1628655121470.jpg" alt=""></figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_three">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h2>know about sneaker land</h2>
                                </div>
                                <div class="text">
                                    <h5>Dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur sed eiusmod simply free text tempor incidi dunt.</h5>
                                </div>
                                <div class="text">
                                    <p>first Join us at Restar Amusement Park, where every moment is an adventure waiting to unfold. Get ready to experience the thrill of a lifetime – your journey into fun begins here!</p>

                                </div>
                                <div class="btn-box">
                                    <a href="package.php" class="theme-btn btn-one">Book Your Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-three end -->


        
        <?php
            include "connect.php";
            $q= "select * from tbl_review";
            $result=mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
            if(mysqli_num_rows($result)>0){
                echo "<style>.testimonial-section .auto-container{display:block;}</style>";
            }
            else{
                echo "<style>.testimonial-section .auto-container{display:none;}</style>";
            }
        ?>


        <!-- testimonial-section -->
        <section class="testimonial-section centred sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>What they’re <br />saying?</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <?php
                    include "connect.php";
                    $q="select r.*,u.email_id from tbl_review as r INNER JOIN tbl_usr as u where r.email_id=u.id order by r_id desc";
                    $result=mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
                    if(mysqli_num_rows($result)>0){
                        while($r=mysqli_fetch_array($result)){
                            echo "<div class='testimonil-block-one'>
                            <div class='inner-box'>
                                <div class='author-thumb'>
                                    <div class='quote'><i class='flaticon-quote'></i></div>
                                </div>
                                <div class='text'>
                                    <p>⭐⭐⭐⭐ <br>'$r[1]'</p>
                                </div>
                                <div class='author-info'>
                                    <h5>$r[3]</h5>
                                    <span class='designation'>Customer</span>
                                </div>
                            </div>
                        </div>";
                        }
                    }
                ?>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->
        <!-- team-section -->
        <section class="team-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h2>the Team in <br />our Amusment park</h2>
                </div>
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h3><a href="about.php">Aleesha</a> <span>Animal & Fish Doctor</span></h3>
                                        <p> We are a family united by the passion to create unforgettable moments for our guests.</p>
                                        <ul class="social-links clearfix">
                                            <li><a href="about.php"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="about.php"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="about.php"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h3><a href="about.php">michale</a> <span>Ride enginaer</span></h3>
                                        <p> From the cheerful faces at the entrance welcoming you with enthusiasm to the skilled technicians ensuring the safety of every ride.</p>
                                        <ul class="social-links clearfix">
                                            <li><a href="about.php"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="about.php"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="about.php"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <h3><a href="about.php">sarah</a> <span>Animal & Fish Doctor</span></h3>
                                        <p> Join us at Restar Amusement Park where the heart of the fun is the incredible team working tirelessly to make your visit truly magical!</p>
                                        <ul class="social-links clearfix">
                                            <li><a href="about.php"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="about.php"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="about.php"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->

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

</html>