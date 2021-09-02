<?php
  
    include'../Model/Dao.php';

    
    $data=new Dao();
    $landloard=new LandLoard();
    $posts=new Post();

     $file = $_FILES["image"]["name"];
     $fileOne = $_FILES["image1"]["name"];
    $fileTwo = $_FILES["image2"]["name"];

    
    $posts->setDistance($_POST['distance']);
    $posts->setRtype($_POST['rtype']);
    $posts->setCity($_POST['city']);
    $posts->setProvince($_POST['province']);
    $posts->setPrice($_POST['price']);
    $posts->setDescription($_POST['description']);
  
    $result =$data->insertPost($posts,$fileOne,$file,$fileTwo);
    if($result == 2)
    {
    
  header("Location: ../customer-post-add.php?post=ok");
    }elseif($result == 3){
    
  header("Location: ../customer-post-add.php?nopost=ok");
    }


?>
