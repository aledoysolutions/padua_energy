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

    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                            Core Value </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Core Value</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <section class="w3l-features py-5" id="features">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <!-- <h6 class="title-subw3hny mb-1">What We Do</h6> -->
                <h3 class="title-w3l">Core Value</h3>
            </div>
            <div class="main-cont-wthree-2">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Health, safety, Environment & Safety(HSES)</a></h4>
                            <p class="text-para">At Padua Renewable Energy Nigeria Limited , HSES is a prioity. Our commitment to HSES is total and underwaving. <br> <br> <br> </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Ethics</a></h4>
                            <p class="text-para">Our business transactions are transparent and executed with highest level of honesty, openness and compliance with local/international standards and regulations. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-people-carry"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Operational Excellence</a></h4>
                            <p class="text-para">We strive to achieve on Time, on Budget, without compromising on quality and safety standards. <br> <br> <br> <br> </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <!-- <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Health, safety, Environment & Safety(HSES)</a></h4>
                            <p class="text-para">At Padua Renewable Energy Nigeria Limited , HSES is a prioity. Our commitment to HSES is total and underwaving. <br> <br> <br> </p>
                        </div> -->
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Win-Win Culture</a></h4>
                            <p class="text-para">Our Collaboration with clients, sub-contractors, suppliers and partners is to foster a mutually beneficial relationship. <br> <br> <br> </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <!-- <div class="grids-1 box-wrap"> -->
                            <!-- <div class="icon">
                                <i class="fas fa-people-carry"></i> -->
                            <!-- </div>
                            <h4><a href="#service" class="title-head mb-3">Operational Excellence</a></h4>
                            <p class="text-para">We strive to achieve on Time, on Budget, without compromising on quality and safety standards. <br> <br> <br> <br> </p>
                        </div> -->
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