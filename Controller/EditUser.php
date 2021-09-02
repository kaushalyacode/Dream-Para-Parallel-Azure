<?php

include'../Model/Dao.php';


$data=new Dao();
$landloard=new LandLoard();
$tenent=new Tenent();


$landloard->setMobile($_POST['mobile']);
$landloard->setTel($_POST['tel']);
$landloard->setFname($_POST['fname']);
$landloard->setLname($_POST['lname']);

$tenent->setMobile($_POST['mobile']);
$tenent->setTel($_POST['tel']);
$tenent->setFname($_POST['fname']);
$tenent->setLname($_POST['lname']);

if($_POST['usertype'] == "T"){
 
     echo'1';
     $data-> updateTenant($tenent);
     echo'2';
     
     header("Location: ../customer-account.php?update=ok");
     echo'3';
     
}
elseif ($_POST['usertype'] == "L") {
    echo'4';
     
    $data-> updateLandLoard($landloard);
    echo'5';
     
    header("Location: ../customer-account.php?update=ok");
    echo'6';
     
}else{
echo'*';
     
}
