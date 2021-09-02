<?php
session_start();
 if(isset($_SESSION['landloard'])||isset($_SESSION['tenent']) || isset($_SESSION['tenent']))
{
              $conn=mysqli_connect("localhost","root","","dreamparadise");
          
              $sql="select * from Post  order by id desc;";
              $split=0;
              $result=mysqli_query($conn,$sql);
         
              while($row=mysqli_fetch_array($result))
              {                                                          
                $data[]=$row;
              }    $_SESSION['categorycount'] =sizeof($data); 
                  if($_SESSION['categorycount']<6)
                  {
                  $_SESSION['pcategorycount']=1;
                  }else{
                    $_SESSION['pcategorycount'] = round($_SESSION['categorycount']/6) ;
                      
                  if ($_SESSION['categorycount']%6 >  0) 
                  {
                      $_SESSION['pcategorycount'] ++;
                  }
                  }
              
             $pagenumber =intval($_GET['pagenumber']);

?>
<!DOCTYPE html>
<html>
<head>
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
    
         <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <div class="col-lg-6 offer mb-3 mb-lg-0"></div>
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
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Clothing</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.php" class="nav-link">T-shirts</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Shirts</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Pants</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Shoes</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Accessories</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Featured</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown menu-large">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Ladies<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Clothing</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.php" class="nav-link">T-shirts</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Shirts</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Pants</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Shoes</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Accessories</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
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
                        <li class="nav-item dropdown menu-large">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Template<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Shop</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="index.php" class="nav-link">Homepage</a></li>
                                                <li class="nav-item"><a href="category.php" class="nav-link">Category - sidebar left</a></li>
                                                <li class="nav-item"><a href="category-right.php" class="nav-link">Category - sidebar right</a></li>
                                                <li class="nav-item"><a href="category-full.php" class="nav-link">Category - full width</a></li>
                                                <li class="nav-item"><a href="detail.php" class="nav-link">Product detail</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>User</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="register.php" class="nav-link">Register / login</a></li>
                                                <li class="nav-item"><a href="customer-orders.php" class="nav-link">Orders history</a></li>
                                                <li class="nav-item"><a href="customer-order.php" class="nav-link">Order history detail</a></li>
                                                <li class="nav-item"><a href="customer-wishlist.php" class="nav-link">Wishlist</a></li>
                                                <li class="nav-item"><a href="customer-account.php" class="nav-link">Customer account / change password</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Order process</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="basket.php" class="nav-link">Shopping cart</a></li>
                                                <li class="nav-item"><a href="checkout1.php" class="nav-link">Checkout - step 1</a></li>
                                                <li class="nav-item"><a href="checkout2.php" class="nav-link">Checkout - step 2</a></li>
                                                <li class="nav-item"><a href="checkout3.php" class="nav-link">Checkout - step 3</a></li>
                                                <li class="nav-item"><a href="checkout4.php" class="nav-link">Checkout - step 4</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Pages and blog</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="blog.php" class="nav-link">Blog listing</a></li>
                                                <li class="nav-item"><a href="post.php" class="nav-link">Blog Post</a></li>
                                                <li class="nav-item"><a href="detail.php" class="nav-link">FAQ</a></li>
                                                <li class="nav-item"><a href="text.php" class="nav-link">Text page</a></li>
                                                <li class="nav-item"><a href="text-right.php" class="nav-link">Text page - right sidebar</a></li>
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
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="customer-post-add.php" class="btn btn-primary navbar-btn"><i class="fa fa-paper-plane"></i><span>Post Ad</span></a></div>    </div>
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
                                <li aria-current="page" class="breadcrumb-item active">Ladies</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <!--
                        *** MENUS AND FILTERS ***
                        _________________________________________________________
                        -->    -->
                        <div class="card sidebar-menu mb-4">
                            <div class="card-header">
                                <h3 class="h4 card-title">Categories</h3>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills flex-column category-menu">
                                    <li>
                                        <a href="category.php" class="nav-link">Find Property For Rent <span class="badge badge-secondary">12</span></a>
                                        <ul class="list-unstyled">
                                            <li><a href="category.php" class="nav-link">Renting Housets</a></li>
                                            <li><a href="category.php" class="nav-link">Warehouses for Rent</a></li>
                                            <li><a href="category.php" class="nav-link">Bare Land for Short Term</a></li>
                                            <li><a href="category.php" class="nav-link">Beachfront Land</a></li>
											<li><a href="category.php" class="nav-link">Cultivation Lands</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.php" class="nav-link">Price per sq.ft <span class="badge badge-light">123</span></a>
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
                                <h3 class="h4 card-title">Top Residences<a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
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
                                                <input type="checkbox"> Amber Sky Negombo  (3)
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
                                                <input type="checkbox"> Beach Front II - Uswetakeiyawa  (5)
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
                                <h3 class="h4 card-title">Provinces <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
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
                    <div class="col-lg-9">
                        <div class="box">
                            <h1>Ladies</h1>
                            <p>In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                        </div>
                        <div class="box info-bar">
                            <div class="row">
                                <div class="col-md-12 col-lg-4 products-showing">Showing <strong>12</strong> of <strong>25</strong> products</div>
                                <div class="col-md-12 col-lg-7 products-number-sort">
                                    <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                                        <div class="products-number"><strong>Show</strong><a href="#" class="btn btn-sm btn-primary">12</a><a href="#" class="btn btn-outline-secondary btn-sm">24</a><a href="#" class="btn btn-outline-secondary btn-sm">All</a><span>products</span></div>
                                        <div class="products-sort-by mt-2 mt-lg-0">
                                            <strong>Sort by</strong>
                                            <select name="sort-by" class="form-control">
                                                <option>Price</option>
                                                <option>Name</option>
                                                <option>Sales first</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row products">
                        
                         <?php
                        
                          if(!empty($data))
                          {
                         
                   
                          foreach($data as $y)
                              {
                       
                                  
                                 if((($pagenumber-1) * 6 <= $split ) && ($pagenumber * 6 >= $split+1 && $pagenumber != 0))
                                 {
                                 ?>
                                   <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="detail.php"><img src="./uploads/<?php echo $y['image']; ?>"  alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="detail.php"><img src="./uploads/<?php echo $y['image']; ?>"  alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="detail.php" class="invisible"><img src="./uploads/<?php echo $y['image']; ?>"  alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3><a href="detail.php">  Distance to city :<?php echo $y['distance']; ?>km to the <?php echo $y['city']; ?></a></h3>
                                        <p class="price">
                                            <del></del><?php echo $y['price']."/="; ?>
                                        </p>
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
                                      
                                             <?php
                           if($y['isActive']=='0')
                           {?>
                            <center><h2><span class="badge badge-pill badge-danger">Reserved</span></h2></center>

                           <?php
                           }else
                           {
                           ?>
                            <center><button type="submit" class="btn btn-info">View Info</button></center>

                           <?php
                           }
                           ?>
                
                                        </form>
                                        <br>
                                       <center>
                                       <?php
                                        if (isset($_SESSION['tenentid']))
                                        {
	

                                           $connection=mysqli_connect("localhost","root","","dreamparadise");
                        
     
                                            $sqlquesry="select * from Wishlist  where userid='".$_SESSION['tenentid']."' and postid='".$y['id']."' and isActive='1';";  
     
                                            $resultSet=mysqli_query($connection,$sqlquesry);
             
                                            while(!($rowset=mysqli_fetch_assoc($resultSet)))
                                            { 
                                            
                                       ?>
                                       <?php
                                       if ($y['isActive']=='1') {
?>	

                                       <a class="btn btn-primary" href="./Controller/WishListController.php?from=<?php echo $pagenumber;?>&postid=<?php echo $y['id'];?>"><i class="fa fa-heart"></i>Add to Wishlist</a></center>



<?php
}
?>


                                         <?php
                    break;
                    }
            }

            ?>
   
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                        <br>
                                    </div>
                                    <!-- /.text-->
                                </div>
                                <!-- /.product            -->
                            </div>

                              
                     <?php   
                           }
                                      $split++;
                                                      
                                 }
                          }
                         ?>
                         
                        </div>
                        <div class="pages">
                            <p class="loadMore invisible"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a></p>
                            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                                <ul class="pagination">
                                        <?php   
                                        $xc =$pagenumber-1;
                                        
                                        if($pagenumber> 1)
                                        {
                                        ?>
                                    <li class="page-item"><a href="category.php?pagenumber=<?php echo $xc; ?>" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                    <?php
                                  }
                                     for($init=1;$init<=$_SESSION['pcategorycount'];$init++){
                                     ?>
                                        <li class="page-item <?php 
                                        if($pagenumber== $init)
                                        { 
                                           echo'active';
                                         }
?>"><a href="category.php?pagenumber=<?php echo $init; ?>" class="page-link"><?php echo $init; ?></a></li>
                                     <?php
                                     }
                                     $x =$pagenumber+1;
                                     if($_SESSION['pcategorycount']>$pagenumber){
                                     ?>
                                     <li class="page-item"><a href="category.php?pagenumber=<?php echo $x; ?>" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                                     <?php
                                     }
                                     ?>
                                </ul>
                            </nav>
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
                    <h5>Men</h5>
                    <ul class="list-unstyled">
                        <li><a href="category.php">T-shirts</a></li>
                        <li><a href="category.php">Shirts</a></li>
                        <li><a href="category.php">Accessories</a></li>
                    </ul>
                    <h5>Ladies</h5>
                    <ul class="list-unstyled">
                        <li><a href="category.php">T-shirts</a></li>
                        <li><a href="category.php">Skirts</a></li>
                        <li><a href="category.php">Pants</a></li>
                        <li><a href="category.php">Accessories</a></li>
                    </ul>
                </div>
                <!-- /.col-lg-3-->
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3">Where to find us</h4>
                    <p><strong>Group 12 Ltd.</strong><br>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great Britain</strong></p><a href="contact.php">Go to contact page</a>
                    <hr class="d-block d-md-none">
                </div>
                <!-- /.col-lg-3-->
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-3">Get the news</h4>
                    <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control"><span class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary">Subscribe!</button>
                            </span>
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
                    <p class="text-center text-lg-left">©2019 Your name goes here.</p>
                </div>
                <div class="col-lg-6">
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