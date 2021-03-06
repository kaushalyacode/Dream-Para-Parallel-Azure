<?php
session_start();
 if(isset($_SESSION['landloard'])||isset($_SESSION['tenent']) || isset($_SESSION['tenent']))
{
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
                         <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="invisible btn navbar-btn btn-primary d-none d-lg-inline-block" invisible><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
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
                                <li aria-current="page" class="breadcrumb-item active">Ladies</li>
                            </ol>
                        </nav>
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
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="detail.php"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="detail.php"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="detail.php" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3><a href="detail.php">Fur coat with very but very very long name</a></h3>
                                        <p class="price">
                                            <del></del>$143.00
                                        </p>
                                        <p class="buttons"><a href="detail.php" class="btn btn-outline-secondary">View detail</a><a href="basket.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                                    </div>
                                    <!-- /.text-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="detail.php"><img src="img/product2.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="detail.php"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="detail.php" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3><a href="detail.php">White Blouse Armani</a></h3>
                                        <p class="price">
                                            <del>$280</del>$143.00
                                        </p>
                                        <p class="buttons"><a href="detail.php" class="btn btn-outline-secondary">View detail</a><a href="basket.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                                    </div>
                                    <!-- /.text-->
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
                                    <div class="ribbon gift">
                                        <div class="theribbon">GIFT</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="detail.php"><img src="img/product3.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="detail.php"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="detail.php" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3><a href="detail.php">Black Blouse Versace</a></h3>
                                        <p class="price">
                                            <del></del>$143.00
                                        </p>
                                        <p class="buttons"><a href="detail.php" class="btn btn-outline-secondary">View detail</a><a href="basket.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                                    </div>
                                    <!-- /.text-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="detail.php"><img src="img/product3.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="detail.php"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="detail.php" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3><a href="detail.php">Black Blouse Versace</a></h3>
                                        <p class="price">
                                            <del></del>$143.00
                                        </p>
                                        <p class="buttons"><a href="detail.php" class="btn btn-outline-secondary">View detail</a><a href="basket.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                                    </div>
                                    <!-- /.text-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="detail.php"><img src="img/product2.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="detail.php"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="detail.php" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3><a href="detail.php">White Blouse Versace</a></h3>
                                        <p class="price">
                                            <del></del>$143.00
                                        </p>
                                        <p class="buttons"><a href="detail.php" class="btn btn-outline-secondary">View detail</a><a href="basket.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                                    </div>
                                    <!-- /.text-->
                                    <div class="ribbon new">
                                        <div class="theribbon">NEW</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="detail.php"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="detail.php"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="detail.php" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3><a href="detail.php">Fur coat</a></h3>
                                        <p class="price">
                                            <del></del>$143.00
                                        </p>
                                        <p class="buttons"><a href="detail.php" class="btn btn-outline-secondary">View detail</a><a href="basket.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                                    </div>
                                    <!-- /.text-->
                                    <div class="ribbon gift">
                                        <div class="theribbon">GIFT</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="detail.php"><img src="img/product2.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="detail.php"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="detail.php" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3><a href="detail.php">White Blouse Armani</a></h3>
                                        <p class="price">
                                            <del>$280</del>$143.00
                                        </p>
                                        <p class="buttons"><a href="detail.php" class="btn btn-outline-secondary">View detail</a><a href="basket.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                                    </div>
                                    <!-- /.text-->
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
                                    <div class="ribbon gift">
                                        <div class="theribbon">GIFT</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href="detail.php"><img src="img/product3.jpg" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="detail.php"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="detail.php" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3><a href="detail.php">Black Blouse Versace</a></h3>
                                        <p class="price">
                                            <del></del>$143.00
                                        </p>
                                        <p class="buttons"><a href="detail.php" class="btn btn-outline-secondary">View detail</a><a href="basket.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                                    </div>
                                    <!-- /.text-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <!-- /.products-->
                        </div>
                        <div class="pages">
                            <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a></p>
                            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
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