<?php
     session_start();
     if (isset($_SESSION['tenentid'])) {
	# code...

     $conn=mysqli_connect("localhost","root","","dreamparadise");
                        
     
        $sql="select COUNT(id) as h from Wishlist  where userid='".$_SESSION['tenentid']."' and isActive='1' ;";  
     
                  $result=mysqli_query($conn,$sql);
                  if ($result) {
                  while($row=mysqli_fetch_assoc($result))
                  { 
                  $_SESSION['wishlistcount'] = $row['h'];  
                
            }
                      
                  }else
                  {
                      $_SESSION['wishlistcount'] = 0;  
                  }
            }


     ?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home-Dreamparadise.one</title>
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <?php
  if(isset($_GET["notuser"])){?>
   <script>
     Swal.fire({
  title: 'Try after Login',
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
if(isset($_GET["landloardlog"]) || isset($_GET["tenentlog"]))
 {?>
	   <script>
        Swal.fire({
     title: 'Success',
    text: 'Login success',
    icon: 'success',
     confirmButtonText: 'Ok'
})  </script>
   <?php
   
   }
   
   ?>
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

                            if(isset( $_SESSION['landloard']) || isset( $_SESSION['tenent']) )
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
                <h5 class="modal-title">Login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="./Controller/LoginController.php" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="email" placeholder="email" maxlength="100" required name="email"  class="form-control" required>
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
        <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/logo.png" alt="Group 12 logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Group 12 logo" class="d-inline-block d-md-none"><span class="sr-only">Group 12 - go to homepage</span></a>
          <div class=" navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="invisible btn  btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.php" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">RENT<b class="caret"></b></a>
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
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="img/main-slider1.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/main-slider2.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/main-slider3.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/main-slider4.jpg" alt="" class="img-fluid"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3>Service is the best gift of attention</h3>
                  <p class="mb-0">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box  d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3>Great Business, Great Friendship</h3>
                  <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box  d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3>100% satisfaction guaranteed</h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Week of Specials</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">
              
            <?php
                        $conn=mysqli_connect("localhost","root","","dreamparadise");
                       if($conn)
                       {
                            //echo"connected";
                       }else
                       {
                            //echo"not connected";     
                       }     

                               $sql="select * from Post   order by id desc limit 9 ;";
                
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
             
  
  
  <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a ><img  src="./uploads/<?php echo $y['image']; ?>" alt="" class="img-fluid"></a></div>
                      <div class="back"><a ><img  src="./uploads/<?php echo $y['image']; ?>" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a  class="invisible"><img  src="./uploads/<?php echo $y['image']; ?>" alt="" class="img-fluid"></a>
                  <div class="text">
        
                    <p class="price"> 
                    <p class="price"> 
                      <b><del>Rs. <?php echo $y['price'].""; ?></del></b><br>
                       <b><i class="fa fa-angle-double-down" style="color:green;" aria-hidden="true"></i>
</b><br>
                        <div class="well"><center><b>Rs. <?php echo $y['price']-(($y['price']*10)/100).""; ?></b></center></div>
                    </p>
                     
                     <p class="price" style="font-size:small;"> 
                      Distance to city :<?php echo $y['distance']; ?>km to the <?php echo $y['city']; ?>
                    </p>
                     <p class="price" style="font-size:small;"> 
                      <form method="post" action="detail.php">
                          <input type="hidden" value="<?php echo $y['secImage'];?>" name="secImage"/>
                          <input type="hidden" value="<?php echo $y['terImage'];?>" name="terImage"/>
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
                            <center><h5><span class="badge badge-pill badge-danger">Reserved</span></h5></center>

                           <?php
                           }else
                           {
                           ?>
                            <center><button type="submit" class="btn btn-info">View Info</button></center>

                           <?php
                           }
                           ?>
                        </form>
                    
                     </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new invisible">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
               
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
                            
                             <?php
                              }}else{
                              ?>

                             <center><h2 class="text-danger">No Post</h2></center>

                              <?php
                              }
     ?>         <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        <div class="container">
          <div class="col-md-12">
            <div class="box slideshow">
              <h3>The right choice for you</h3>
              <p class="lead">We are devoted to assisting you with respect and fulfillment</p>
              <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="img/getinspired1.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="img/getinspired2.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="img/getinspired3.jpg" alt="Get inspired" class="img-fluid"></a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***
        _________________________________________________________
        -->
        <div class="box text-center">
          <div class="container">
            <div class="col-md-12">
              <h3 class="text-uppercase">From our blog</h3>
              <p class="lead mb-0">We give wings to your dreams <a href="blog.php">Check our blog!</a></p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-11">
            <div id="blog-homepage" class="row">
              <div class="col-sm-6">
                <div class="post">
                   <center><p><img src="img/blog-avatar2.jpg" alt="" class="img-fluid rounded-circle" ></p></center>
                  <p class="author-category">By <a href="https://www.facebook.com/hiranwindika.munasighe">Hiran Windika</a> from <a href="https://www.facebook.com/Xcodeinnovations-113379733780348">Xcodeinnovations</a></p>
                  <hr>
				  
                  <p style="font-family: 'Salsa', cursive;" class="intro" >Finding an apartment urgently is nearly impossible, but Dream Paradise is making it possible! They are very polite, super responsive, and professional. I sent an apartment inquiry and  Ms. Dushani was contacted me the very next day! Dream Paradise representative Windika was really helpful and they have a great team, if someone is not available other colleagues will respond to you immediately. As I could not imagine They have an amazing price range that the Lower to highest. Very smooth and professional handover process. Overall a great experience, Thank you Dream Paradise. Highly recommended!“</p>
                  <p class="invisible read-more"><a href="post.php" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="post">
                  <p><img src="img/blog-avatar.jpg" alt="" class="img-fluid rounded-circle"></p>
                  <p class="author-category">By <a href="#">Mike S.Zillow</a> in <a href="">Offers review in Lakewood, CO</a></p>
                  <hr>
                  <p style="font-family: 'Salsa', cursive;" class="intro">“The offers were very fair, and the experience overall was excellent When I ask about the houses Mr.Nipun gives me a super explanation about houses and It was very helpful to choose my dream house. I was really pleased with Mr. Ravin's friendly service that made finding a good house quick and easy - even during this complicated pandemic situation. Mr.Kaushalya and the team did an amazing job and I highly appreciate the Dream Paradise team. I was able to rent a well-furnished house, with minimal worries,I would recommend anyone wanting a quick, fair sale to consider Dream Paradise.”</p>
                  <p class="invisible read-more"><a href="post.php" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    
         
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
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
              <li><a href="category.php">Renting Houses</a></li>
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
            <h4 class="mb-2">Stay in touch</h4>
             <p class="social"><a href="https://www.facebook.com/Dream-Paradise-107019988369302" class="facebook external"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/hiran_windika" class="twitter external"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/dreamparadise____/?utm_medium=copy_link" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="https://mail.google.com/mail/u/0/?tab=cm#inbox?compose=new" class="email external"><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    
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
   if (isset($_GET["usernamepassword"])) {
     ?>
     <script>
     Swal.fire({
     title: 'Login Failed',
    text: 'User name and Password Both wrong',
    icon: 'error',
     confirmButtonText: 'Try again'
}) 
     </script>

     <?php
     }elseif (isset($_GET["username"])) {

    ?>
     <script>
     Swal.fire({
     title: 'Login Failed',
    text: 'Password is wrong',
    icon: 'error',
     confirmButtonText: 'Try again'
})
     </script>
    <?php }?>
</html>