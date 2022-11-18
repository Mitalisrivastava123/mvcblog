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
    </ul>
  </div>
</nav>
    <!-- Section: Design Blog -->
<section class="background-radial-gradient overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
       Hey User Welcome  <br />
          <span style="color: hsl(218, 81%, 75%)">kindly Login </span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="POST" action="../controllers/logincontroller.php">
              <h1 class="text-center">Login Form</h1>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row mt-4">
                <div class="col-md-12 mb-4">
                  <div class="form-outline">
                    <input type="email" id="form3Example1" class="form-control" name="email" placeholder="email" />
                    <label class="form-label" for="form3Example1">Email</label>
                  </div>
                </div>
                <div class="col-md-12 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" name="password" placeholder="password"/>
                    <label class="form-label" for="form3Example2">Password</label>
                  </div>
                </div>
              </div>
              <!-- Checkbox -->
          

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign In 
              </button>

              <!-- Register buttons -->
              <div class="text-center">
             <a href="../Views/userregisterform.php"><p> Register  Here</a>
                <button type="button" class="btn btn-link btn-floating mx-1">
                 
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Blog -->
</body>
</html>