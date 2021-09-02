<?php
session_start();
 if(isset($_SESSION['landloard'])  || isset($_SESSION['tenent']) || isset($_SESSION['tenent']))
{
  if (isset($_SESSION['tenentid'])) {
	# code...

     $conn=mysqli_connect("localhost","root","","dreamparadise");
                        
     
        $sql="select COUNT(id) as h from Wishlist  where userid='".$_SESSION['tenentid']."' and isActive='1';";  
     
                  $result=mysqli_query($conn,$sql);
             
                  while($row=mysqli_fetch_assoc($result))
                  { 
                  $_SESSION['wishlistcount'] = $row['h'];  
                
            }
            }

if(isset($_POST['image'])||isset($_POST['description'])
|| isset($_POST['rtype']) || isset($_POST['price']) 
|| isset($_POST['city']) || isset($_POST['distance'])
|| isset($_POST['province']) || 
isset($_POST['userid']) || isset($_POST['pictureid'])|| isset($_POST['secImage'])|| isset($_POST['terImage']))
{
         $_SESSION['image']=$_POST['image'];
         $_SESSION['secImage']=$_POST['secImage'];
         $_SESSION['terImage']=$_POST['terImage'];
         $_SESSION['description']=$_POST['description'];
         $_SESSION['rtype']=$_POST['rtype'];
         $_SESSION['price']=$_POST['price'];
         $_SESSION['distance']=$_POST['distance'];
         $_SESSION['city']=$_POST['city'];
         $_SESSION['province']=$_POST['province'];
         $_SESSION['userid']=$_POST['userid'];
         $_SESSION['pictureid']=$_POST['pictureid'];
         }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Details-Dreamparadise.one</title>
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

         <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
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
            <div class="col-lg-6 offer mb-3 mb-lg-0 invisible"><a href="#" class="btn btn-success btn-sm">Offer of the day</a><a href="#" class="ml-1">Get flat 35% off on orders over $50!</a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item invisible"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                <li class="list-inline-item "><a href="./Controller/LogoutController.php?Logout=ok">Logout</a></li>
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
                <form action="customer-orders.php" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
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
        <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="invisible btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.php" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">RENT<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Find Property For Rent</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="customer-account.php" class="nav-link">Renting Houses</a></li>
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
              <!-- /.nav-collapse-->
                       <div id="search-not-mobile" class="invisible navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="invisible btn navbar-btn btn-primary d-none d-lg-inline-block" invisible><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
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
      <div id="search" class="invisible collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="invisible input-group">
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
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="#"><?php echo $_SESSION['rtype'];?></a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Categories</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <a href="category.php" class="nav-link">Find Property For Rent <span class="badge badge-secondary"></span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="category.php" class="nav-link">Renting Housets</a></li>
                                            <li><a href="category.php" class="nav-link">Warehouses for Rent</a></li>
                                            <li><a href="category.php" class="nav-link">Bare Land for Short Term</a></li>
                                            <li><a href="category.php" class="nav-link">Beachfront Land</a></li>
											<li><a href="category.php" class="nav-link">Cultivation Lands</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.php" class="nav-link">Price per sq.ft <span class="badge badge-light"></span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="category.php" class="nav-link">Below 100 ft with 1 Bedroom</a></li>
                                            <li><a href="category.php" class="nav-link">Among 100ft - 200ft with 2 Bedroom</a></li>
                                            <li><a href="category.php" class="nav-link">More than 200 ft with 4 Bedrooms</a></li>
                                            <li><a href="category.php" class="nav-link">40x60 Apartment</a></li>
                                        </ul>
                                    </li>
                                    <!--li>
                                        <a href="category.php" class="nav-link">Kids  <span class="badge badge-secondary">11</span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="category.php" class="nav-link">T-shirts</a></li>
                                            <li><a href="category.php" class="nav-link">Skirts</a></li>
                                            <li><a href="category.php" class="nav-link">Pants</a></li>
                                            <li><a href="category.php" class="nav-link">Accessories</a></li>
                                        </ul>
                                    </li-->
                  </ul>
                </div>
              </div>
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Top Residence <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Edmonton Colombo  (5)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Amber Sky Negombo  (3)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> The Palace Gampaha  (5)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Prime Residencies Edmonton Road II (4)
                        </label>
						 <div class="checkbox">
                        <label>
                          <input type="checkbox">Beach Front II - Uswetakeiyawa  (5)
                        </label>
                      </div>
                    </div>
					</div>
                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                  </form>
                </div>
              </div>
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Colours <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                                                <input type="checkbox"><span class="colour white"></span> Western (44)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour blue"></span> Central (10)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour green"></span>  Northen (20)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour yellow"></span>  North Western (13)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour red"></span>  North Central (10)
                                            </label>
                                        </div>
										<div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour red"></span>  Sabaragamuwa (10)
                                            </label>
                                        </div>
										<div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour red"></span>  Estern (10)
                                            </label>
                                        </div>
										<div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour red"></span>  Southern (10)
                                            </label>
                                        </div>
										<div class="checkbox">
                                            <label>
                                                <input type="checkbox"><span class="colour red"></span>  Uva (10)
                                            </label>
                      </div>
                    </div>
                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                  </form>
                </div>
              </div>
              <!-- *** MENUS AND FILTERS END ***-->
              <div class="banner"><a href="#"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
              <div id="productMain" class="row">
                <div class="col-md-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div class="item"> <img src="./uploads/<?php echo $_SESSION['image']; ?>" alt="" class="img-fluid h-100"></div>
                    <div class="item"> <img src="./previewOne/<?php echo $_SESSION['secImage']; ?>"  alt="" class="img-flui d h-100"></div>
                    <div class="item"> <img src="./previewTwo/<?php echo $_SESSION['terImage']; ?>" alt="" class="img-fluid h-100"></div>
                  </div>
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <?php
                       
                      if (isset($_POST['pictureid'])) {
	                            
                                $con=mysqli_connect("localhost","root","","dreamparadise");
                                if(isset($_SESSION['tenentid'])){
                                 $query="insert into recentview(userid,postid) values('".$_SESSION['tenentid']."','".$_POST['pictureid']."');";
                                }else
                                {
                                 $query="insert into recentview(userid,postid,isTenent) values('".$_SESSION['landloardid']."','".$_POST['pictureid']."',0);";
                                }                                 mysqli_query($con, $query);     
                      
                           }
                  
                         
                
                ?>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center"><?php echo $_SESSION['rtype'];?></h1>
                    <p class="goToDescription"><a href="#details" class="scroll-to">For more details</a></p>
                    <?php
                    
                     if(isset($_SESSION['verified'])&& $_SESSION['verified']=='1')
                     {
                      ?>
                       <center><h2><span class="badge badge-pill badge-warning">Verified</span></h2></center>
                      <?php
                     }
                     ?>
                     <p class="price"><?php echo $_SESSION['price'];?>/=</p>
                   <?php
                    if(isset($_SESSION['tenentid']))
                    {?>
                    <p class="text-center buttons"><a href="basket.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Advanced Payement</a>
                      <?php
                      
                    }
                      ?>       <?php

     if (isset($_SESSION['tenentid'])) {
	# code...

     $conn=mysqli_connect("localhost","root","","dreamparadise");
                        
     
                if(isset($_SESSION['tenentid'])){
                    
                                   $sql="select * from Wishlist  where userid='".$_SESSION['tenentid']."' and postid='".$_SESSION['pictureid']."' and isActive='1';";  
    
                }else{
                                      $sql="select * from Wishlist  where userid='0' and postid='".$_SESSION['pictureid']."';";  

                    
                    
                    
                }
     
                  $result=mysqli_query($conn,$sql);
                  if(!$result && isset($_SESSION['tenentid']))
                  {
                      ?>
                       <a href="./Controller/WishListController.php?postid=<?php echo $_SESSION['pictureid'];?>" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a></p>
                      
                <?php      
                  }
                
                      while(!($row=mysqli_fetch_assoc($result)&& isset($_SESSION['tenentid'])))
                  { 
                     ?>
                                         <a href="./Controller/WishListController.php?postid=<?php echo $_SESSION['pictureid'];?>" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a></p>

                                         <?php
                    break;
                  }
                      
                  
            }

            ?>
   
            

                  </div>
                  </p>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img style="opacity: 0.5;" src="./uploads/<?php echo $_SESSION['image']; ?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img  style="opacity: 1;" src="./previewOne/<?php echo $_SESSION['secImage']; ?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img  style="opacity: 0.2;" src="./previewTwo/<?php echo $_SESSION['terImage'];?>"alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box">
                <p></p>
                <h4 style="color:#3385ff;">Property Description</h4>

                <ul>
                <?php
                  $des =$_SESSION['description'];
                  $p=explode(".",$des);
                  foreach($p as $pi)
                  {?>
                    <li>
                       <?php 
                         echo $pi;
                       ?>
                    </li>
                  <?php
                  }
                ?>
                <li><h5 class="text-danger"><?php echo $_SESSION['distance']." km from ".$_SESSION['city']; ?></h5></li>
                </ul>

                
                <h4 style="color:#3385ff;">Land load Information</h4>
                  <ul>
                <?php
                        $conn=mysqli_connect("localhost","root","","dreamparadise");
                        

                            
                               $sql="select * from LandLoard where id='".$_SESSION['userid']."' ;";
            
                                $result=mysqli_query($conn,$sql);
             
                                while($row=mysqli_fetch_array($result))
                                { 
                                $_SESSION['full'] =$row['fname']." ".$row['lname'];
                                $_SESSION['verified']=$row['isVerified'];
                                ?>

                               <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Land Load Name</label>
                                            <input id="price"  disabled  type="text" value="<?php echo$row['fname'].' '.$row['lname'];?>"   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Email</label>
                                            <input id="price"  disabled  type="text" value="<?php echo$row['email'];?>"  class="form-control">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Telephone Number</label>
                                            <input id="price"  disabled value="<?php echo$row['tel'];?>" type="text"   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Mobile Number</label>
                                            <input id="price"  disabled  type="text" value="<?php echo$row['mobile'];?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                  <?php
                                }
                                ?>

                
              
                 
                </ul>
                <blockquote>
                  <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
                </blockquote>
                <hr>
                <div class="social">
                  <h4>Show it to your friends</h4>
                  <p><a href="https://www.facebook.com/Dream-Paradise-107019988369302" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="https://twitter.com/hiran_windika" class="external twitter"><i class="fa fa-twitter"></i></a><a href="https://mail.google.com/mail/u/0/?tab=cm#inbox?compose=new" class="email"><i class="fa fa-envelope"></i></a></p>
                </div>
              </div>
              <div class="row same-height-row">
                <div class="col-md-3 col-sm-6">
                  <div style = "font-family: 'Anton', sans-serif;" class="box same-height">
				  <style>
				  h2 {
						 font-size: 38px;
					}
					</style>
                    <h2>You may also like these products</h2>
                  </div>
                </div>
                 <?php
                        $conn=mysqli_connect("localhost","root","","dreamparadise");
                       if($conn)
                       {
                            //echo"connected";
                       }else
                       {
                            //echo"not connected";     
                       }     

                               $sql="select * from Post  where isActive='1' order by id desc limit 3;";
                
                                $result=mysqli_query($conn,$sql);
             
                                while($row=mysqli_fetch_array($result))
                                {                                                          
                                 $data[]=$row;
                                }     
                  
                           if(!empty($data))
                              {
                              
                              foreach($data as $y)
                              {
                             
                         
                              ?>

                <div class="col-md-3 col-sm-6">
                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a ><img src="./uploads/<?php echo $y['image']; ?>" alt="" class="img-fluid"></a></div>
                        <div class="back"><a ><img src="./uploads/<?php echo $y['image']; ?>" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="detail.php" class="invisible"><img src="./uploads/<?php echo $y['image']; ?>" alt="" class="img-fluid"></a>
                    <div class="text">
                      <center><h5>Distance to city :<?php echo $y['distance']; ?>km to the <?php echo $y['city']; ?></h5></center>
                      <p class="price"><?php echo$y['price'];?></p>
                      
                     <form method="post" action="detail.php">
                         <input type="hidden" value="<?php echo $y['image'];?>" name="image"/>
                         <input type="hidden" value="<?php echo$y['description'];?>" name="description">
                         <input type="hidden" value="<?php echo$y['rtype'];?>" name="rtype"/>
                         <input type="hidden" value="<?php echo$y['price'];?>" name="price"/>
                         <input type="hidden" value="<?php echo$y['distance'];?>" name="distance"/>
                         <input type="hidden" value="<?php echo$y['city'];?>" name="city"/>
                         <input type="hidden" value="<?php echo$y['province'];?>" name="province"/>
                         <input type="hidden" value="<?php echo$y['userid'];?>" name="userid"/>
                         <input type="hidden" value="<?php echo$y['id'];?>" name="pictureid"/>
                           <center><button type="submit" class="btn btn-info">View Info</button></center>
                      </form>
                      <br/>
  
                    </div>

                  </div>                <!-- /.product-->
                </div>
               
               <?php

               }}?>
              </div>
              <div class="row same-height-row">
                <div class="col-md-3 col-sm-6">
                  <div style = "font-family: 'Anton', sans-serif;" class="box same-height">
				   <style>
				  h2 {
						 font-size: 38px;
					}
					</style>
                    <h2>Products viewed recently</h2>
                  </div>
                </div>

                 <?php
           
                 $connection=mysqli_connect("localhost","root","","dreamparadise");
                 if(isset($_SESSION['tenentid'])){
                 $sqlQuery="select distinct postid from recentview  where userid='".$_SESSION['tenentid']."' and isTenent='1' and isActive='1' order by id  desc LIMIT 3;"; 
                 }else{
                   $sqlQuery="select distinct postid from recentview  where userid='".$_SESSION['landloardid']."' and isTenent='0' and isActive='1'   order by id  desc LIMIT 3;"; 

                 }
                 $resultSet=mysqli_query($connection,$sqlQuery);
                 $x =array();   
           
                  while($rowSet=mysqli_fetch_assoc($resultSet))
                  { 
                   array_push($x,$rowSet['postid']);
                  }
                  mysqli_close($connection);    
                  $conn=mysqli_connect("localhost","root","","dreamparadise");

                      $count= sizeof($x);
                                      
                      
    
  

                    // echo $count."<br>".$x[$count-3]."*<br>".$x[$count-2]."**<br>".$x[$count-1]."***<br>";
                       if($count == 3 || $count > 3)
                        {
                             $sqlx="select  * from Post  where id = '".$x[0]."' or id='".$x[2]."' or id='".$x[1]."' limit 3;";
                            
                        }elseif($count==2)
                        {
                             $sqlx="select  * from Post  where id = '".$x[0]."' or id='".$x[1]."';";
                           
                        }elseif($count==1)
                        {
                        
                              $sqlx="select  * from Post  where id = '".$x[0]."';";

                        }

                        
                                $resultx=mysqli_query($conn,$sqlx);
             
                                while($rowx=mysqli_fetch_array($resultx))
                                {                                                          
                                 $datax[]=$rowx;
                                }     
        
                           if(!empty($datax))
                              {
                              
                              foreach($datax as $yx)
                              {
                              ?>
                <div class="col-md-3 col-sm-6">
                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a ><img src="./uploads/<?php echo $yx['image']; ?>" alt="" class="img-fluid"></a></div>
                        <div class="back"><a ><img src="./uploads/<?php echo $yx['image']; ?>" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="detail.php" class="invisible"><img src="./uploads/<?php echo $yx['image']; ?>" alt="" class="img-fluid"></a>
                    <div class="text">
                      <center><h5>Distance to city :<?php echo $y['id']; ?>km to the <?php echo $yx['city']; ?></h5></center>
                      <p class="price"><?php echo$yx['price'];?></p>
                    <form method="post" action="detail.php">
                         <input type="hidden" value="<?php echo $yx['image'];?>" name="image"/>
                         <input type="hidden" value="<?php echo$yx['description'];?>" name="description">
                         <input type="hidden" value="<?php echo$yx['rtype'];?>" name="rtype"/>
                         <input type="hidden" value="<?php echo$yx['price'];?>" name="price"/>
                         <input type="hidden" value="<?php echo$yx['distance'];?>" name="distance"/>
                         <input type="hidden" value="<?php echo$yx['city'];?>" name="city"/>
                         <input type="hidden" value="<?php echo$yx['province'];?>" name="province"/>
                         <input type="hidden" value="<?php echo$yx['userid'];?>" name="userid"/>
                         <input type="hidden" value="<?php echo$yx['id'];?>" name="pictureid"/>
                           <center><button type="submit" class="btn btn-info">View Info</button></center>
                      </form>
                    <br/>
                      </div>
                     </div>
                </div>
                  <?php
                  }}
                  ?>
               
              </div>
            </div>

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
              <li><a href="faq.php">FAQ</a></li>
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
             <h5>PRICE PER SQ.FT</h5>
            <ul class="list-unstyled">
              <li><a href="category.php">Below 100 ft with 1 Bedroom</a></li>
              <li><a href="category.php">Among 100ft - 200ft with 2 Bedroom</a></li>
              <li><a href="category.php">More than 200 ft with 4 Bedrooms</a></li>
              <li><a href="category.php">40x60 Apartment</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
           <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Where to find us</h4>
            <p><strong>Dream Paradise Ltd.</strong><br>No 120,<br>Victoria Place,<br>Colombo 08<br><strong>Srilanka</strong></p><a href="contact.php">Go to contact page</a>
            <hr class="d-block d-md-none">
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Over Value</h4>
            <p style="font-family: 'Salsa', cursive; class="text-muted">"The positive spirit with which we support each other fosters open, honest, and meaningful relationships. We celebrate and embrace our diversity. We invest in each other because we win or lose as a team."</p>
            <form>
              <div class="invisible input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
              </div>
              <!-- /input-group-->
            </form>
            <hr>
            <h4 class="mb-3">Stay in touch</h4>
            <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#" class="email external"><i class="fa fa-envelope"></i></a></p>
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
            <p class="text-center text-lg-left">©2021 Copyright © Dream Paradise Ltd. All rights reserved</p>
          </div>
          <div class="col-lg-6">
            <p class="text-center text-lg-right">Development by Team EBAD</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
  </body>
  <?php
   if (isset($_GET["wishlistf"])) {
     ?>
     <script>
     Swal.fire({
     title: 'Failed',
    text: 'Failed to add wishlist',
    icon: 'error',
     confirmButtonText: 'Try again'
}) 
     </script>

     <?php
     }elseif (isset($_GET["wishlist"])) {

    ?>
     <script>
     Swal.fire({
     title: 'Success',
    text: 'Successfully added to the wishlist',
    icon: 'success',
     confirmButtonText: 'Ok'
})
     </script>
    <?php
    }elseif(isset($_GET["alwishlist"]))
    {
    ?>
       <script>
             Swal.fire({
             title: 'No need',
            text: 'Already added to WishList',
            icon: 'error',
             confirmButtonText: 'Ok'
        })
     </script>
    <?php
    }
    ?>
</html>
<?php


}else
{
  header("Location: ./index.php?notuser=not");
}
?>