<?php
session_start();
include  "../config/config.php";
// fetching id 
$id = $_REQUEST["id"];
$blog1 = Blog ::find('all', array('conditions' => 'id =  '.$id.''));
foreach($blog1 as $b1)
{
    $_SESSION["id1"] = $b1->id;
  $_SESSION["blog1"] = $b1->category;
    $_SESSION["uname1"] =  $b1->uname;
   $_SESSION["title1"] = $b1->title;
   $_SESSION["content1"] = $b1->content;
  $_SESSION["image1"] = $b1->image;
  
}
 $ids =  $_SESSION["id1"];
$idblogs = $_SESSION["blog1"];
 $idunames = $_SESSION["uname1"];
 $idtitles = $_SESSION["title1"];
  $idcontents = $_SESSION["content1"];
  $image1 = $_SESSION["image1"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-light nav1" >
  <a class="navbar-brand text-white" href="../Views/alluserblogs.php">All Blogs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link  text-white" href="../Views/admindashboard.php">Admin Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="../Views/userregisterform.php">Registration Page</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="../Views/userdashboard.php">User Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="../Views/userloginform.php">Login Page</span></a>
      </li>
    
    </ul>
  </div>
</nav>
<!-- update form  -->
<div class="row mt-4">
  <div class="col-md-3"></div>
  <div class="col-md-6">
<form action="../controllers/updatecontroller.php" method="POST" enctype="multipart/form-data">
  <h3 class="text-center mt-4">Create Your Blog Here</h3>
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Blog Category</label>
    <select class="form-select" aria-label="Default select example" name="category">
  <option name ><?php echo $idblogs;?> </option>
  <option value="travel">Travel Blog </option>
  <option value="food">Food Blog </option>
</select>
  </div>
  <!-- title -->
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo  $idtitles ;?>" aria-describedby="emailHelp" placeholder="Enter email" name="title">
   
  </div>
  <!-- content -->
  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <textarea class="form-control" name="content"  id="exampleFormControlTextarea1" rows="3"  placeholder="Enter content"> <?php echo   $idcontents ;?>
  </textarea>
  </div>

<!-- image upload -->
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Upload Image</label>
    <input type="file" name="fileToUpload" id="fileToUpload" value ="<?php echo  $image1;?>">
  </div>
  <button type="submit" name="submit1" id="one" class="btn btn-primary btn-lg">Update Blogs  </button>

</form>
</div>
</body>
</html>
