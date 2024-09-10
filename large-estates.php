<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padua Renewable Energy | Off Grid Locations</title>
    <link href="//fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>

    <?php 
        include('inc/header.php');
    ?>

    <div class="inner-banner py-5 web" style=" background: url(assets/image/banner2.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4" style="font-size:74px;">
                        LARGE ESTATES </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <!-- <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> HSE</li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    

    <div class="inner-banner py-5 mobile" style=" background: url(assets/image/banner2.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                        LARGE ESTATES </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <!-- <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> HSE</li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <section class="web">
        <div class="container-fluid">
            <div class="container">
            <h1 style=" margin-top:50px; font-size: 70px !important;line-height:90px;font-weight:700;text-transform: capitalize;color: #198754!important;letter-spacing: 1px;">RENEWABLE ENERGY DIRECTLY FROM THE SUN</h1>
            <p style="margin-top:40px;font-size: 24px;line-height:32px;">By installing solar panels on your roof you save money, and you’re environmentally friendly while taking responsibility for a more sustainable future. So take the step and produce your electricity.</p>
            </div>
        </div>
    </section>

    

    <section class="mobile">
        <div class="container-fluid">
            <div class="container">
            <h1 style=" margin-top:50px;font-weight:700;text-transform: capitalize;color: #198754!important;letter-spacing: 1px;">Renewable Energy Directly from The Sun</h1>
            <p style="margin-top:40px;font-size: 24px;line-height:32px;">By installing solar panels on your roof you save money, and you’re environmentally friendly while taking responsibility for a more sustainable future. So take the step and produce your electricity.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="margin-top: 90px;">
            <div class="row">
                <div class="col-md-6" style="padding-top:60px;">
                    <h3>Environmentally friendly and self-sufficient</h3> <br>
           
                    <p>Continually, there are increasing demands for stable power in homes. Requiring to be built affordably and with a focus on sustainable electrical production, demonstrated by your electric reduction. Become self-sufficient while saving money.</p>

                </div>
                <div class="col-md-6">
                    <img src="assets/image/large-estate-4.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="margin-top: 80px; margin-bottom: 50px;">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/image/large-estate-2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6" style="padding-top:60px;">
                    <h3>Alternative energy sources</h3> <br>
                    <p>We are backed by technical partners who have delivered several solar power plants to estates, schools and even sports arenas. Very rarely should no alternative energy sources not be built into new buildings.</p>
                </div>
            </div>
        </div>
    </section>

    

    <section>
        <div class="container" style="margin-top: 80px;margin-bottom:80px;">
            <div class="row">
                <div class="col-md-6" style="padding-top:60px;">
                    <h3>Monitor and control the facility 24/7</h3> <br>
                    <p>For large estates, we are offering to deliver battery systems, micro-grids, and accompanying remote monitoring solutions. In addition, within the power plant; a user-friendly monitoring screen which displays controls capabilities of the system. <br><br>
                
                    We provide our services with a high level of professional competence, where our employees service our installations for our customers and monitors the energy system effectiveness.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/image/large-estate-3.png" class="img-fluid" alt="">
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