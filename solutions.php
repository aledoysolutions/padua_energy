<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padua Renewable Energy Nigeria Limited </title>
    <link href="//fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>

    <?php 
        include('inc/header.php');
    ?>

    <div class="inner-banner py-5 web" style="background: url(assets/image/control-system1.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4"> </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <h2 class="inner-w3-title mt-lg-5 mt-4" style="font-size:74px;line-height:90px;">
                        SOLUTIONS </h2>
                    </div>
                </div>

            </div>
        </section>
    </div>
    

    <div class="inner-banner py-5 mobile" style="background: url(assets/image/control-system1.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4"> </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                        SOLUTIONS </h2>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- <section>
        <div class="container-fluid">
            <h1 style="text-align: center; color:#008000; margin-top:70px;">THE FUTURE IS ELECTRIC</h1>
        </div>
    </section> -->

    
    <section class="w3l-features py-5" id="features">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <!-- <h6 class="title-subw3hny mb-1">What We Do</h6> -->
                <!-- <h3 class="title-w3l">INDUSTRIES</h3> <br> -->
            </div>
            <div class="main-cont-wthree-2">
                
                <p style="font-size:24px;line-height:40px;text-align:center;">Our solutions can be implemented for a variety of industries. Our clients are primarily industry, agriculture, public sector, the FMCG sector, large estates, off-grid communities and other industries. </p><br>
                <b><p style="font-size:24px;line-height:40px;text-align:center;">Click on the industry you want to discover more about!</p></b>

                <div class="row justify-content-center" style="margin-bottom:-20px;">
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">

                        <div class="box-wrap" style="background-image:url(assets/image/solution3.png);padding-top:150px; padding-bottom:100px; width:100%;text-align:center;">
                            <!-- <div class="icon">
                                <i class="fas fa-truck"></i>
                            </div> -->
                            <h3 class="title-head mb-3"><a style="color:#fff;letter-spacing:1px;" href="solar-cell-system.php">SOLAR POWER PLANTS</a></h3>
                            <a href="solar-cell-system.php"><button class="btn btn-style btn-primary2 ">READ MORE</button></a>
                        </div>

                    </div>


                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="box-wrap" style="background-image:url(assets/image/solution2.png);padding-top:150px; padding-bottom:100px;text-align:center;">
                            <!-- <div class="icon">
                                <i class="fas fa-truck"></i>
                            </div> -->
                            <h3 class="title-head mb-3"><a style="color:#fff;letter-spacing:1px;" href="battery-system.php">BATTERY SYSTEMS</a></h3>
                            <a href="battery-system.php"><button class="btn btn-style btn-primary2 ">READ MORE</button></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="box-wrap" style="background-image:url(assets/image/solution1.png);padding-top:150px; padding-bottom:100px;text-align:center;">
                            <!-- <div class="icon">
                                <i class="fas fa-truck"></i>
                            </div> -->
                            <h3 class="title-head mb-3"><a style="color:#fff;" href="control-system.php">SYSTEM CONTROLS</a></h3>
                            <a href="control-system.php"><button class="btn btn-style btn-primary2 ">READ MORE</button></a>
                        </div>
                    </div>

                </div>
                    
            </div>
        </div>
    </section>
    
    <?php
        include('inc/footer.php');
    ?>


    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!--/search-->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/demo1.js"></script>
    <!--//search-->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

<script>
    $(function(){
        $('#navbarDropdown2').click(function(){
            location.href = 'solutions.php';
        })
    })
    </script>

</body>    