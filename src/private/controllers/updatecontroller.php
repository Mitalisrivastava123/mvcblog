<?php
session_start();
include  "../config/config.php";

// fetching id using session 
$idblog  = $_SESSION["id1"];
$category = $_POST["category"];
$usertitle = $_POST["title"];
 $usercontent = $_POST["content"];
 $imageuser1 = $_SESSION["image1"];
// updating image
 if(isset($_POST["submit1"]))
 {
   
  $target_dir = "../../public/uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 if ($check !== false) {

   echo "File is an image - " . $check["mime"] . ".";
   $uploadOk = 1;
 } else {
   echo "File is not an image.";
   $uploadOk = 0;
 }
 if ($uploadOk == 0) {
   echo "Sorry, your file was not uploaded.";
   // if everything is ok, try to upload file
 } else {
   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
     // echo "hello";
     echo $image = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
   } else {
     echo "Sorry, there was an error uploading your file.";
   }
 }
// finding data by id 
 $user1 = Blog::find_by_id($idblog);
 $user1->category=$category;
 $user1->title= $usertitle;
 $user1->content = $usercontent;
// if image is empty then it will take old image otherwise it will take new image 
 if(empty($image))
 {
    $user1->image =  $imageuser1;
 }
 else
 {
    $user1->image = $image;
 }
 $user1->save();
 }
 echo "<script>
 window.location.href='../Views/userdashboard.php';
 </script>";
 
?>