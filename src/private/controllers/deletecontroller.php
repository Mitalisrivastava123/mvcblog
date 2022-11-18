<?php 
session_start();
include  "../config/config.php";
// getting ids of blog 
$idblog2 = $_REQUEST["id"];
 $username = $_SESSION["uname1"];
 $usertitle = $_SESSION["title1"];
  $usercontent = $_SESSION["content1"];
 $category = $_SESSION["blog1"];

$del = Blog ::delete_all(array('conditions' => array('id' => $idblog2)));
// using delete all function to delete elements of array

header("Location:../Views/userdashboard.php");
?>