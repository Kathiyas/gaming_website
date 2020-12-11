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
    <!-- fonts -->
    <!-- <link rel="stylesheet" href="assets/fonts/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/css/carousel.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.5.9/spectre.min.css" integrity="sha512-9RIcp1f4CE6dEuYX9085tXaEbYd1ap04d2Av1ub/dwuT33WbfbHStDdQ+shKrp5wzZzleh5DOg+7ABSnaQP/nQ==" crossorigin="anonymous" />
    
</head>
<body>
    
    <header id="header" class="map-ban-border">
        <div class="container-fluid">
           
        </div>
    </header>
    <section class="container-fluid tabs-sec">
        <div class="tabs">
            <nav class="map-ban-border">
                
                    <a class="map-ban-border"><i class="fas fa-helicopter"></i><span>Single Match</span></a>
                    <!-- <a class=""><i class="fas fa-map-signs"></i><span>Simulate Mapbans</span></a>
                    <a class=""><i class="fas fa-paint-brush"></i><span>Browsersource
                                Styles</span></a>
                    <a class=""><i class="fas fa-images"></i><span>Manage
                                Browsersources</span></a> -->
                    <a class="teams-tab"><i class="fas fa-user-secret"></i><span>Teams</span></a>
                    <!-- <a class=""><i class="fas fa-users"></i><span>Talents</spansticky></a>
                    <a class=""><i class="fas fa-money-bill-wave"></i><span>Manage Sponsors</span></a> -->
                
            </nav>
           
            <div class="content">
                <div class="horizontal-tabs">
                    <div id="tabs-nav">
                        <div class="addmatch-tab active">
                            <a href="#tab1" class="">Add Match</a>
                        </div>
                        <div class="listmatch-tab">
                            <a href="#tab2" class="">List Matches</a>
                        </div>
                        
                    </div> <!-- END tabs-nav -->
                    <div id="tabs-content">
                        <div id="tab1" class="tab-content match-form">
                            <h1 class="main-head map-ban-bg">Add Match</h1>
                            <h2>Please fill out the form to create a match</h2>
                            <p class="mapban-para">Mapban setting can be changed later!</p>
                            <label class="overlay">Eventname (Shown in overlays):
                                <input class="mb-1" type="text" placeholder="Enter Eventname">
                            </label>
                            <button class="update-btn" type="submit">
                                Update
                            </button>
                            
                        </div>
                        <div id="tab2" class="tab-content">
                            <div class="list-row row my-5">
                                <div class="col"  onclick="location.href='<?php echo base_url('match'); ?>';">
                                    <div class="col-content">
                                        <h3>Match 1</h3>
                                    </div>
                                </div>
                                <div class="col"  onclick="location.href='<?php echo base_url('match'); ?>';">
                                    <div class="col-content">
                                        <h3>Match 2</h3>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div> <!-- END tabs-content -->
                </div>
            </div>
            <div class="content">
                <div class="horizontal-tabs">
                    <div id="tabs-nav2">
                        <div class="addmatch-tab active">
                            <a href="#tab1-2" class="">Add Team</a>
                        </div>
                        <div class="listmatch-tab">
                            <a href="#tab2-2" class="">List Teams</a>
                        </div>
                        
                    </div> <!-- END tabs-nav -->
                    <div id="tabs-content2">
                        <div id="tab1-2" class="tab-content2">
                            <form action="<?= base_url('addTeam') ?>" method="post" enctype="multipart/form-data" >
                                <!-- <h1 class="main-head map-ban-bg">List Matches</h1>
                                <h2><i class="fas fa-arrow-down"></i> Pick your Game <i class="fas fa-arrow-down"></i></h2> -->
                                <!-- for form only work in comments -->
                                <label class="overlay add-overlay">Team Name (Shown in overlays):
                                    <input class="mb-1" name = "name" type="text" placeholder="Team Name">
                                </label>
                                <p class="add-team-para">[Optionally] Select an Logo (PNG) of the Team to upload:</p>
                                <div class="upload">
                                    <div class="up-img">
                                        <img src="images/icon-main.png" alt="">
                                        <p class="up-label mb-0">0%</p>
                                        <h4>Drag & drop files here</h4>
                                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                        <input type="file" name="file_name"  id="imagefile" title="Click to add Logo">
                                        <label for="imagefile" class="button btn-small update-btn"><i class="fas fa-upload"></i> Choose a file...</label>
                                    </div>
                                </div>
                                <!-- <button class="update-btn">Add Team</button> -->
                                <input type="submit" value="Add Team" class="update-btn">    
                            </form>
                            
                            
                            <!-- dont step beyond this --> 
                        </div>
                        <div id="tab2-2" class="tab-content2">
                            <?php if(!$teams ){ ?>
                                 <div class="puzzled">
                                    <img src="images/404.png" class="puzzled__image">
                                    <img src="images/404-questionmark.png" class="puzzled__questionmark puzzled__questionmark--1">
                                    <img src="images/404-questionmark.png" class="puzzled__questionmark puzzled__questionmark--2">
                                    <img src="images/404-questionmark.png" class="puzzled__questionmark puzzled__questionmark--3">
                                </div>
                                <p class="text-center my-1">You don't have any Teams!</p>
                                <p class="text-center my-1">Create one now!</p>
                                <button class="update-btn">Add Team</button>
                            <?php }else{ ?>
                            <div id="" class="tab-content">
                                
                                <?php for($i=0 ; $i <count($teams);$i++ ) : ?>
                                     <?php if($i %2 == 0): ?>  
                                     <div class="list-row row my-5">
                                         
                                     <?php endif ?>
                                        <div class="col "  >
                                            <div class="col-content" style="text-align: center;padding: 80px 0;border: 2px solid;border-image-outset: 0;border-image-repeat: stretch;border-image-slice: 100%;border-image-source: none;border-image-width: 1;cursor: pointer;margin: 30px 10px;border-image: linear-gradient(to right, rgb(var(--MainColor)) 0%, rgb(var(--MainColorLight)) 100%);border-image-slice: 1;">
                                                <h3><?php echo $teams[$i]->name  ?></h3>
                                            </div>
                                        </div>
                                    <?php if($i %2 == 1): ?>  
                                    </div>
                                    <?php endif ?>
                                         
                                <?php endfor ?>
                            </div>
                            <?php } ?>

                            <div class="stars-main">
                                <div class="stars">
                                    <div class="stars-inner">
                                        <img class="img-simple" src="images/bo1.png" alt="">
                                        <img class="img-hover" src="images/bo1-hover.png" alt="">
                                    </div>
                                    <div class="star-text text-center">
                                        1
                                    </div>
                                </div>
                                <div class="stars">
                                    <div class="stars-inner">
                                        <img class="img-simple" src="images/bo2.png" alt="">
                                        <img class="img-hover" src="images/bo2-hover.png" alt="">
                                    </div>
                                    <div class="star-text text-center">
                                        2
                                    </div>
                                </div>
                                <div class="stars">
                                    <div class="stars-inner">
                                        <img class="img-simple" src="images/bo3.png" alt="">
                                        <img class="img-hover" src="images/bo3-hover.png" alt="">
                                    </div>
                                    <div class="star-text text-center">
                                        3
                                    </div>
                                </div>
                                <div class="stars">
                                    <div class="stars-inner">
                                        <img class="img-simple" src="images/bo5.png" alt="">
                                        <img class="img-hover" src="images/bo5-hover.png" alt="">
                                    </div>
                                    <div class="star-text text-center">
                                        5
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div> <!-- END tabs-content -->
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
</body>
</html>