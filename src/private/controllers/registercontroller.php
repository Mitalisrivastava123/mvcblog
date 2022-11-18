<?php
include  "../config/config.php";
// taking values from form 
$name= $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
// checking if form fields are empty then it will remain in registration page
if($name == "" || $email == "" ||  $password == "" || $cpassword == "")
{
    echo "<script>window.location.href='../Views/userregisterform.php'</script>";
}
// matching password and confirm password condition checking 
else
{
    if($password == $cpassword)
    {
$user = User::create(array('name' => $name, 'email' => $email,'password' => $password ,'status'=>"requested"));
echo "<script>window.location.href='../Views/userloginform.php';</script>";
}
else {
    echo "<script>alert('Your password not match');window.location.href='../Views/userregisterform.php'</script>";
}
}
?>