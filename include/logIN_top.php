<?php
//session_start();


if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(!isset($_SESSION['login']) && !$_SESSION['login'])
{
    $location = $_SESSION['location'];
    header($location.'Location: login.php'); 
}
?>

<main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Witaj <?php if(!isset($_SESSION)) { session_start(); }; echo $_SESSION['login'];?> </h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php session_start(); echo $_SESSION['location'];?>index.php">Strona główna</a></li>
                                            <li class="breadcrumb-item"><a href="#">Moje kursy</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>    
    </main>
