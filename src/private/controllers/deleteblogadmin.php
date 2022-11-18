<?php 
session_start();
include  "../config/config.php";
// getting ids using form
$idblog = $_REQUEST["id"];
 $username = $_SESSION["uname1"];
 $usertitle = $_SESSION["title1"];
  $usercontent = $_SESSION["content1"];
 $category = $_SESSION["blog1"];

$del = Blog ::delete_all(array('conditions' => array('id' => $idblog)));
// deleting elements from array using delete all function 

header('Location:../Views/admindashboard.php');

?>