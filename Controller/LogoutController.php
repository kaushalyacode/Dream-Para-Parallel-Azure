<?php
   include'../Model/Dao.php';
   if(isset($_GET['Logout'])){
   $data=new Dao();
   $data->deleteRecentlyView();
   
   session_start();
   session_unset();
   session_destroy();
   header("Location: ../index.php");

}

?>