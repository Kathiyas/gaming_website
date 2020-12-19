
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon-16x16.png">
    <title>DashBoard</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/css/style-test.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/bootstrap/js/bootstrap.min.js">
    <!-- <link rel="stylesheet" href="assets/fonts/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/carousel.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.5.9/spectre.min.css" integrity="sha512-9RIcp1f4CE6dEuYX9085tXaEbYd1ap04d2Av1ub/dwuT33WbfbHStDdQ+shKrp5wzZzleh5DOg+7ABSnaQP/nQ==" crossorigin="anonymous" />
    <style>
       
    </style>
</head>
<body>
    <header id="header" class="map-ban-border">
        <div class="container-fluid">
            
        </div>
    </header>
    <section class="container-fluid tabs-sec">
        <div class="tabs">
            <nav class="map-ban-border">
                <a href="#" class="hidden"></a>
                <a class="map-ban-border" href="<?php echo base_url("/") ?>"><i class="fas fa-helicopter"></i><span>Single Match</span></a>
                <a class="teams-tab" href="<?php echo base_url("/") ?>"><i class="fas fa-user-secret"></i><span>Teams</span></a>
            </nav>
            <!-- <section class="front-content visible-sec">
            </section> -->
            <div class="content">
                <div class="starts-container">
                    <label class="overlay">Eventname (Shown in overlays):
                        <input class="mb-1" type="text" placeholder="Enter Eventname">
                    </label>
                    <div class="stars-main">
                        <div class="stars">
                            <div class="stars-inner">
                                <img class="img-simple" src="<?php echo base_url('images')?> /bo1.png" alt="">
                                <img class="img-hover" src="<?php echo base_url('images')?> /bo1-hover.png" alt="">
                            </div>
                            <div class="star-text text-center">
                                1
                            </div>
                        </div>
                        <div class="stars">
                            <div class="stars-inner">
                                <img class="img-simple" src="<?php echo base_url('images')?>/bo2.png" alt="">
                                <img class="img-hover" src="<?php echo base_url('images')?>/bo2-hover.png" alt="">
                            </div>
                            <div class="star-text text-center">
                                2
                            </div>
                        </div>
                        <div class="stars">
                            <div class="stars-inner">
                                <img class="img-simple" src="<?php echo base_url('images')?>/bo3.png" alt="">
                                <img class="img-hover" src="<?php echo base_url('images')?>/bo3-hover.png" alt="">
                            </div>
                            <div class="star-text text-center">
                                3
                            </div>
                        </div>
                        <div class="stars">
                            <div class="stars-inner">
                                <img class="img-simple" src="<?php echo base_url('images')?>/bo5.png" alt="">
                                <img class="img-hover" src="<?php echo base_url('images')?>/bo5-hover.png" alt="">
                            </div>
                            <div class="star-text text-center">
                                5
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </section>
    <footer id="footer" class="container-fluid map-ban-border">
        <div class="row">
            <div class="col-3 d-flex align-items-center">
                <div class="footer-logo">
                    <img src="images/header_logo.png" alt="">
                </div>
            </div>
            <div class="col-3">
                <div class="nav a-center text-center d-block">
                    <h3>Other</h3>
                    <ul class="mb-0 list-unstyled">
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Media pack</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-5">
                <div class="nav a-center text-center d-block">
                    <h3>Legal</h3>
                    <ul class="mb-0 list-unstyled">
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Imprint</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1">
                <div class="social float-right d-flex flex-column a-center j-center mr-1 ml-1r">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitch"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-discord"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
     <script src="<?php echo base_url('assets')?>/js/jquerytest.js"></script>
    <script src="assets/js/ajax.js"></script>

</body>
</html>