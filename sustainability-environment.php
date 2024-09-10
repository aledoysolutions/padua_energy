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

    <div class="inner-banner py-5 web" style="background: url(assets/image/sustainable-banner.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4" style="font-size:70px;line-height:80px;">
                        SUSTAINABILITY AND ENVIRONMENT </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <!-- <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Sustainability and the environment</li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    

    <div class="inner-banner py-5 mobile" style="background: url(assets/image/sustainable-banner.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                        SUSTAINABILITY AND ENVIRONMENT </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <!-- <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Sustainability and the environment</li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <section class="web">
        <div class="container">
            <h1 style=" margin-top:50px;font-size:70px;line-height:90px;">SUSTAINABILITY FORMS THE BEDROCK FOR EVERYTHING WE DO</h1>
        </div>
    </section>

    <section class="mobile">
        <div class="container">
            <h1 style=" margin-top:50px;">SUSTAINABILITY FORMS THE BEDROCK FOR EVERYTHING WE DO</h1>
        </div>
    </section>

    <section>
        <div class="container" style="margin-top: 80px;margin-bottom:80px;">
            <div class="row">
                <div class="col-md-6">
                    <p>Over several years, Padua Renewable Energy Nigeria Limited has placed great emphasis on renewable energy and sustainable solutions, and this forms the basis for our entire business model. <br><br>

                    Together with our partner, Kverneland Energi International  and our customers, we have a vision to reduce diesel consumption by several millions liters annually. We also intend to deliver several MW of solar plants to the market.<br><br>

                    We keep striving to reduce the company's and our employees' CO2 and environmental footprint. That is why this is central to everything we do.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="assets/image/sustainability-environment.jpeg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <h3>CLIMATE POSITIVE</h3> <br>
            <p style="font-size:24px;">Our goal is not only to be carbon neutral but to be climate positive furthered by our policies and initiatives:</p><br><br>
            <div class="row">
               <div class="col-md-6">
                <ul style="font-size:20px; margin-left:20px;">

                        <li>We save our clients the use of fossil fuels by upwards of 60%. We don’t just talk about sustainability, we are fully committed to offering effective renewable and eco-friendly solutions to our clients</li> <br>
                        <li>We engage government licensed vendors who recycle all wastes appropriately</li> <br>
                        <li>We have invested in a solar power plant for the roof of our offices; the plant includes battery storage of energy used for the completion of client projects and our usage</li> <br>
                        <li>We have invested in developing remote monitoring for our clients’ systems. Reducing our need to travel to the site, consequently, we can start, maintain, and monitor the systems remotely. Thus, contributing to increased uptime and efficiency of our client’s plants</li> <br>
                        
                    </ul>
               </div>
               <div class="col-md-6">
                <ul style="font-size:20px; margin-left:20px;">

                        <li>We include climate and environmental outcomes in the evaluation of purchasing and selection of suppliers</li> <br>
                        <li>Our partner has invested in modern video and cloud-based solutions, making travel for project execution minimal.</li> <br>
                        <li>Our disposal practices are compliant with our local regulations. Health and environmentally hazardous materials are avoided</li> <br>
                        <li>All our employees are offered solar power plants for their private homes, installed and integrated at a reduced price</li> <br>
                        <li>All batteries sold by us include a return policy, providing the appropriate disposal of batteries at minimal charge</li> <br>

                    </ul>
               </div>
            </div>
        </div>
    </section>

    
    <section>
        <div class="container" style="margin-top: 80px;margin-bottom:80px;">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/image/sustainability2.jpeg" class="img-fluid" alt="">
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