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
                            Vision & Mission </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Vision & Mission</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <section>
        <div class="container-fluid">
            <h1 style="text-align: center; margin-top:50px;">Vision & Mission</h1>
        </div>
    </section>

    <section>
        <div class="container" style="margin-top: 90px;">
            <div class="row">
                <div class="col-md-6">
                    <h3>Our Vision</h3>
                    <p>To build an organization that will be the envy of renewable energy companies in service delivery and profitability while ensuring professional ethics and creating a win-win business culture.
                        To build an organization that will be the envy of renewable energy companies in service delivery and profitability while ensuring professional ethics and creating a win-win business culture.
                        To build an organization that will be the envy of renewable energy companies in service delivery and profitability while ensuring professional ethics and creating a win-win business culture.
                        To build an organization that will be the envy of renewable energy companies in service delivery and profitability while ensuring professional ethics and creating a win-win business culture.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="assets/image/v1.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="margin-top: 80px; margin-bottom: 50px;">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/image/v2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <h3>Our Mission</h3>
                    <p>We are committed to leading the way to customer satisfaction and excellent service delivery with resultant effect of being a household name in the renewable energy industry in Nigeria and beyond.We are committed to leading the way to customer satisfaction and excellent service delivery with resultant effect of being a household name in the renewable energy industry in Nigeria and beyondWe are committed to leading the way to customer satisfaction and excellent service delivery with resultant effect of being a household name in the renewable energy industry in Nigeria and beyond.</p>
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
</html>