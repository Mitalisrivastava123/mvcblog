<?php
session_start();
include  "../config/config.php";

// fetching data from form 
$category = $_POST["category"];
$title = $_POST["title"];
$content = $_POST["content"];
$id1 =  $_SESSION["id"];
$user1 = User::find_by_id($id1);


$uname =  $user1->name;
$target_dir = "../../public/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
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
    $image = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " ";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  $blog = Blog ::create(array('category' => $category, 'title' => $title,'content' => $content ,'image'=>$image,'uname' =>$uname ,'userid' =>$id1));
// inserting data into array
  echo "<script>window.location.href='../Views/userdashboard.php'</script>";

?>