<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padua Renewable Energy | HSE</title>
    <link href="//fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>

    <?php 
        include('inc/header.php');
    ?>

    <div class="inner-banner py-5 web" style="background: url(assets/image/busines-partners.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4" style="font-size:70px;line-height:80px;">
                            PARTNERS </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <!-- <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Meet Our Growth Partners</li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>

    

    <div class="inner-banner py-5 mobile" style="background: url(assets/image/busines-partners.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                            PARTNERS </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <!-- <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Meet Our Growth Partners</li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- <section>
        <div class="container-fluid">
            <h1 style="text-align: center; margin-top:50px;">We strive for sustainable solutions at all levels</h1>
        </div>
    </section> -->

    <section style="background-color:grey;padding:80px 0px;">
        <div class="container" style="margin-top: 80px;margin-bottom:80px;">
            <!-- <img src="assets/image/partners.png" class="img-fluid" alt=""> -->
            <div class="row">
                <div class="col-md-1"> </div>

                <div class="col-md-5">
                    <img src="assets/image/ppnl.png" class="img-fluid" alt=""> <br><br>
                </div>

                <!-- <div class="col-md-2"> </div> -->

                <div class="col-md-5">
                    <img src="assets/image/p1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-1"> </div>

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