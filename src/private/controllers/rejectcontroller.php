<?php 
include  "../config/config.php";
$id = $_REQUEST["id"];
// updating status to approved for particular user
User::update_all(array('set' => 'status = "approved" where id='.$id.''));

header("Location:../Views/admindashboard.php");
?>