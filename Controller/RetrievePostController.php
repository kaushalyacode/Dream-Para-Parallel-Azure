<?php
  
    include'../Model/Dao.php';


    $data=new Dao();
    $landloard=new LandLoard();
    $posts=new Post();
     $file = $_FILES["image"]["name"];
     $data->insertPost($posts,$file)

?>