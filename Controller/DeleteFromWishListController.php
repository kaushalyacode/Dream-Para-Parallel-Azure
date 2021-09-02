<?php

include'../Model/Dao.php';


$data=new Dao();
 $data->deleteWishListItem($_GET['postid'],$_GET['userid']);
 $_SESSION['wishlistcount']--;
 header("Location: ../customer-wishlist.php?deleted=ok");
