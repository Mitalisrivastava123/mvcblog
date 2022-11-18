<?php 
include  "../config/config.php";
$id = $_REQUEST["id"];

User::update_all(array('set' => 'status = "requested" where id='.$id.''));

header("Location:../Views/admindashboard.php");
// updating status  to requested using update_all
?>