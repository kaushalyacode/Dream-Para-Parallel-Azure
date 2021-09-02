<?php
session_start();
 if(isset($_SESSION['landloard'])||isset($_SESSION['tenent']) || isset($_SESSION['tenent']))
{

if(isset($_POST['image'])||isset($_POST['description'])
|| isset($_POST['rtype']) || isset($_POST['price']) 
|| isset($_POST['city']) || isset($_POST['distance'])
|| isset($_POST['province']) || 
isset($_POST['userid']) || isset($_POST['pictureid']))
{
         $_SESSION['image']=$_POST['image'];
      
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Group 12 : e-commerce template</title>
    
         <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                <li aria-current="page" class="breadcrumb-item active">Property cart</li>
                            </ol>
                        </nav>
                    </div>
                    <?php
                    if(isset($_GET['delete']))
                    {
?>                    
                                            <script>
                                            Swal.fire({
                                                  position: 'center',
                                                  icon: 'success',
                                                  title: 'Deletion successfull',
                                                  showConfirmButton: false,
                                                  timer: 3000
                                                })
                                        
                                            </script>

<?php

}
                    ?>
                    <div id="basket" class="col-lg-9">
                        <div class="box">
                            <form method="post" action="checkout1.php">
                                <h1>Property cart</h1>
                                <p class="text-muted invisible">You currently have 3 item(s) in your cart.</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        
                                            <tr>
                                                <th colspan="2">Property</th>
                                                <th>Property Price</th>
                                                <th>Tax</th>
                                                <th>Discount</th>
                                                <th colspan="2">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if(!isset($_GET['delete']))
                                        {
                                        ?>

                                        <tr>
                                            <script>
                                            function popView(){
                                            Swal.fire({
                                              title: 'Property Information',
                                              text: 'Description : <?php echo $_SESSION['description']." location : ".$_SESSION['distance']." from ".$_SESSION['city']."Owned by" .$_SESSION['full'];?>.',
                                              imageUrl: "./uploads/<?php echo $_SESSION['image']; ?>",
                                              imageWidth: 400,
                                              imageHeight: 200,
                                              imageAlt: 'Custom image',
                                            })
}                                           
                                            </script>
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header" style="background-color:#809fff;">
                                            <h5 class="modal-title" id="exampleModalLabel"><b>Property Information</b></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                           <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">  
                                                    <div class="col-md-5">
                                                      <img src="./uploads/<?php echo $_SESSION['image']; ?>" alt="" class="img-fluid h-100">    
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="row border-bottom">
                                                          <div class="col-md-4">
                                                           <b>Description : </b>
                                                          </div>
                                                          <div class="col-md-8">
                                                          <?php echo $_SESSION['description']; ?>
                                                          </div>
                                                        </div>
                                                         <div class="row border-bottom">
                                                          <div class="col-md-4">
                                                            <b>Property Type : </b>
                                                          </div>
                                                          <div class="col-md-8">
                                                            <?php echo $_SESSION['rtype']; ?>
                                                          </div>
                                                        </div>
                                                         <div class="row border-bottom">
                                                          <div class="col-md-4">
                                                            <b>City : </b>
                                                          </div>
                                                          <div class="col-md-8">
                                                            <?php echo $_SESSION['city']; ?>
                                                          </div>
                                                        </div>
                                                         <div class="row border-bottom">
                                                          <div class="col-md-4">
                                                             <b>Distance to City : </b>
                                                          </div>
                                                          <div class="col-md-8">
                                                            <?php echo $_SESSION['distance']; ?>
                                                          </div>
                                                        </div>
                                                         <div class="row">
                                                          <div class="col-md-4">
                                                           <b>Original Price</b>
                                                          </div>
                                                          <div class="col-md-8">
                                                           <?php echo $_SESSION['price']; ?>
                                                          </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" style="background-color:#809fff;" data-dismiss="modal">Close</button>
                                          
                                          </div>
                                                <td><a href="#"><img src="./uploads/<?php echo $_SESSION['image']; ?>" alt="White Blouse Armani"></a></td>
                                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"> <?php echo $_SESSION['rtype']."(".$_SESSION['city'].")"; ?></button></td>
                                                <td>
                                                   <?php echo $_SESSION['price']."/="; ?>
                                                </td>
                                                <td>     <?php
                                                
                                                $tax = ($_SESSION['price']*2.5)/100;
                                                echo $tax."/="; ?></td>
                                                <td>    
                                                
                                                <?php 
                                                $discount = ($_SESSION['price']*10)/100;
                                                echo $discount."/="; ?></td>
                                                <td>   
                                          
                                                <?php
                                                
                                                      $total =$tax+$discount+$_SESSION['price'];
                                                      echo $total."/="; ?></td>
                                                <td><a href="basket.php?delete=ok"><i class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th colspan="2"><?php  echo $total."/=" ?></th>
                                            </tr>
                                        </tfoot>
                                        <?php
                                        }
                                        ?>
                                        </table>
                                </div>
                                <!-- /.table-responsive-->
                                <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                                    <div class="left"><a href="detail.php" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                                    <div class="right">
                                        <button class="btn btn-outline-secondary invisible"><i class="fa fa-refresh"></i> Update cart</button>
                                        <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-->
                        <div class="row same-height-row">
                            <div class="col-lg-3 col-md-6">
                                <div class="box same-height">
                                    <h3>You may also like these products</h3>
                                </div>
                            </div>
                              <?php
                                $conn=mysqli_connect("localhost","root","","dreamparadise");
                              
                                       $sql="select * from Post where isActive='1' order by id desc limit 3;";
                
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
                                            <div class="front"><a href="detail.php"><img src="./uploads/<?php echo $y['image']; ?>" alt="" class="img-fluid"></a></div>
                                            <div class="back"><a href="detail.php"><img src="./uploads/<?php echo $y['image']; ?>" alt="" class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="detail.php" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                                    <div class="text">
                                        <h3>Distance to city :<?php echo $y['distance']; ?>km to the <?php echo $y['city']; ?></h3>
                                        <p class="price"><?php echo$y['price']."/=";?></p>
                                         <form method="post" action="detail.php">
                                                 <input type="hidden" value="<?php echo $y['image'];?>" name="image"/>
                                                    <input type="hidden" value="<?php echo $rowx['secImage'];?>" name="secImage"/>
                                                     <input type="hidden" value="<?php echo $rowx['terImage'];?>" name="terImage"/>
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
                                </div>
                                <!-- /.product-->
                            </div>
                         <?php
                         }
                         }
                         ?>
                        </div>
                    </div>
                    <!-- /.col-lg-9-->
                    <div class="col-lg-3">
                        <div id="order-summary" class="box">
                            <div class="box-header">
                                <h4 class="mb-0">Property summary</h4>
                            </div>
                            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Order subtotal</td>
                                            <th>$446.00</th>
                                        </tr>
                                        <tr>
                                            <td>Shipping and handling</td>
                                            <th>$10.00</th>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <th>$0.00</th>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <th>$456.00</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--div class="box">
                            <div class="box-header">
                                <h4 class="mb-0">Coupon code</h4>
                            </div>
                            <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control"><span class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button>
                                    </span>
                                </div>
                                <!-- /input-group-->
                            </form>
                        </div>
                    </div>
                    <!-- /.col-md-3-->
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
      </div
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
  if(isset($_GET["notusertenent"])){?>
   <script>
     Swal.fire({
  title: 'Try after Login as Tenent',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
   </script>

  
<?php  }
  ?>
   <?php
  if(isset($_GET["notuserll"])){?>
   <script>
     Swal.fire({
  title: 'Try after Login as LandLoard',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
   </script>

  
<?php  }
  ?>
</html>
<?php


}else
{
  header("Location: ./index.php?notuser=not");
}
?>