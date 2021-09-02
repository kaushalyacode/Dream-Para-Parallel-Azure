<?php

include'../Model/Dao.php';


$data=new Dao();
$wishlist=new WishList();



$wishlist->setUserId($_SESSION['tenentid']);
$wishlist->setPostId($_GET['postid']);


$result = $data->insertWishList($wishlist);
if($result == 0)
{
   header("Location: ../detail.php?alwishlist=ok");
}
elseif($result == 2)
{
   if(isset($_GET['from'])){
   header("Location: ../category.php?wishlist=ok&pagenumber=".$_GET['from']);
   
   }else{
   header("Location: ../detail.php?wishlist=ok");
   }
}elseif($result == 3)
{
   header("Location: ../detail.php?wishlistf=ok");

}


