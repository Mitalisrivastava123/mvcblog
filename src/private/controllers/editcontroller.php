<?php
session_start();
include  "../config/config.php";
// fetching id in order to edit blog 
$id = $_REQUEST["id"];

$blog1 = Blog ::find('all', array('conditions' => 'id =  '.$id.''));
foreach($blog1 as $b1)
{
    $_SESSION["id1"] = $b1->id;
    $_SESSION["blog1"] = $b1->category;
    $_SESSION["uname1"] =  $b1->uname;
   $_SESSION["title1"] = $b1->title;
   $_SESSION["content1"] = $b1->content;
  
}
// getting all data from an array
header("Location:../Views/updateform.php");



?>