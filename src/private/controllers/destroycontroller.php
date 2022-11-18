<?php
session_start();
include  "../config/config.php";
// destroying session using session destroy
if(isset($_POST["logout"]))
{
session_unset();
session_destroy();
}
header("Location:../Views/userloginform.php");
?>