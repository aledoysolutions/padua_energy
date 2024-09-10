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

    <div class="inner-banner py-5" style="background: url(assets/image/solar-cell.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h3 class="title-w3l mb-2" style="font-size:55px;color:#fff;"></h3>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <!-- <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Solar Cell System</li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- <section>
        <div class="container-fluid">
            <h1 style="text-align: center;margin-top:80px; color:#008000;">Solar panels are the future of agriculture</h1>
        </div>
    </section> -->

    <section class="w3l-grids-3 py-5" id="about">
        <div class="container py-md-5 py-3">
            <div class="row w3home-ab-grids">
                <h3 class="title-w3l mb-2" style="font-size:70px;line-height:90px;">SOLAR POWER PLANTS</h3>
                
                <p style="font-size:24px;margin-bottom:60px;line-height:40px;">A solar powerplant is an energy facility that produces electricity directly from the sun. The benefits are many for both the environment, and also financially. It is an inexpensive investment while taking care of the environment, producing renewable energy and simultaneously reducing fossil fuel consumption. <br><br>

                Typically, solar power plants are connected to the grid and is used as a supplement to the customer’s own electric needs. Thus, if one produces more electricity than one needs, it is possible to sell the electricity back to the grid, and if one consumes more than produced, electricity can be bought from the grid. </p>
                <img src="assets/image/image1.svg" class="img-fluid" alt="">

            </div>

            <div class="row w3home-ab-grids" style="margin-top:80px;">
                <h3 style="color:#000;margin-bottom:20px;">GRID CONNECTED SOLAR POWER PLANTS</h3> <br>
                
                <p style="font-size:24px;margin-bottom:60px;line-height:40px;">Solar panels installed onto the roofs of buildings are the most common approach currently practiced. Solar cell panels deliver DC electricity into a transformer which converts the electricity to AC. AC is delivered to a circuit in the fuse box, and then the electricity can be used throughout the building. If the system produces more electricity than needed, it will go back into the grid. <br><br>

                Electricity produced and used gives the best financial premise, as one then does not need to purchase electricity or grid rent. <br><br>

                All grid-connected power plants are delivered inclusive of monitoring systems with the possibility for surveillance from a computer and a smartphone. On larger buildings, it is common to install a screen that displays what is being produced centrally in the facility, how the electricity is being used, and if it has delivered electricity onto the grid. A visual display as described can be seen below. For such power plants, we create specific images and graphical demonstrations, consistent with the customers’ wishes and needs. </p>
                <img src="assets/image/image2.svg" class="img-fluid" alt="">

            </div>

            <!-- <a href="contact.php" class="btn btn-style btn-primary mt-4">Contact us for more information</a> -->

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