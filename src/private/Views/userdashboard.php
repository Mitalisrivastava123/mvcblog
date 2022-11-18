<?php
session_start();
include  "../config/config.php";
// fetching id 
 $id =  $_SESSION["id"];
$name = $_SESSION["name"];

$userid = $_SESSION["id1"];
$username = $_SESSION["uname1"];
$usertitle = $_SESSION["title1"];
 $usercontent = $_SESSION["content1"];
 $category = $_SESSION["blog1"];
?>
<!-- html start -->
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
<!-- create blog form  -->
<div class="row mt-4">
  <div class="col-md-3"></div>
  <div class="col-md-6">
<form action="../controllers/userblogcontroller.php" method="POST" enctype="multipart/form-data" id="form1">
  <h3 class="text-center">Create Your Blog Here</h3>
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Blog Category</label>
    <select class="form-select" aria-label="Default select example" name="category">
  <option name > </option>
  <option value="travel">Travel Blog </option>
  <option value="food">Food Blog </option>
 
</select>
  </div>
  <!-- title -->
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter email" name="title">
   
  </div>
  <!-- content -->
  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <textarea class="form-control" name="content"  id="exampleFormControlTextarea1" rows="3"  placeholder="Enter content"> 
  </textarea>
  </div>
<!-- image upload -->
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Upload Image</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
  </div>

  <button type="submit" name="submit1" class="btn btn-primary btn-lg">Add Blogs </button>

</form>

</div>

<?php echo '<form action="../controllers/destroycontroller.php" method="post"><button type="submit" class="btn btn-primary mt-5" name="logout">Logout User</button></form>'; ?>

<?php  echo "<h3 class='text-center'>Your Blogs </h3>" ?>
<!-- finding blogs of particular userid -->
<?php
$blog1 = Blog ::find('all', array('userid' =>  $id));

echo '<div class="row mt-5">';
foreach($blog1 as $b)
{
  echo "<div class='card col-3' style=';color:#000;margin:6px;margin-left:40px;'>";
  echo "<img class='card-img-top' src='../../public/uploads/$b->image' alt='Card image cap'>";
  echo "<div class='card-body'>";
    echo "<h4 class='card-text'><span class='blog-title'>Block Posted By-></span>" .$b->uname. "</h4>";
    echo "<h5 class='card-title'><span class='blog-title'>Blog title-</span>".$b->title."</h5>";
   echo "<p class='card-text'><span class='blog-title'>Blog content-</span>" .$b->content."</p>";?>
<?php  echo "<a href='../Views/updateform.php?id=".$b->id."'><span style='background:#198754;text-decoration:none;color:#fff;padding:10px;'>Edit</span></a>" ?>
  <?php  echo "<a href='../controllers/deletecontroller.php?id=".$b->id."' ><span style='background:#198754;text-decoration:none;color:#fff;padding:10px;'>delete</span></a>" ?>
  
   <?php 
  echo '</div>';
 echo '</div>';

}
echo '</div>';
?>


</body>

</html>