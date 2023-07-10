<?php

session_start();

require_once("../config/config.php");
require_once("../config/connect.php");


displayErrors();

$_SESSION['location'] = '../';

function do_query_without_result($sql)
{
    $connect = connectToDataBase();
    
    if(!$connect->query($sql))
    {
        throw Exception ($sql);
    } 
}
    
    $fw = $_POST["first-word"];
    $sw = $_POST["second-word"];
    $category = $_POST["category"];
    $course = $_POST["course"];

    $id_user = $_SESSION['id_user'];
    
    $sql = "INSERT INTO Card (First_Word, Second_Word, Id_category, Id_language, Id_user, Id_Course) 
    VALUES ('$fw', '$sw', 
    (SELECT Id_category FROM Category WHERE Name = '$category'), 
    1, 
    '$id_user', 
    (SELECT Id_course FROM Course WHERE Name = '$course'))";
    do_query_without_result($sql);

?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../cms/assets/images/logos/logo2.png">

	<!-- CSS here -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../assets/css/themify-icons.css">
	<link rel="stylesheet" href="../assets/css/slick.css">
	<link rel="stylesheet" href="../assets/css/nice-select.css">
	<link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bg-image.css">
    <link rel="stylesheet" href="assets/css/inccorect-data.css">
    <link rel="stylesheet" href="assets/css/info.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


    <main class="login-body" data-vide-bg="../assets/img/login-bg.mp4">
        <!-- Login Admin -->
            
            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="../index.php"><img src="../assets/img/logo/loder.png" alt=""></a>
                </div>
                <h2>Udało się!</h2>
                <h3 class="info">Twoja fiszka została dodana.</h3>
                <h3 class="link_back"><a href="addFlashcard.php">Wróć</a></h3>
                
            </div>
        <!-- /end login form -->
    </main>


    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Video bg -->
    <!--script src="../assets/js/jquery.vide.js"></script-->

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/animated.headline.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="../assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="../assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <script src="../assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
    
    </body>
</html>