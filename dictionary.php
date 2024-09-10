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

    <style>
        thead{
            background-color:#008000;
            color: white;
        }
        
    </style>

</head>
<body>

    <?php 
        include('inc/header.php');
    ?>

    <div class="inner-banner py-5 web" style="background: url(assets/image/banner01.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4" style=" margin-top:50px; font-size: 70px !important;line-height:90px;font-weight:700;text-transform: capitalize;letter-spacing: 1px;">
                        GLOSSARY </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <!-- <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Dictionary</li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>

    

    <div class="inner-banner py-5 mobile" style="background: url(assets/image/banner01.jpeg) no-repeat center;">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4" style=" margin-top:50px; font-weight:700;text-transform: capitalize;letter-spacing: 1px;">
                        GLOSSARY </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <!-- <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Dictionary</li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <section class="web">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <h2 class="inner-w3-title mt-lg-5 mt-4" style=" margin-top:50px; font-size: 64px !important;line-height:90px;color:#198754;font-weight:700;text-transform: capitalize;letter-spacing: 1px;text-align:center !important;   ">ENERGY, EFFECT, CYCLE OG KWH?  </h2> <br>
                    <p style="font-size:24px;text-align:center;">Wondering what the terms in our industry mean? </p>

                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    

    <section class="mobile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <h2 class="inner-w3-title mt-lg-5 mt-4" style=" margin-top:50px; color:#198754;font-weight:700;text-transform: capitalize;letter-spacing: 1px;text-align:center !important;   ">ENERGY, EFFECT, CYCLE OG KWH?  </h2> <br>
                    <p style="font-size:24px;text-align:center;">Wondering what the terms in our industry mean? </p>

                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="margin-top: 80px;margin-bottom:80px;">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Term</th>
                <th>Unit</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Effect</td>
                <td>kW</td>
                <td>Performance from solar cells, battery pack or generator.</td>
            </tr>
            <tr>
                <td>Energy</td>
                <td>kWh</td>
                <td>Energy [kWh] = Power [kW] * Time [h] <br>
                Example : If the generator runs optimally for one hour with a power of 128 kW, 128 kWh of energy is produced.</td>
            </tr>
            <tr>
                <td>Installed power solar cells</td>
                <td>kWp <br> p = peak</td>
                <td>How much power the photovoltaic system has and will be able to deliver under good conditions. <br> Good conditions are defined on the basis of STC (standard test conditions).</td>
            </tr>
            <tr>
                <td>Yield factor</td>
                <td>kWh / kWp</td>
                <td>Energy production in relation to installed kWp. In southern Norway, this is between 800-1000 kWh / kWp.</td>
            </tr>
            <tr>
                <td>SoC%</td>
                <td>%</td>
                <td>State of Charge. Expressed in% of degree of filling of the battery (how full the battery is). Scale from 0-100%.</td>
            </tr>
            <tr>
                <td>Death</td>
                <td>%</td>
                <td>Depth of Discharge. For our batteries, this is 100%, which means that 100% of the stated battery storage capacity is actually available. If the battery pack has 173 kWh stated as storage capacity, the battery will have 173 kWh actually available.</td>
            </tr>
            <tr>
                <td>Cycle</td>
                <td>Number</td>
                <td>A cycle is a charge from 0% to 100% and a charge to 0% again.</td>
            </tr>
            <tr>
                <td>SoH</td>
                <td>%</td>
                <td>State of Health. Battery condition today compared to battery condition at time of production. This means that SoH will be 100% when the battery is installed.</td>
            </tr>
            </tbody>
        </table>
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