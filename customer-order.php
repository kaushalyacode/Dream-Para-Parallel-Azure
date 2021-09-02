 
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
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Group 12 : e-commerce template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@100&display=swap" rel="stylesheet">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
    <?php
    if(isset($_GET["tenentup"])||isset($_GET["landloardup"]))
    {
    ?>
    <script>
        Swal.fire({
            title: "Update Success",
            text: "Password Update Successfully",
            icon: 'success',
            confirmButtonText: 'Ok'
        })
    </script>
    <?php
    }
    ?>
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
                                <li aria-current="page" class="breadcrumb-item active">My account</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <!--
                        *** CUSTOMER MENU ***
                        _________________________________________________________
                        -->
                        <div class="card sidebar-menu">
                            <div class="card-header">
                                <?php
                                if(isset($_SESSION['landloard'])){
                                ?>
                                <h3 class="h4 card-title">Land Load section</h3>
                                <?php
                                }else{
                                ?>
                                <h3 class="h4 card-title">Tenant section</h3>
                                <?php
                                }
                                ?>


                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills flex-column"><a href="customer-post-add.php" class="nav-link active"><i class="fa fa-paper-plane"></i> Post Your Address</a><a href="customer-account.php" class="nav-link"><i class="fa fa-user"></i> My account<a href="customer-orders.php" class="nav-link"><i class="fa fa-address-card-o"></i>Add Info</a><a href="./Controller/LogoutController.php?Logout=ok" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></ul>
                            </div>
                        </div>
                        <!-- /.col-lg-3-->
                        <!-- *** CUSTOMER MENU END ***-->
                    </div>
                    <div class="col-lg-9">
                        <div class="box">
                            <h1>My account</h1>
                            <p class="lead">Change your personal details or your password here.</p>
                            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                            <h3>Change password</h3>
                            <form method="post" action="./Controller/PasswordResetController.php">
                                <?php if(isset($_SESSION['landloard']))
                                {?>
                                <input type="hidden" name="usertype" value="l" />
                                <?php
                                }else
                                {
                                ?>                               
                                <input type="hidden" name="usertype" value="t" />
                                <?php
                                }
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password_old">Old password</label>
                                            <input id="password_old" required maxlength="10"  name="oldpassword" type="password" class="form-control">
                                        </div>
                                    </div>
                                    <?php
                                    if (isset($_GET['oldpasswordf'])) {
                                    ?>
                                    <script>
  Swal.fire({
                                title: 'Failed',
                                text: 'Old Password is incorrect',
                                icon: 'error',
                                confirmButtonText: 'Try again'
                            })
                            </script>

                               <div class="col-md-6" style="color:#ff0000;font-family: 'Alumni Sans', sans-serif;">
                                       <label for="password_ol" class="d-none">xxxxxxxxxxxxxxx</label> <br> 
                                       please add valid passowrd
                               </div>

<?php
}
?>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password_1">New password</label>
                                            <input id="password_1"required maxlength="10"   name="password" type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password_2">Retype new password</label>
                                            <input id="password_2" required maxlength="10"  onfocusout="validator()" name="repassword" type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row--><!--
-->                             <script>
                                 function validator(){
                                  
                                  var p = document.getElementById("password_1");
                                   var rp = document.getElementById("password_2");
                                    
                                   if(p.value!=rp.value){
                                Swal.fire({
                                title: 'Failed',
                                text: 'Password not matched',
                                icon: 'error',
                                confirmButtonText: 'Try again'
                            })
                           }
               
  }

                                 
                                </script>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save new password</button>
                                </div>
                            </form>
                            


                            <h3 class="mt-5">Personal details</h3>
                            <form method="post" action="./Controller/EditUser.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input id="firstname" required maxlength="100"  name="fname"type="text" value="<?php echo$_SESSION['fname'];?>"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input id="lastname"  required  type="text" name="lname" maxlength="100" value="<?php echo$_SESSION['lname'];?>"   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company">Tel</label>
                                            <input name="tel" pattern=".{10,10}" required title="10 characters"  id="company"value="<?php echo$_SESSION['tel'];?>"   type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="street">Mobile</label>
                                            <input id="street" pattern=".{10,10}" required title="10 characters"  name="mobile" value="<?php echo$_SESSION['mobile'];?>"   type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="city">Email</label>
                                            <input id="city" disabled type="text" value="<?php echo$_SESSION['email'];?>"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="zip">nic</label>
                                            <input id="zip" disabled type="text" value="<?php echo$_SESSION['nic'];?>" class="form-control">
                                        </div>
                                    </div>
                                  <?php
                                  if (isset($_SESSION['landloard']))
                                  {
	                               ?>
                                       <input type="hidden" name="usertype" value="L"/>
                                   <?php
                                   }else{
                                   ?>
                                       <input type="hidden" name="usertype"value="T"/>
                                    <?php
                                    }
                                    ?>


                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                                    </div>
                                </div>
                            </form>
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
             <h5>Price per sq.ft</h5>
            <ul class="list-unstyled">
              <li><a href="category.php">Below 100 ft with 1 Bedroom</a></li>
              <li><a href="category.php">Among 100ft - 200ft with 2 Bedroom</a></li>
              <li><a href="category.php">More than 200 ft with 4 Bedrooms</a></li>
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
<?php
if(isset($_GET["update"]))
 {?>
	   <script>
        Swal.fire({
     title: 'Success',
    text: 'Update successfully',
    icon: 'success',
     confirmButtonText: 'Ok'
})  </script>
   <?php
   
   }
   
   ?>
 
   <?php
   if(isset($_GET['successpay']))
{
?>
    <script>
      Swal.fire({
            title: "Success",
            text: "Paymenmt Successfully",
            icon: 'success',
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