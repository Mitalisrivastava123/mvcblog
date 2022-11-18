<?php
session_start();
include "../config/config.php";
// taking values through post
 $email = $_POST["email"];
 $password = $_POST["password"];
  $id =  $_SESSION["id"];
$user1 = User::find(array('email' => $email, 'password' => $password,'status' =>"approved"));

// finding user id  and name
$_SESSION["id"]=$user1->id;
$_SESSION["name"]=$user1->name;

foreach($user1 as $u)
{
    $email1 =$user1->email;
    $password1 =  $user1->password;
   $status =  $user1->status;
}
// condition checking if user is valid the user can move to dashboard otherwise it will not be able to login
if($user1)
{
    echo "<script>alert('your request has been approved ');
    window.location.href='../Views/userdashboard.php';
    </script>";
    
}
else 
{
    echo "<script>
    alert('your request is in process kindly wait or Your email  and password not match');
    window.location.href='../Views/userloginform.php';
   </script>"; 
}


  
?>