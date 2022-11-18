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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
<body>
  <!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-light nav1" >
  <a class="navbar-brand text-white" href="../Views/alluserblogs.php">All Blogs </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link  text-white" href="admindashboard.php">Admin Dashboard</span></a>
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          choose category 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../Views/travelblogs.php">Travel Blog </a>
          <a class="dropdown-item" href="../Views/foodblogs.php">Food Blog </a>
       
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- finding all user through model  -->
<?php 
$user2 = User::find('all');
echo "<h2 class='text-center mt-4'>User Request Approval</h2>";
echo "<table class='table'>";
echo "<th>Id</th><th>Name</th><th>Email</th><th>Status</th>";
foreach($user2 as $u)
{

         echo "<tr><td>". $u->id. "  </td><td>". $u->name.  "</td><td>" . $u->email . "</td>";
         if($u->status=="approved")
         {
            ?>
             <td><a href='../controllers/approvecontroller.php?id="<?php echo $u->id ?>"'> <?php echo  $u->status ?> </a></td></tr><br>
             <?php
         }
         else
         {
            ?>
              <td><a href='../controllers/rejectcontroller.php?id="<?php echo $u->id ?>"'><?php echo  $u->status ?> </a></td></tr><br>
         <?php } 
}
echo "<table>";
?>

<?php echo "<h3 class='text-center mt-4'>Blog Posted By User</h3>";?>
<!-- finding all user blogs through blog model -->
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
   echo "<a href='../controllers/deleteblogadmin.php?id=".$b->id."' ><span style='background:#198754;text-decoration:none;color:#fff;padding:10px;'>delete</span></a>";
  echo '</div>';
 echo '</div>';

}
echo '</div>';
?>

</body>
</html>