<?php
 require'../Model/Tenent.php';
 require'../Model/Landloard.php';
  require'../Model/Post.php';
    require'../Model/WishList.php';


 session_start();

class Dao{ 
  private $conn;
  private $sql;
  private $result;
  private $row;
 
 
   public function __construct()
   {  $this->conn=mysqli_connect("localhost","root","","dreamparadise");
                       if($this->conn)
                       {
                            echo"connected";
                       }else
                       {
                            echo"not connected";     
                       }     

   }
  

    
   public function LoginLandloard(LandLoard $landloard)
   {
                  $this->sql="select * from LandLoard where email='".$landloard->getEmail()."';";
                  $this->result=mysqli_query($this->conn,$this->sql);
                 
           
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {
                             if($landloard->getPassword() == $this->row['password'])
                             {
                                    $_SESSION['landloard']= $this->row['username'];
                                    $_SESSION['landloardid']= $this->row['id'];
                                    $_SESSION['fname']= $this->row['fname'];
                                     $_SESSION['lname']= $this->row['lname'];
                                     $_SESSION['email']= $this->row['email'];
                                     $_SESSION['nic']= $this->row['nic'];
                                     $_SESSION['tel']= $this->row['tel'];
                                     $_SESSION['mobile']= $this->row['mobile'];

                                  return 1;
                              }
                              return 2;
                                                          

                  }
                      return 0;                          
    }
    public function LoginTenent(Tenent $tenent)
   {
                  $this->sql="select * from Tenent  where email='".$tenent->getEmail()."' ;";
                
                  $this->result=mysqli_query($this->conn,$this->sql);
             
                  while($this->row=mysqli_fetch_assoc($this->result))
                  { 
                             if($tenent->getPassword() == $this->row['password'])
                             {
                             $_SESSION['tpassword']= $this->row['password'];
                             $_SESSION['tenent']= $this->row['username'];
                             $_SESSION['tenentid']= $this->row['id'];
                             $_SESSION['fname']= $this->row['fname'];
                             $_SESSION['lname']= $this->row['lname'];
                             $_SESSION['email']= $this->row['email'];
                             $_SESSION['nic']= $this->row['nic'];
                             $_SESSION['tel']= $this->row['tel'];
                             $_SESSION['mobile']= $this->row['mobile'];

                                  return 1;
                              }
                          
                              return 2;
                                                          

                  }
                   
                      return 0;                          
    }
     public function insertTenent(Tenent $tenent)
   {
          $this->sql="insert into Tenent(nic,fname,lname,email,password,username,tel,mobile) values('".$tenent->getNic()."','".$tenent->getFname()."','".$tenent->getLname()."','".$tenent->getEmail()."','".$tenent->getPassword()."','".$tenent->getUsername()."','".$tenent->getTel()."','".$tenent->getMobile()."');";
         
       
            echo$this->sql;
            if(mysqli_query($this->conn, $this->sql)){ 
            $_SESSION['tenent']= $tenent->getUsername();
            return 1;
            }
           return 0;
            }

             public function insertLandloard(LandLoard $landloard)
   {
            $this->sql="insert into LandLoard(nic,fname,lname,email,password,username,tel,mobile) values('".$landloard->getNic()."','".$landloard->getFname()."','".$landloard->getLname()."','".$landloard->getEmail()."','".$landloard->getPassword()."','".$landloard->getUsername()."','".$landloard->getTel()."','".$landloard->getMobile()."');";
             echo$this->sql;
       
            if(mysqli_query($this->conn, $this->sql)){  
            $_SESSION['landloard']= $landloard->getUsername();
            return 2;
                
            }
           return 3;
            }
              public function RetriveTenentEmail($email)
   {
                  $this->sql="select * from Tenent  where email='".$email."' ;";
                
                  $this->result=mysqli_query($this->conn,$this->sql);
             
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {                                                          
                    return 1;
                  }                   
                      return 0;                          
    }
              public function RetriveLandloardEmail($email)
   {
                  $this->sql="select * from LandLoard  where email='".$email."' ;";
                
                  $this->result=mysqli_query($this->conn,$this->sql);
             
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {                                                          
                    return 2;
                  }                   
                      return 3;                          
    }
    public function updateTenantPassword(Tenent $tenent)
   {
                  $this->sql="update Tenent set password ='".$tenent->getPassword()."'where email ='".$_SESSION['email']."';";                  
                  mysqli_query($this->conn,$this->sql);
                  

                          
    }
        public function updateLandLoardPassword(LandLoard $landloard)
   {
                  $this->sql="update LandLoard set password ='".$landloard->getPassword()."'where email ='".$_SESSION['email']."';";                  
                  mysqli_query($this->conn,$this->sql);
                                           
    }


      public function updateTenant(Tenent $tenent)
   {
                  echo'8';
     
                  $this->sql="update Tenent set fname ='".$tenent->getFname()."',lname='".$tenent->getLname()."',mobile='".$tenent->getMobile()."',tel='".$tenent->getTel()."' where email ='".$_SESSION['email']."';";                  
                  echo'9';
     
                  mysqli_query($this->conn,$this->sql);
                  echo'10';
     
                  

                          
    }
        public function updateLandLoard(LandLoard $landloard)
   {
           
     
                  $this->sql="update LandLoard set fname ='".$landloard->getFname()."',lname='".$landloard->getLname()."',mobile='".$landloard->getMobile()."',tel='".$landloard->getTel()."' where email ='".$_SESSION['email']."';";                  
           
     
                  mysqli_query($this->conn,$this->sql);
             
     
                                           
    }
     

     public function insertPost(Post $post,$image,$imageO,$imageT)
   {
            $this->sql="insert into post(image,userid,distance,rtype,city,province,price,description,secImage,terImage) values('".$image."','".$_SESSION["landloardid"]."','".$post->getDistance()."','".$post->getRtype()."','".$post->getCity()."','".$post->getProvince()."','".$post->getPrice()."','".$post->getDescription()."','".$imageO."','".$imageT."');";
            $uploads_dir = '../uploads';
            $upload_prevew1='../previewOne';
            $upload_prevew2='../previewTwo';

            if(mysqli_query($this->conn, $this->sql)){  
            move_uploaded_file($_FILES['image']['tmp_name'],"$uploads_dir/$image");
            move_uploaded_file($_FILES['image1']['tmp_name'],"$upload_prevew1/$imageO");
            move_uploaded_file($_FILES['image2']['tmp_name'],"$upload_prevew2/$imageT");
            return 2;
                
            }
           return 3;
            }

             public function RetrivePosts($userid)
   {
                  $this->sql="select * from post  where userid='".$userid."' ;";
                
                  $this->result=mysqli_query($this->conn,$this->sql);
             
                  while($this->row=mysqli_fetch_array($this->result))
                  {                                                          
                    $data[]=$this->row;
                  }     
                  return $data;

                                               
    }
      public function getHomePagePost($userid)
      {
                         $sql="select * from post  where userid='".$userid."' ;";
               
                         $this->result=mysqli_query($this->conn,$this->sql);
             
                         while($this->row=mysqli_fetch_array($this->result))
                          {                                                          
                                   $data[]=$this->row;
                          }    
                                              return $data;
      }
          public function insertWishList(WishList $wishlist)
   {
            $this->sql="insert into WishList(userid,postid,isActive) values('".$wishlist->getUserId()."','".$wishlist->getPostId()."','1');";
       echo $this->sql;
            if(mysqli_query($this->conn, $this->sql)){  
            $_SESSION['wishlistcount']++;
                return 2;                
            }
            return 3;
            }

   public function RetriveWishlists()
   {
                  $userid =$_SESSION["userid"];
                  $this->sql="select * from WishList  where userid='".$userid."' ;";
                
                  $this->result=mysqli_query($this->conn,$this->sql);
             
                  while($this->row=mysqli_fetch_assoc($this->result))
                  {                                                          
                    $data = $this->row;
                  }                   
                  return $data;                          
    }

      public function deleteRecentlyView()
   {
          $this->sql="delete from recentView where userid='".$_SESSION['tenentid']."';";  
       
           mysqli_query($this->conn, $this->sql);
}

          public function updateWishList(WishList $wishlist)
   {
           
     
                  $this->sql="update Wishlist set isActive ='0' where postid ='".$wishlist->getPostId()."';";                  
           
     
                  mysqli_query($this->conn,$this->sql);
             
     
                                           
    }
           public function updatePost(Post $post)
   {
           
     
                  $this->sql="update Post set isActive ='0',rtime='".date("Y-m-d")."',reservedUser='".$_SESSION['tenentid']."' where id ='".$post->getId()."';";                  
           
         echo $this->sql;
                  mysqli_query($this->conn,$this->sql);
             
     
                                           
    }
          public function deleteWishListItem($postid,$userid)
   {
          $this->sql="delete from Wishlist where userid='".$userid."' and postid='".$postid."';";  
       
           mysqli_query($this->conn, $this->sql);
}



}
