<?php
session_start();
include  "../config/config.php";
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
        <a class="nav-link  text-white" href="../Views/userloginform.php">Login Page</span></a>
      </li>
 
    </ul>
  </div>
</nav>
<!-- finding all user blogs  -->
<?php
$blog1 = Blog ::find('all');
echo '<div class="row mt-5">';
foreach($blog1 as $b)
{
  echo "<div class='card col-3' style=';color:#000;margin:6px;margin-left:40px;'>";
  echo "<img class='card-img-top' src='../../public/uploads/$b->image' alt='Card image cap'>";
  echo "<div class='card-body'>";
    echo "<h4 class='card-text'><span class='blog-title'>Block Posted By-></span>" .$b->uname. "</h4>";
    echo "<h5 class='card-title'><span class='blog-title'>Blog title-</span>".$b->title."</h5>";
   echo "<p class='card-text'><span class='blog-title'>Blog content-</span>" .$b->content."</p>";
  echo '</div>';
 echo '</div>';

}
echo '</div>';
?>

</body>
</html>