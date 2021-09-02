<?php

include'../Model/Dao.php';


$data=new Dao();
$post=new Post();
$wishlist=new WishList();


$post->setId($_GET['pid']);
$wishlist->setPostId($_GET['pid']);

 $data->updateWishList($wishlist);
 $data->updatePost($post);
          $_SESSION['wishlistcount']--;
    header("Location: ../customer-orders.php?successpay=ok");
