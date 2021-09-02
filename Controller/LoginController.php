<?php

include'../Model/Dao.php';


$data=new Dao();
$landloard=new LandLoard();
$tenent=new Tenent();


$landloard->setEmail($_POST['email']);
$landloard->setPassword($_POST['userpassword']);
$tenent->setEmail($_POST['email']);
$tenent->setPassword($_POST['userpassword']);

if(isset($_POST['register']))
{
    $_SESSION['register']=$_POST['register'];
    
}else{
    $_SESSION['register']="no";
}
$landLoardData = $data->LoginLandloard($landloard);
$tenentData = $data->LoginTenent($tenent);

if($landLoardData ==1){

  header("Location: ../customer-post-add.php?landloardlog=ok");

}elseif($tenentData == 1) {

 header("Location: ../index.php?tenentlog=ok");

}elseif($landLoardData == 2 || $tenentData ==2 )
{
 if($_SESSION['register']=="register")
  {
  unset($_SESSION["register"]);
  header("Location: ../register.php?login=fail&username=ok");
  }else{
  
  unset($_SESSION["register"]);
   header("Location: ../index.php?login=fail&username=ok");
  }
}else {
 if($_SESSION['register']=="register")
 {
    unset($_SESSION["register"]);
    header("Location: ../register.php?login=fail&usernamepassword=wrong"); 
 
  }else{
  
  unset($_SESSION["register"]);
  header("Location: ../index.php?login=fail&usernamepassword=wrong"); 
  }
}
