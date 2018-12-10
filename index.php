<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>


<?php include('header.php') ?>

</nav>

        <div class="content">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
              <div class="error success" >
                <h3>
                  <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                  ?>
                </h3>
              </div>
            <?php endif ?>

            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>
        </div>
        <div class="slider">
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="slide-image" style="background: url(images/slides/pray1.jpg)">                                    
                        </div>
                        <div class="welcome">
                            <h2 class="title animated fadeInDown">
                                Introducing New Praying Era
                            </h2>
                            <div class="subtitle animated fadeInDown animation-delay-1">
                                A Community Dedicated To Seeking God
                            </div>
                            <div class="button animated fadeInUp animation-delay-2">
                                <a href="register.php" class="button-primary"><i class="fa fa-download"></i> Become an intercessor </a>
                                <a href="register.php" class="button-default">Request For Prayers</a>
                                <a href="#" class="button-primary">Start Praying </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slide-image" style="background: url(images/slides/pray2.jpg)">                                    
                        </div>
                        <div class="welcome animated fadeInDown">
                            <h2 class="title animated fadeInDown">
                                By Serving Each Oher 
                            </h2>
                            <div class="subtitle animated fadeInDown animation-delay-1">
                                We Serve God
                            </div>
                            <div class="button animated fadeInUp animation-delay-2">
                                <a href="register.php" class="button-primary"><i class="fa fa-download"></i> Become an intercessor </a>
                                <a href="register.php" class="button-default">Request For Prayers</a>
                                <a href="#" class="button-primary">Start Praying </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slide-image" style="background: url(images/slides/pray3.jpg)">                                    
                        </div>
                        <div class="welcome animated fadeInDown">
                            <h2 class="title animated fadeInDown">
                                 Believe
                            </h2>
                            <div class="subtitle animated fadeInDown animation-delay-1">
                                It's very important
                            </div>
                            <div class="button animated fadeInUp animation-delay-2">
                                <a href="register.php" class="button-primary"><i class="fa fa-download"></i> Become an intercessor </a>
                                <a href="register.php" class="button-default">Request For Prayers</a>
                                <a href="#" class="button-primary">Start Praying </a>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="services animated bounce">                                
                        <div class="container">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="service-item">
                                    <div class="title">
                                        UX Evaluation
                                    </div>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non vel, sint nisi
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="service-item">
                                    <div class="title">
                                        UX Profession Design
                                    </div>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non vel, sint nisi
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="service-item">
                                    <div class="title">
                                        Software Development
                                    </div>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non vel, sint nisi
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
        <!-- end of slider -->

    </header>
    <!-- End of Header -->
    <main>
        <br><br>
        <div class="home-why">
            <!-- Services section -->
            <section class="services-section spad">
                <div class="container">
                    <h3>Let's Make the World Better Together</h3>
                    <div class="subtitle">Experience God's Presence</div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="service-box">
                                <h4><i class="fa fa-fire"></i>Our Values</h4>
                                <p>Excepteur sint occaecat cupidatat non, <br> sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
                                <a href="#" class="s-readmore">Readmore <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-box">
                                <h4><i class="fa fa-eye"></i>Our Vision</h4>
                                <p>Excepteur sint occaecat cupidatat non, <br> sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
                                <a href="#" class="s-readmore">Readmore <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-box">
                                <h4><i class="fa fa-heart"></i>Our Mission</h4>
                                <p>Excepteur sint occaecat cupidatat non, <br> sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
                                <a href="#" class="s-readmore">Readmore <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <!-- <div class="container">
        <h3>Why you should choose our services?</h3>
        <div class="subtitle">Truly process, experiences and big team</div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
            <a href="#">
                <div class="media">
                    <div class="media-left media-top">
                        <img src="images/SVG/icon-process.svg">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Truly UX process</h4>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
            </a>    
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
            <a href="#">
                <div class="media">                        
                    <div class="media-left media-top">
                        <img src="images/SVG/icon-exp.svg">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Many years experience</h4>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
            <a href="#">
                <div class="media">
                    <div class="media-left media-top">                            
                        <img src="images/SVG/icon-expert.svg">                            
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">UX Experts Team</h4>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div> -->
</div>
<!-- End of Home Why choose us -->

<!-- Sermon section -->
    <section class="sermon-section spad">
        <div class="section-title">
            <span>Experience God's Presence</span>
            <h2>Sermon Today</h2>
        </div>
        <div class="sermon-warp">
            <div class="sermon-left-bg set-bg" data-setbg="sermon-bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <div class="sermon-content">
                            <h2>Lord Is Sufficient For All Of Our Needs</h2>
                            <ul class="sermon-info">
                                <li>Sermon From: <span>Vincent John</span></li>
                                <li>Categories: <span>God, Pray</span></li>
                                <li><span>On Monday 23 DEC, 2018</span></li>
                            </ul>
                            <p>For God did not send his Son into the world to condemn the world, but to save the world through him.</p>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
                            <div class="icon-links">
                                <a href=""><i class="ti-link"></i></a>
                                <a href=""><i class="ti-zip"></i></a>
                                <a href=""><i class="ti-headphone"></i></a>
                                <a href=""><i class="ti-import"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sermon section end -->

        <!-- <div class="home-letstry panel-toparrow">

    <div class="container">
        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 col-left">
            <img class="mockup" src="images/letstry-mockup.png">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 col-right">
            <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non 
                elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                Nam neque nulla, venenatis non iaculis non, scelerisque ultricies 
                metus.
            </div>    
            <div class="button">
                <a href="page-download.html" class="button-primary"><i class="fa fa-download"></i> DOWNLOAD</a>
            </div>
            <div class="description">
                Free 14 days. Not credit card info.
            </div>

        </div>
    </div>                
</div>   -->
<!-- End of Home Let's try -->        
<div class="home-whatwedid">

    <div class="container">
        <h3>Upcoming Events</h3>
        <div class="subtitle">Experience God's Presence</div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
            <div class="hovereffect">
                <img src="images/porfolios/1.jpg">
                <div class="name">Horem ipsum dolor sit amet, consectetur adipiscing elit</div>
                <div class="overlay">

                    <div class="full">
                        <div class="button">
                            <a data-toggle="modal" data-target="#projectDetail">View detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="customer">
                            Customer: Microsoft Asia. Team: 5 members. Time: 14 days<br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
            <div class="hovereffect">
                <img src="images/porfolios/2.jpg">
                <div class="name">Praesent molestie justo dictum pharetra</div>
                <div class="overlay">

                    <div class="full">
                        <div class="button">
                            <a data-toggle="modal" data-target="#projectDetail">View detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="customer">
                            Customer: Microsoft Asia. Team: 5 members. Time: 14 days<br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
            <div class="hovereffect">
                <img src="images/porfolios/3.jpg">
                <div class="name">Nam neque nulla, venenatis</div>
                <div class="overlay">

                    <div class="full">
                        <div class="button">
                            <a data-toggle="modal" data-target="#projectDetail">View detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="customer">
                            Customer: Microsoft Asia. Team: 5 members. Time: 14 days<br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
            <div class="hovereffect">
                <img src="images/porfolios/4.jpg">
                <div class="name">Non iaculis non, scelerisque</div>
                <div class="overlay">

                    <div class="full">
                        <div class="button">
                            <a data-toggle="modal" data-target="#projectDetail">View detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="customer">
                            Customer: Microsoft Asia. Team: 5 members. Time: 14 days<br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
            <div class="hovereffect">
                <img src="images/porfolios/5.jpg">
                <div class="name">Praesent molestie justo</div>
                <div class="overlay">

                    <div class="full">
                        <div class="button">
                            <a data-toggle="modal" data-target="#projectDetail">View detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="customer">
                            Customer: Microsoft Asia. Team: 5 members. Time: 14 days<br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
            <div class="hovereffect">
                <img src="images/porfolios/6.jpg">
                <div class="name">Molestie justo dictum pharetra aliquam</div>
                <div class="overlay">

                    <div class="full">
                        <div class="button">
                            <a data-toggle="modal" data-target="#projectDetail">View detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="customer">
                            Customer: Microsoft Asia. Team: 5 members. Time: 14 days<br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
            <div class="hovereffect">
                <img src="images/porfolios/7.jpg">
                <div class="name">Nam neque nulla, venenatis non iaculis</div>
                <div class="overlay">

                    <div class="full">
                        <div class="button">
                            <a data-toggle="modal" data-target="#projectDetail">View detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="customer">
                            Customer: Microsoft Asia. Team: 5 members. Time: 14 days<br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
            <div class="hovereffect">
                <img src="images/porfolios/8.jpg">
                <div class="name">Non, scelerisque ultricies metus</div>
                <div class="overlay">

                    <div class="full">
                        <div class="button">
                            <a data-toggle="modal" data-target="#projectDetail">View detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="customer">
                            Customer: Microsoft Asia. Team: 5 members. Time: 14 days<br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 item">
            <div class="hovereffect">
                <img src="images/porfolios/9.jpg">
                <div class="name">Rolor sit amet, consectetur adipiscing elit</div>
                <div class="overlay">

                    <div class="full">
                        <div class="button">
                            <a data-toggle="modal" data-target="#projectDetail">View detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="customer">
                            Customer: Microsoft Asia. Team: 5 members. Time: 14 days<br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Home What we did -->



<!-- Modal -->
<div id="projectDetail" class="modal modalFullscreen">

    <div class="modal-content">
        <span class="closeX" data-dismiss="modal">&times;</span>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-left">

                <div id="myCarousel3" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel3" data-slide-to="1"></li>
                        <li data-target="#myCarousel3" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/porfolios/1.jpg" class="left-img">
                        </div>

                        <div class="item">
                            <img src="images/porfolios/2.jpg" class="left-img">
                        </div>

                        <div class="item">
                            <img src="images/porfolios/3.jpg" class="left-img">
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-right">
                <h3>
                    My project name
                </h3>
                <div class="description">
                    <p class="customer">
                        Customer: <b>Microsoft Asia</b>.                                
                        Address: <b>No 1 - Lorem ipsum dolor sit amet </b>.                                                                
                    </p>
                    <p>
                        Website: <b><a href="">herrypham.com</a> </b>
                    </p>
                    <p>
                        Team members: <b>5</b>. Time: <b>14 days</b>.                                     
                    </p>
                    <p class="team-face">
                        <img src="images/face/face1.jpg">
                        <img src="images/face/face2.jpg">
                        <img src="images/face/face3.jpg">
                        <img src="images/face/face4.jpg">
                        <img src="images/face/face5.jpg">
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. Nam neque nulla, venenatis non iaculis non, scelerisque ultricies metus.

                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. 

                    </p>
                </div>
                <div class="button">
                    <a href="" class="button-default">MORE INFORMATION</a>
                </div>
            </div>
        </div>
    </div>
</div>        <div class="home-tryfree30 panel-toparrow">

  <!--   <div class="container">
        <h3>Try using 30 DAYS free! Without Credit Card</h3>
        <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra
            aliquam.<br> Nam neque nulla, venenatis non iaculis non, scelerisque ultricies metus.
        </div>

        <div class="button">
            <a href="page-download.html" class="button-primary"><i class="fa fa-download"></i> DOWNLOAD</a>
            <a href="page-download.html" class="button-default">SUPPORT</a>
        </div>


    </div> -->

</div>
<!-- End of Home tryfree30 -->        <div class="home-team">
    <h3>Team of UX experts</h3>
    <div class="subtitle">2 UX Directors, 5 UX Researchers, 4 Information Designers & 3 Graphic Designers</div>


    <div class="home-team-slider">
        <div id="myCarousel2" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel2" data-slide-to="1"></li>
                <li data-target="#myCarousel2" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="slide-image" style="background: url(images/teams/team1.jpg)">    
                        <div class="container welcome">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 inner">
                                <h2 class="title">
                                    Emphasis on Skills and Information 
                                </h2>
                                <div class="subtitle">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. </p>
                                    <p>Nam neque nulla, venenatis non iaculis non, scelerisque ultricies metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. </p>
                                </div>
                                <div class="button">
                                    <a href="page-contact.html" class="button-primary">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="item">
                    <div class="slide-image" style="background: url(images/teams/team2.jpg)">                                    

                        <div class="container welcome">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 inner">
                                <h2 class="title">
                                    Co-location Is Key
                                </h2>
                                <div class="subtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                </div>
                                <div class="button">
                                    <a href="page-contact.html" class="button-primary">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="slide-image" style="background: url(images/teams/team3.jpg)">                                    

                        <div class="container welcome">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 inner">
                                <h2 class="title">
                                    We’re HIRING 
                                </h2>
                                <div class="subtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                </div>
                                <div class="button">
                                    <a href="page-contact.html" class="button-primary">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            
        </div>
    </div>
</div>
<!-- End of Home team -->
        <div class="home-partners">
    <h3>Highlight Partners</h3>
    <div class="container">
        <div class="partner" style="background: url(images/logos/logo1.jpg)">                    
        </div>
        <div class="partner" style="background: url(images/logos/logo2.jpg)">                    
        </div>
        <div class="partner" style="background: url(images/logos/logo3.jpg)">                    
        </div>
        <div class="partner" style="background: url(images/logos/logo4.jpg)">                    
        </div>
        <div class="partner" style="background: url(images/logos/logo5.jpg)">                    
        </div>

    </div>
</div>   
<!-- End of Home Partners -->        <div class="home-blogs">
    <h3>UX Design Blog and Resources</h3>
    <div class="menu">
        <ul>
            <li><b>Choose category:</b> </li>
            <li class="active"><a href="blog-category.html">Lastest news</a> </li>
            <li><a href="blog-category.html">UX Design</a> </li>
            <li><a href="blog-category.html">UX Evaluation</a> </li>
            <li><a href="blog-category.html">Tips & Tricks</a> </li>
            <li><a href="blog-category.html">Software Developments</a> </li>
            <li><a href="blog-category-3cols.html">Others</a> </li>
        </ul>

    </div>

    <div class="contents-article">
        <div id="blogs-carousel" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="article">
                                <div class="article-img hovereffect">
                                    <a href="blog-detail-regular2.html"><img src="images/articles/article1.jpg"></a>
                                    <div class="overlay">
                                        <a class="info" href="blog-detail-regular2.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> click to show detail</a>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h5><a href="blog-detail-regular2.html">New project has just finished when consectetur adipiscing elit</a></h5>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                    </div>
                                    <div class="date">
                                        12/7/2017 2:30. <a href="">Jenny Ngo</a>. <a href="">14 comments</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="article sticky-feature">
                                <div class="article-img hovereffect">
                                    <a href="blog-detail-regular2.html"><img src="images/articles/article2.jpg"></a>
                                    <div class="overlay">
                                        <a class="info" href="blog-detail-regular2.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> click to show detail</a>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h5><a href="blog-detail-regular2.html">Review: Chronicling Books and Souls Integer non elementum nunc</a></h5>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                    </div>
                                    <div class="date">
                                        3/9/2017 1:50. <a href="">Henry Pham</a>. <a href="">0 comments</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="article">
                                <div class="article-img hovereffect">
                                    <a href="blog-detail-regular2.html"><img src="images/articles/article3.jpg"></a>
                                    <div class="overlay">
                                        <a class="info" href="blog-detail-regular2.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> click to show detail</a>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h5><a href="blog-detail-regular2.html">Morning Briefing: Asia Edition. Praesent molestie justo dictum</a></h5>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                    </div>
                                    <div class="date">
                                        12/7/2017 20:10. <a href="">Admin</a>. <a href="">14 comments</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div> <!-- item-->
                <div class="item">
                    <div class="container">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="article">
                                <div class="article-img hovereffect">
                                    <a href="blog-detail-regular2.html"><img src="images/articles/article4.jpg"></a>
                                    <div class="overlay">
                                        <a class="info" href="blog-detail-regular2.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> click to show detail</a>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h5><a href="blog-detail-regular2.html">New project has just finished when consectetur adipiscing elit</a></h5>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                    </div>
                                    <div class="date">
                                        12/7/2017 2:30. <a href="">Jenny Ngo</a>. <a href="">14 comments</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="article">
                                <div class="article-img hovereffect">
                                    <a href="blog-detail-regular2.html"><img src="images/articles/article5.jpg"></a>
                                    <div class="overlay">
                                        <a class="info" href="blog-detail-regular2.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> click to show detail</a>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h5><a href="blog-detail-regular2.html">Review: Chronicling Books and Souls Integer non elementum nunc</a></h5>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                    </div>
                                    <div class="date">
                                        3/9/2017 1:50. <a href="">Henry Pham</a>. <a href="">0 comments</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="article sticky-new">
                                <div class="article-img hovereffect">
                                    <a href="blog-detail-regular2.html"><img src="images/articles/article6.jpg"></a>
                                    <div class="overlay">
                                        <a class="info" href="blog-detail-regular2.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> click to show detail</a>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h5><a href="blog-detail-regular2.html">Morning Briefing: Asia Edition. Praesent molestie justo dictum</a></h5>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                    </div>
                                    <div class="date">
                                        12/7/2017 20:10. <a href="">Admin</a>. <a href="">14 comments</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div> <!-- item-->
                <div class="item">
                    <div class="container">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="article sticky-feature">
                                <div class="article-img hovereffect">
                                    <a href="blog-detail-regular2.html"><img src="images/articles/article2.jpg"></a>
                                    <div class="overlay">
                                        <a class="info" href="blog-detail-regular2.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> click to show detail</a>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h5><a href="blog-detail-regular2.html">New project has just finished when consectetur adipiscing elit</a></h5>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                    </div>
                                    <div class="date">
                                        12/7/2017 2:30. <a href="">Jenny Ngo</a>. <a href="">14 comments</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="article">
                                <div class="article-img hovereffect">
                                    <a href="blog-detail-regular2.html"><img src="images/articles/article5.jpg"></a>
                                    <div class="overlay">
                                        <a class="info" href="blog-detail-regular2.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> click to show detail</a>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h5><a href="blog-detail-regular2.html">Review: Chronicling Books and Souls Integer non elementum nunc</a></h5>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                    </div>
                                    <div class="date">
                                        3/9/2017 1:50. <a href="">Henry Pham</a>. <a href="">0 comments</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="article">
                                <div class="article-img hovereffect">
                                    <a href="blog-detail-regular2.html"><img src="images/articles/article1.jpg"></a>
                                    <div class="overlay">
                                        <a class="info" href="blog-detail-regular2.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> click to show detail</a>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h5><a href="blog-detail-regular2.html">Morning Briefing: Asia Edition. Praesent molestie justo dictum</a></h5>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                                    </div>
                                    <div class="date">
                                        12/7/2017 20:10. <a href="">Admin</a>. <a href="">14 comments</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- item-->
            </div>

            <div class="clearfix"></div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#blogs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#blogs-carousel" data-slide-to="1"></li>
                <li data-target="#blogs-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#blogs-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#blogs-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>




    </div> <!-- contents-article -->
</div>

<!-- End of Home Blogs -->        <div class="home-numbers">
    <h3>Numbers Said</h3>
    <div class="subtitle">Smart, simple and easy to use - <b>Most of customers said.</b></div>
    <div class="container inner">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item">
            <div class="photo">
                <img src="images/SVG/icon-customer.svg">
            </div>
            <h5>1.522 customers</h5>
        </div>     
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item">
            <div class="photo">
                <img src="images/SVG/icon-update.svg">
            </div>
            <h5>21 update versions</h5>
        </div>     
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item">
            <div class="photo">
                <img src="images/SVG/icon-websites.svg">
            </div>
            <h5>1.522 websites & blogs</h5>
        </div>     


    </div>
</div>
<!-- End of Home Number -->        <div class="home-pricing panel-toparrow">
    <h3>Pricing</h3>
    <div class="subtitle"><a href="">Contact us</a> to get the best pricing</div>

    <div class="contents-pricing">
        <div class="container inner">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="pricing">
                    <div class="pricing-head">
                        <h3>Free</h3>
                    </div>
                    <div class="inner">

                        <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                        <div class="price">
                            Comletely free
                        </div>    
                        <div class="photo">
                            <img src="images/icon-price1.jpg">
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Integer non elementum 
                        </div>
                        <div class="button">
                            <a href="" class="button-default">GET FREE</a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="pricing pricing-feature">
                    <div class="pricing-head">
                        <h3>Unlimited</h3>
                    </div>
                    <div class="inner">                                    
                        <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                        <div class="price">
                            49$. Free updating
                        </div>    
                        <div class="photo">
                            <img src="images/icon-price2.jpg">
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Integer 
                        </div>
                        <div class="button">
                            <a href="" class="button-primary">GET UNLIMITED</a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="pricing">
                    <div class="pricing-head">
                        <h3>Premium</h3>
                    </div>
                    <div class="inner">                                    
                        <h5>Lorem ipsum dolor sit amet, consectetur </h5>
                        <div class="price">
                            28$ a month. Free updating.
                        </div>    
                        <div class="photo">
                            <img src="images/icon-price3.jpg">
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Integer non elementum nunc
                        </div>
                        <div class="button">
                            <a href="" class="button-default">GET PREMIUM</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- End of Home Pricing -->        
<div class="home-testimonial">
    <div class="container content">

        <div id="myCarousel5" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel5" data-slide-to="1"></li>
                <li data-target="#myCarousel5" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <div class="avatar">
                        <img class="img-circle" src="images/face/face5.jpg">
                    </div>
                    <h5>Mr. Ipsum Dolor</h5>
                    <div class="info">CTO - Non elementum nunc Corp - Project: <a data-toggle="modal" data-target="#projectDetail">Non elementum nunc</a></div>
                    <div class="quotes">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. Nam neque nulla, venenatis non iaculis non, scelerisque ultricies metus.
                    </div>
                </div>
                <div class="item">
                    <div class="avatar">
                        <img class="img-circle" src="images/face/face2.jpg">
                    </div>
                    <h5>Dr. Molestie Justo</h5>
                    <div class="info">CO - Adipiscing Asia - Project: <a data-toggle="modal" data-target="#projectDetail">Praesent molestie</a></div>
                    <div class="quotes">
                        Amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. Nam neque nulla, venenatis non iaculis non, scelerisque ultricies metus.
                    </div>
                </div>
                <div class="item">
                    <div class="avatar">
                        <img class="img-circle" src="images/face/face4.jpg">
                    </div>
                    <h5>Mrs. Pharetra Aliquam</h5>
                    <div class="info">Project Manager - Nam Neque Nulla Corp - Project: <a data-toggle="modal" data-target="#projectDetail">Nam neque nulla</a></div>
                    <div class="quotes">
                        Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. Nam neque nulla, venenatis non iaculis non, scelerisque ultricies metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                </div>

            </div>
        </div>




    </div>
</div>
<!-- End of Home testimonial -->        <div class="home-subcribe">
    <h3>Subscribe Today</h3>
    <div class="subtitle">Get newest information about sale, new features, new designs and our activities</div>
    <div class="content">
        <form  data-toggle="validator" action="" method="GET"> 
            <div class="input-group">
                <input type="text" class="form-control input-lg" placeholder="Enter your email" id="txtSearch" required />
                <div class="input-group-btn">
                    <button class="btn btn-primary btn-lg" type="submit">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> SUBSCRIBE
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="background"></div>
</div>
<!-- End of Home Subcribe -->        <div class="home-contact">

    <div class="container content">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-left">
            <h3>Contact us</h3>
            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                        <img src="images/icon-address.png">
                    </a>
                </div>
                <div class="media-body">
                    <div class="description">
                        3 UX Directors, 5 UX Researchers, 4 Information <br>Designers & 3 Graphic Designers
                    </div>
                </div>
            </div>
            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                        <img src="images/icon-phone.png">
                    </a>
                </div>
                <div class="media-body">
                    <div class="description">
                        +01 8908 90888
                    </div>
                </div>
            </div>
            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                        <img src="images/icon-email.png">
                    </a>
                </div>
                <div class="media-body">
                    <div class="description">
                        <a href="mailto:herrypham2017@gmail.com">herrypham2017@gmail.com</a><br><a href="mailto:contact@henrypham.com">contact@henrypham.com</a>
                    </div>
                </div>
            </div>
            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                        <img src="images/icon-skype.png">
                    </a>
                </div>
                <div class="media-body">
                    <div class="description">
                        <a href="">henrypham</a><br>
                        Online 27/7
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-right">
            <form  data-toggle="validator" action="" method="GET"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
                        <input class="form-control input-lg" id="inputsm" type="text" placeholder="Name" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
                        <input class="form-control input-lg" id="inputsm" type="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-control input-lg" id="inputsm" type="text" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control input-lg" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-lg" type="submit">
                        SEND MESSAGE
                    </button>
                </div>
            </form>
        </div>
    </div>



</div>
<!-- End of Home Contact -->
    </main>

    <footer>
    <div class="footer-row">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-posts">

                <h3 class="under-line">
                    LASTEST
                    <div class="line"></div>
                </h3>
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome5.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome4.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Nullam pellentesque ligula aliquam, tempus eros vitae</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome6.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Dros vitae, hendrerit tellus. Praesent volutpat</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-posts">

                <h3 class="under-line">
                    FEATURES
                    <div class="line"></div>
                </h3>
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Cras sit amet nibh libero, in gravida nulla</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Neque porro quisquam est, qui dolorem</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome3.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Sed quia non numquam eius modi tempora</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-photos">

                <h3 class="under-line">
                    PHOTOS
                    <div class="line"></div>
                </h3>
                <div class="grid row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/1.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/1.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/2.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/2.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/3.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/3.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/4.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/4.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/5.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/5.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/6.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/6.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/7.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/7.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/8.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/8.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/9.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/9.jpg" alt="Forest" >
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="footer-row">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-about">
                <div class="logo">
                    <a href="blog-detail-regular2.html"><img src="images/duende-logo.png">   
                        <div class="name">Duende</div>
                        <div class="slogan">the hidden charm form your website</div>
                    </a>
                </div>
                <div class="about-us">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                    <p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                </div>

                <div class="social">
                    <a href="blog-detail-regular2.html"><img src="images/icon-facebook.png"></a>
                    <a href="blog-detail-regular2.html"><img src="images/icon-twitter.png"></a>
                    <a href="blog-detail-regular2.html"><img src="images/icon-linkedin.png"></a>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-link">

                <h3 class="under-line">
                    HELP
                    <div class="line"></div>
                </h3>
                <ul>
                    <li><a href="page-about-us.html">Support center</a></li>
                    <li><a href="page-about-us.html">Contact Us</a></li>
                </ul>
                <ul>
                    <li><a href="page-about-us.html">Careers</a></li>
                    <li><a href="page-about-us.html">Become a Contributor</a></li>
                    <li><a href="page-about-us.html">Affiliate/Reseller Program</a></li>
                    <li><a href="page-about-us.html">International Reseller Program</a></li>
                    <li><a href="page-about-us.html">Developers</a></li>
                    <li><a href="page-about-us.html">R&D Program</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-link">

                <h3 class="under-line">
                    LEGALS
                    <div class="line"></div>
                </h3>
                <ul>
                    <li><a href="page-about-us.html">Privacy Policy</a></li>
                    <li><a href="page-about-us.html">Terms & Conditions</a></li>
                    <li><a href="page-about-us.html">© Commerzial 2017</a></li>
                </ul>

                <h3>TAGS</h3>

                <ul class="tags">
                    <li><a href="blog-search.html">Business</a></li>
                    <li><a href="blog-search.html">UX Design</a></li>
                    <li><a href="blog-search.html">Personal</a></li>
                    <li><a href="blog-search.html">Blogger</a></li>
                    <li><a href="blog-search.html">Social network</a></li>
                    <li><a href="blog-search.html">Professional Services</a></li>
                </ul>

            </div>
        </div>
    </div>
    <div class="footer-under">
        <div class="container">
            © 2015-2017. This perfect theme is made by <i class="fa fa-heart-o"></i>  by <a href="https://herryboard.com" target="_blank">Herry Board</a>.
        </div>
    </div>
</footer>



<a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
    <span class="glyphicon glyphicon-chevron-up"></span>
</a>

    <!-- End of footer -->


</body>
<!-- Bootstrap core JavaScript
    ================================================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="libs/bootstrap.min.js"></script>

<script src="libs/lightbox-plus-jquery.min.js"></script>
<script src="libs/isotope.pkgd.min.js"></script>

<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

<script src="js/common.js?Sunday 8th of October 2017 10:17:41 AM"></script>

<script>

    $(document).ready(function () {
        backToTop();
        checkNavbarScroll();
    });

</script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/main.js"></script>

    <!-- load for map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
    <script src="js/map.js"></script>
</html>