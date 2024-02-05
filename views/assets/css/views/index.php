<?php
require_once '../model/users.php';
require_once '../contoller/Authcontroller.php';
$errMsg="";
if (isset($_POST['email']) && isset($_POST['password'])) 
{
   if(!empty($_POST['email']) && !empty($_POST['password']))
   {
     $user = new Users;
     $au = new AUC;
     $user->email = $_POST['email'];
     $user->password = $_POST['password'];
     if(!$au->login($user))
     {
      if(!isset($_SESSION["userId"]))
    
      $errMsg =$_SESSION["errMsg"];
      
     }
     else
    {
      if(!isset($_SESSION["userId"]))
      {
          session_start();
      }

      if($_SESSION["userRole"] == 1)
        {
           header("location: adminMcustomers.php");
        }
       else
       {
        header("location: home.php");
       } 
    }
  }
  else
  {
    session_start();
    if(empty($_POST['email']) && empty($_POST['password']))
    {
     $errMsg ="Please fill the fields";
    }
    else if (empty($_POST['email']) && !empty($_POST['password']))
    {
      $errMsg ="Email is requierd";
    }
    else if (!empty($_POST['email']) && empty($_POST['password']))
    {
      $errMsg ="Password is requierd";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./assets/css/test/feather/feather.css">
  <link rel="stylesheet" href="./assets/css/test/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./assets/css/test/assets/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/css/test/vertical-layout-light/style.css">
  <!-- endinject -->
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <?php

if($errMsg !="")
{
  ?>

  <div class="alert alert-danger" role="alert"><?php echo"$errMsg"?></div>

  <?php
}

?>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form id="formAuthentication" class="pt-3" action="index.php" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg"name="email" id="exampleInputEmail1" placeholder="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
               
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="regester.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./assets/css/test/js/off-canvas.js"></script>
  <script src="./assets/css/test/js/hoverable-collapse.js"></script>
  <script src="./assets/css/test/js/template.js"></script>
  <script src="./assets/css/test/js/settings.js"></script>
  <script src="./assets/css/test/js/todolist.js"></script>
  <!-- endinject -->
</body>
</html>
