<?php


include'../Model/Dao.php';
$data=new Dao();

if($_SESSION['password']==$_POST['oldpassword'])
{
if($_POST["usertype"]=="t"){
   $tenent=new Tenent();
   $tenent->setPassword($_POST['password']);
   $data ->updateTenantPassword($tenent);
    header("Location: ../customer-account.php?tenentup=ok");
  
}else{
  $landloard=new LandLoard();
  $landloard->setPassword($_POST['password']);
  $data ->updateLandLoardPassword($landloard);  
   header("Location: ../customer-account.php?landloardup=ok");
}
}else{

      header("Location: ../customer-account.php?oldpasswordf=no");

}
