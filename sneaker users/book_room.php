<?php
    $rid = $_GET['id'];
    require('connect.php');
    $q="select * from tbl_resort where r_id=$rid";
    $result=mysqli_query($mysql,$q) or die("Query Failed!!!".mysqli_error($mysql));
    if(mysqli_num_rows($result)>0){
        while($r=mysqli_fetch_array($result)){
            $prc=$r[3];
        }
    }
    include "connect.php";


    if (isset($_POST['submit_form'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $txtDate = $_POST['txtDate'];
        $no_r= $_POST['no'];
        $no_dy = $_POST['nod'];


        $q = "INSERT INTO tbl_bookroom VALUES (null,$rid,$no_r,'$email','$name','$txtDate','$no_dy')";

        $result = mysqli_query($mysql,$q);

        if ($result) {
            header("location:index.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Restar-Amusment Park</title>

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
                        <li>Book Room</li>
                    </ul>
                    <div class="title">
                        <h1>Book Room</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <section class="contact-section centred">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 offset-xl-2 big-column">
                        <div class="sec-title centred">
                            <h2>BOOK Room</h2>
                        </div>
                        <div class="form-inner text-left">
                            <form method="post" action="" id="contact-form" class="default-form" novalidate="novalidate">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="name" class="h6">Name:</label>
                                        <input type="text" class="form-control text-font" id="name" placeholder="Name" name="name">
                                        <div class="invalid-feedback">Please enter your name.</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="email" class="h6">Email:</label>
                                        <input type="text" class="form-control text-font" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" value="<?php echo $_SESSION['email'];?>" readonly placeholder="Email" name="email">
                                        <div class="invalid-feedback invalid-feedback-email">Please enter a valid email address.</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="no" class="h6">No of Rooms:</label>
                                        <div class="d-flex">
                                            <div class="input-group">
                                                <span class="btn btn-warning d-flex align-items-center text-font" onclick="decrement('no')">-</span>
                                                <input type="text" class="form-control text-font" min="1" id="no" value="1" readonly name="no">
                                                <span class="btn btn-warning d-flex align-items-center text-font" onclick="increment('no')">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="txtDate" class="h6">Date:</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control text-font" id="txtDate" name="txtDate">
                                        </div>
                                        <div class="invalid-feedback invalid-feedback-date">Please select a date.</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="nod" class="h6">No of Days:</label>
                                        <div class="d-flex">
                                            <div class="input-group">
                                                <span class="btn btn-warning d-flex align-items-center text-font" onclick="decrement('nod')">-</span>
                                                <input type="text" class="form-control text-font" min="1" id="nod" value="1" readonly name="nod">
                                                <span class="btn btn-warning d-flex align-items-center text-font" onclick="increment('nod')">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="total" class="h6">Total:</label>
                                        <div class="input-group">
                                            <input class="form-control d-flex align-items-center" value="0" id="total" name="total" readonly>
                                        </div>
                                        <div class="invalid-feedback invalid-feedback-total">Select at least one person.</div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 text-center">
                                        <button class="theme-btn btn-one" name="submit_form" id="buy" onclick="validateForm()">Buy</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script>
            // date valiation
            

            var noCount = 1;
            var nodayCount = 1;

            
            var Price = <?php echo $prc?>;
            $('document').ready(function(){
                console.log(Price)
                updateTotal();
            })
            $(function(updatedate) {
                var dtToday = new Date();

                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if (month < 10)
                    month = '0' + month.toString();
                if (day < 10)
                    day = '0' + day.toString();

                var minDate = year + '-' + month + '-' + day;

                $('#txtDate').attr('min', minDate);
            });
            // console.log(noCount)
            // Update the total based on counts
            function updateTotal() {

                var total = noCount * Price * nodayCount;

                $('#total').attr('value', '₹' + total);
            }

            // Increment and Decrement functions
            function increment(category) {
                if (category === 'no') {
                    noCount++;
                    $('#no').val(noCount);
                } else if (category === 'nod') {
                    nodayCount++;
                    $('#nod').val(nodayCount);
                } 
                updateTotal();
            }

            function decrement(category) {
                if (category === 'no' && noCount > 1) {
                    noCount--;
                    $('#no').val(noCount);
                } else if (category === 'nod' && nodayCount > 1) {
                    nodayCount--;
                    $('#nod').val(nodayCount);
                }

                updateTotal();
            }

            $('#clear').click(function() {
                // Clear the form and counts
                $('#name').val('');
                $('#email').val('');
                noCount = 0;
                adultCount = 0;
                teenCount = 0;
                $('#no').val('0');
                $('#adult').val('0');
                $('#teen').val('0');
                $('#txtDate').val('');
                $('#total').text('0');
            });

            $(document).ready(function() {
                // Function to validate an input field
                function validateInput(input, pattern, errorSelector, errorMessage) {
                    var value = input.val();
                    if (value === "" || !pattern.test(value)) {
                        input.addClass("is-invalid");
                        errorSelector.text(errorMessage).show();
                        return false;
                    } else {
                        input.removeClass("is-invalid");
                        errorSelector.text("").hide();
                        return true;
                    }
                }

                // Email validation pattern
                var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                // Add blur event listeners to input fields
                $("#name").blur(function() {
                    validateInput($(this), /^.+$/, $(".invalid-feedback-name"), "Please enter your name.");
                });

                $("#email").blur(function() {
                    validateInput($(this), emailPattern, $(".invalid-feedback-email"), "Please enter a valid email address.");
                });

                $("#txtDate").blur(function() {
                    if ($(this).val() === "") {
                        $(this).addClass("is-invalid");
                        $(".invalid-feedback-date").text("Please select a date.").show();
                    } else {
                        $(this).removeClass("is-invalid");
                        $(".invalid-feedback-date").text("").hide();
                    }
                });

                // Function to calculate the total and check if it's greater than 0
                function calculateTotal() {
                    var no = parseInt($("#no").val());
                    var adult = parseInt($("#adult").val());
                    var teen = parseInt($("#teen").val());
                    var total = no + adult + teen;

                    if (total <= 0) {
                        $("#total").addClass("is-invalid");
                        $(".invalid-feedback-total").text("Select at least one person.").show();
                        return false;
                    } else {
                        $("#total").removeClass("is-invalid");
                        $(".invalid-feedback-total").text("").hide();
                        return true;
                    }
                }

                // Add input event listeners to quantity fields (no, Adult, teen) for immediate validation
                $("#no, #adult, #teen").on("input", function() {
                    calculateTotal();
                });

                // Validate the form on Buy button click
                $("#buy").click(function(e) {
                    // Trigger blur for all input fields to perform validation
                    $("#name, #email, #txtDate").blur();

                    // Calculate the total and check if it's greater than 0
                    if (calculateTotal()) {
                        // If all validation passes, you can redirect to the card.html page
                        window.location.href = 'card.html';
                    } else {
                        e.preventDefault(); // Prevent the form from submitting if there are validation errors
                    }
                });
            });
        </script>



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