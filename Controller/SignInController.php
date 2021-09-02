<?php
  
   require'../Model/Dao.php';
   $dat=new Dao();
   if($dat->RetriveTenentEmail($_POST['email'])==1 && $_POST['usertype'] == "T")
   {
     //duplicate tenant
     header("Location: ../register.php?temail= thave");
   }elseif($dat->RetriveLandloardEmail($_POST['email'])==2 &&  $_POST['usertype'] != "T" )
   {
      //duplicate landlord   
      header("Location: ../register.php?lemail= lhave");
   }
   else {

   if ($_POST['usertype'] == "T") {
    
      if (strlen($_POST['nic'])==10)
   { 
     $tenent=new Tenent();

     $tenent->setNic($_POST['nic']);
     $tenent-> setFname($_POST['fname']);
     $tenent->setLname($_POST['lname']);
     $tenent-> setEmail($_POST['email']);
     $tenent->setPassword($_POST['password']);
     $tenent->setUsername($_POST['username']); 
     $tenent-> setTel($_POST['tel']);
     $tenent-> setMobile($_POST['mobile']);

       if($_POST['password']==$_POST['repassword'])
       {
            if($dat->insertTenent($tenent)==1){
            header("Location: ../register.php?signin=success");
            }else{
                header("Location: ../register.php?signinfailf=ok");
       
            }
       }
       else{
            header("Location: ../register.php?signinfail=ok");
       }
   }else{

header("Location: ../register.php?nic=fail");
   }


}else {
	if (strlen($_POST['nic'])==10)
   { 
     $landloard=new Landloard();

     $landloard->setNic($_POST['nic']);
     $landloard-> setFname($_POST['fname']);
     $landloard->setLname($_POST['lname']);
     $landloard-> setEmail($_POST['email']);
     $landloard->setPassword($_POST['password']);
     $landloard->setUsername($_POST['username']); 
     $landloard-> setTel($_POST['tel']);
     $landloard-> setMobile($_POST['mobile']);

       if($_POST['password']==$_POST['repassword'])
       {
             if($dat->insertLandloard($landloard)==2){
             header("Location: ../register.php?signin=success");
             }else{
                 
                 header("Location: ../register.php?signinfailf=ok");
       
                 
             }
       }
       else{
         header("Location: ../register.php?signinfail=ok");
       }
   }else{

    header("Location: ../register.php?nic=fail");
   }
   }
}