<?php
session_start();
 if(1==1)
{
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Group 12 : e-commerce template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
    <!-- navbar-->
    <header class="header mb-5">
        <!--
        *** TOPBAR ***
        _________________________________________________________
        -->
        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Offer of the day</a><a href="#" class="ml-1">Get flat 35% off on orders over $50!</a></div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <ul class="menu list-inline mb-0">

                            <?php

                            if(isset($_SESSION['landloard'])||isset($_SESSION['tenent']))
                            {?>
                            <li class="list-inline-item"><a href="./Controller/LogoutController.php?Logout=ok">Logout</a></li>
                            <?php
                            }else
                            {?>
                            <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                            <li class="list-inline-item"><a href="register.php">Register</a></li>
                            <?php

                            }

                            ?>

                            <li class="list-inline-item"><a href="contact.php">Contact</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Customer login</h5>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="./Controller/LoginController.php" method="post">
                                <div class="form-group">
                                    <input id="email-modal" type="text" placeholder="username" maxlength="10" required name="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input id="password-modal" type="password" name="userpassword" maxlength="10" required placeholder="password" class="form-control" required>
                                </div>
                                <p class="text-center">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i> Log in</button>
                                </p>
                            </form>
                            <p class="text-center text-muted">Not registered yet?</p>
                            <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** TOP BAR END ***-->


        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="index.php" class="navbar-brand home"><img src="img/logo.png" alt="Group 12 logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Group 12 logo" class="d-inline-block d-md-none"><span class="sr-only">Group 12 - go to homepage</span></a>
                <div class="navbar-buttons">
                    <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                    <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.php" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <div id="navigation" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
                        <li class="nav-item dropdown menu-large">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Men<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                         <div class="col-md-6 col-lg-4">
                        <h5>Find Property For Rent</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="customer-account.php" class="nav-link">Renting Housets</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Warehouses for Rent</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Bare Land for Short Term</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Beachfront Land</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">Cultivation Lands</a></li>
						  
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-2">
                        <h5>Provinces</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Western</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Central</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Northen</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">North Western</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">North Central</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">Sabaragamuwa</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">Estern</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">Southern</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">Uva</a></li>

                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Offers</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">50% Off</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Next Month Offers</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Annual Offers</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Price Range</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Luxury</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Semi-Luxury</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Normal</a></li>
                        </ul>
                       
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">APARTMENTS<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Price per sq.ft</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Below 100 ft with 1 Bedroom</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Among 100ft - 200ft with 2 Bedroom</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">More than 200 ft with 4 Bedrooms</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Provinces</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Western</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Central</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Northen</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">North Western</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">North Central</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">Sabaragamuwa</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">Estern</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">Southern</a></li>
						  <li class="nav-item"><a href="category.php" class="nav-link">Uva</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                       <h5>Top Residences</h5>
                        <ul class="list-unstyled mb-3">
                         <li class="nav-item"><a href="category.php" class="nav-link">Edmonton Colombo</a></li>
						 <li class="nav-item"><a href="category.php" class="nav-link">Amber Sky Negombo</a></li>
						 <li class="nav-item"><a href="category.php" class="nav-link">The Palace Gampaha</a><li class="nav-item"><a href="category.php" class="nav-link">Bella Rajagiriya</a></li>
						 <li class="nav-item"><a href="category.php" class="nav-link">Prime Residencies Edmonton Road II</a></li>
                         <li class="nav-item"><a href="category.php" class="nav-link">Beach Front II - Uswetakeiyawa</a></li>
 
                        </ul>
                        <h5>Price Range</h5>
                        <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.php" class="nav-link">Luxury</a></li>
                        <li class="nav-item"><a href="category.php" class="nav-link">Semi-Luxury</a></li>
                        <li class="nav-item"><a href="category.php" class="nav-link">Normal</a></li>
  
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="banner"><a href="#"><img src="img/banner.jpg" alt="" class="img img-fluid"></a></div>
                        <div class="banner"><a href="#"><img src="img/banner2.jpg" alt="" class="img img-fluid"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">GUIDES<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Users</h5>
                        <ul class="list-unstyled mb-3">
						  <li class="nav-item"><a href="register.php" class="nav-link">LandLord</a></li>
						  <li class="nav-item"><a href="register.php" class="nav-link">Tenent</a></li>
                          <li class="nav-item"><a href="register.php" class="nav-link">Register / login</a></li>
                          <li class="nav-item"><a href="customer-orders.php" class="nav-link">ADD POST</a></li>
                          <li class="nav-item"><a href="customer-order.php" class="nav-link">Reservations history detail</a></li>
                          <li class="nav-item"><a href="customer-wishlist.php" class="nav-link">Wishlist</a></li>
                          <li class="nav-item"><a href="customer-account.php" class="nav-link">Customer account / change password</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Packages</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="register.php" class="nav-link">House Rental</a></li>
                          <li class="nav-item"><a href="customer-orders.php" class="nav-link">Cultivation Lands</a></li>
                          <li class="nav-item"><a href="customer-order.php" class="nav-link">Apartments</a></li>
                          <li class="nav-item"><a href="customer-wishlist.php" class="nav-link">Warehouses</a></li>
                          <li class="nav-item"><a href="customer-account.php" class="nav-link">Bare Lands</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Partners</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="basket.php" class="nav-link">Home Lands Skyline Pvt Ltd</a></li>
                          <li class="nav-item"><a href="checkout1.php" class="nav-link">Maga Engineering (Pvt)</a></li>
                          <li class="nav-item"><a href="checkout2.php" class="nav-link">Blue Ocean Group of Companies</a></li>
                          <li class="nav-item"><a href="checkout3.php" class="nav-link">Capital TRUST Residencies (Pvt.) Ltd</a></li>
                          <li class="nav-item"><a href="checkout4.php" class="nav-link">Prime Group</a></li>
		         <li class="nav-item"><a href="checkout4.php" class="nav-link">Colombo City Centre Partners (Pvt) Ltd</a></li>

                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Pages and blog</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="blog.php" class="nav-link">Facebook</a></li>
                          <li class="nav-item"><a href="post.php" class="nav-link">Instagram</a></li>
                          
                          <li class="nav-item"><a href="text.php" class="nav-link">Youtube</a></li>
                          <li class="nav-item"><a href="detail.php" class="nav-link">FAQ</a></li>
                          <li class="nav-item"><a href="404.php" class="nav-link">404 page</a></li>
                          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
                    <div class="navbar-buttons d-flex justify-content-end">
                       <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block" invisible><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="customer-wishlist.php" class="btn btn-primary navbar-btn   "><i class="fa fa-shopping-cart"></i><span><?php
              
              if(isset($_SESSION['wishlistcount']))
              {
              
              echo $_SESSION['wishlistcount'];
              }else
              {
                 echo 0; 
              } 
              ?> wishlist properties</span></a></div>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="customer-post-add.php" class="btn btn-primary navbar-btn"><i class="fa fa-paper-plane"></i><span>Post Ad</span></a></div>

            </div>
          </div>
        </div>
        </nav>
        <div id="search" class="collapse">
            <div class="container">
                <form role="search" class="ml-auto">
                    <div class="input-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active">Text page</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <!--
                        *** PAGES MENU ***
                        _________________________________________________________
                        -->
                        <div class="card sidebar-menu mb-4">
                            <div class="card-header">
                                <h3 class="h4 card-title">Pages</h3>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills flex-column">
                                    <li><a href="text.php" class="nav-link">Text page</a></li>
                                    <li><a href="contact.php" class="nav-link">Contact page</a></li>
                                    <li><a href="detail.php" class="nav-link">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- *** PAGES MENU END ***-->
                        <div class="banner"><a href="#"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
						<div class="banner"><img src="img/detailsquare.jpg" alt="sales 2014" class="img-fluid"><a href="#"></a></div>
						<div class="banner"><img src="img/detailsquare.jpg" alt="sales 2014" class="img-fluid"><a href="#"></a></div>
						<!--***<div class="banner"><img src="img/detailsquare.jpg" alt="sales 2014" class="img-fluid"><a href="#"></a></div>***-->
                    </div>
                    <div class="col-lg-9">
                         <div id="text-page" class="box">
                            <h1>About Us</h1>
							<div class="w3-container w3-center w3-animate-left">
							<h1>WHO WE ARE...?</h1>
                            <p class="lead"><br>Estabilised in 2021, Dream paradise is a result of one of the most promising projects out there.anyone who wants to sell/purchase or rent a property online, dream paradise is  the place for it. and it will be proven with evidence in near future without any doubt.feauturing houses, apartments, annexes, and lands for both rent and sale in all the four conners of the island,dream paradise is open for anyone. not only whos are living in the country, but also for the people who are visiting from forieng nations will be able to rent  purchase or even sell their properties by submitting their ads.</br></p>
                            <div class="w3-container w3-center w3-animate-zoom">
							<h1>OUR WISH</h1>
                            <p class="lead"><br>Dream paradise was started with the intention of providing a online platform to sell or rent property by advertising them. property owners, land loads and agents are taking the advantage of this free web platform with a high enthusiasm. Our aim is to become the online property portal of choice for all Sri Lankans where sellers and landlords will find buyers or tenants for their properties, and for buyers/tenants to find their ideal property easily and quickly.</br></p>
		                    <div class="w3-container w3-center w3-animate-opacity">
							<h1>OUR UNIQUENESS</h1>
							<p class="lead"><br>Dream paradise has a bag of tools which are designed specialy  for buyers including the House Price Index, Home Loan Calculator, ROI Calculator, Property Buying Guide, Home loans Comparisonand Area Guide and as a responsible team, Dream paradise  have no doubt that these features of the website can direct users to select the best properties in the whole country.We are hoping to improve our service continuesly by keeping our relationship with the users of Dream paradise. and understand their needs more than any other in the industry.in order to achieve that, which we consider as our success, Dream paradise is more than ready to provide the latest technology as well as the features to make sure their buying and selling process through our platform is simple and effective at the same time.</br></p>
							<div class="w3-container w3-center w3-animate-bottom">
							<h1>WHY YOU CHOOSE US...?</h1>
							<p class="lead"><br>All the ads on our webite has posted directly by the owners or their agents any one who see the advertisement can contact these advertisers easily since we are providing all the details about them.since Dream paradise have came to the same industry where we have to face a good competition, we believe that we have potential to outperform other platforms and  become the leader of this industry.
							</div></p>
                            
                           
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-9-->
                </div>
            </div>
        </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3">Pages</h4>
                    <ul class="list-unstyled">
                        <li><a href="text.php">About us</a></li>
                        <li><a href="text.php">Terms and conditions</a></li>
                        <li><a href="detail.php">FAQ</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                    <hr>
                    <h4 class="mb-3">User section</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                        <li><a href="register.php">Regiter</a></li>
                    </ul>
                </div>
                <!-- /.col-lg-3-->
                <div class="col-lg-3 col-md-6">
 <h4 class="mb-3">Top categories</h4>
           <h5>Find Property For Rent</h5>
            <ul class="list-unstyled">
              <li><a href="category.php">Renting Housets</a></li>
              <li><a href="category.php">Warehouses for Rent</a></li>
              <li><a href="category.php">Bare Land for Short</a></li>
			   <li><a href="category.php">Cultivation Lands</a></li>
            </ul>
             <h5>Residences</h5>
            <ul class="list-unstyled">
              <li><a href="category.php">Edmonton Colombo</a></li>
              <li><a href="category.php">Amber Sky Negombo</a></li>
              <li><a href="category.php">The Palace Gampaha</a></li>
              <li><a href="category.php">Beach Front II - Uswetakeiyawa</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Where to find us</h4>
            <p><strong>Dream Paradise Ltd.</strong><br>No 120,<br>Victoria Place,<br><strong>Srilanka</strong></p><a href="contact.php">Go to contact page</a>
            <hr class="d-block d-md-none">
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Get the news</h4>
            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
              </div>
              <!-- /input-group-->
            </form>
            <hr>
            <h4 class="mb-3">Stay in touch</h4>
             <p class="social"><a href="https://www.facebook.com/Dream-Paradise-107019988369302" class="facebook external"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/hiran_windika" class="twitter external"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/dreamparadise____/?utm_medium=copy_link" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="https://mail.google.com/mail/u/0/?tab=cm#inbox?compose=new" class="email external"><i class="fa fa-envelope"></i></a></p>
			   </div>
          <!-- /.col-lg-3-->
          </div>
            <!-- /.row-->
        </div>
        <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-center text-lg-left">©2021 Team EBAD.</p>
                </div>
                <!--<div class="col-lg-6">
                    <p class="text-center text-lg-right">
                        Template design by <a href="https://bootstrapious.com/">Bootstrapious</a>
                        <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/Group 12-e-commerce-template. Big thanks!-->
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
</body>
</html>
<?php


}else
{
  header("Location: ./index.php?notuser=not");
}
?>