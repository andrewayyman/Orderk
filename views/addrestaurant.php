<?php 
require_once "../contoller/DBController.php";
require_once "../model/restaurant.php" ;

$restaurant = new restaurant;
$error = "";
if(isset($_POST["add"])) {
  $restaurant->restaurantname = $_POST["restaurantname"];
  $restaurant->categories = $_POST["categories"];
  $restaurant->address = $_POST["address"];
  $restaurant->rating = $_POST["rating"];
  $restaurant->menu = $_POST["menu"];
  
  if(empty($restaurant->restaurantname) || empty($restaurant->address) || empty($restaurant->categories) || empty($restaurant->rating) || empty($restaurant->menu) ) {
    $error = "Please fill the form";
  } else {
    $db = new DBController();
    $sql = "INSERT INTO `restaurant` (`restaurantname`,`categories`,`address`, `rating`, `menu`) VALUES 
    ('$restaurant->restaurantname', '$restaurant->categories', '$restaurant->address', '$restaurant->rating', '$restaurant->menu')";
    $done = $db->insert($sql);
  }
  if ($done)
  {
    header("location: adminMrest.php");
  }
}
?>


<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Add Restaurant</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="demo.css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="./assets/css/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/css/config.js"></script>
  </head>

  <body>
    <!--
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class=""
                    href="../contoller/logout.php"
                    data-icon=""
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Log Out</a
                  >
                </li>

             
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h3 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> </span> Admin Profile</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    
                    <li class="nav-item">
                      <a class="nav-link active"href="adminMrest.php" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Manage Restaurants </a>
                    </li>  
                    </li>


                    <li class="nav-item">
                      <a class="nav-link" href="adminMcustomers.php"
                        ><i class="bx bx-link-alt me-1"></i> Manage Customers </a
                      >
                    </li>


                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="./assets/images/2.png."
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div>
                          <h5>Andrew</H5> 
                          <h5>Id = 1</h5>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                     <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header"> Add Restaurant
               </h5>
               <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h5 class="card-title"></h5>

    <!-- General Form Elements -->
    <form method="post">
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Restaurant Name </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="restaurantname">
        </div>
        <br>
      <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">categories </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="categories">
        </div>
        <br><br><br>
        <!-- <div class="row mb-3">
        <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
          <input class="form-control" type="file" id="formFile" name = "image">
        </div> -->
      
      </div>
      <div class="row mb-3">
        <label for="inputNumber" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name = "address">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputNumber" class="col-sm-2 col-form-label">Rating</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name = "rating">
        </div>
      </div>
      </div>
      <div class="row mb-3">
      <label for="basic-url" class="form-label" name = "menu">Menu Page Link</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon3">https://example.com</span>
                      <input type="text" class="form-control" id="basic-url" name="menu" aria-describedby="basic-addon3">
                    </div>
        </div>
        <div class="col-sm-10">
                    <button type="submit" name="add" class="btn btn-primary">Confirm</button>
                  </div>
    </form><!-- End General Form Elements -->

  </div>
</div>

</div>
            <!-- / Content -->

            <!-- Footer -->
           
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js ./assets/css/core.js -->
    <script src="./assets/css/jquery.js"></script>
    <script src="./assets/css/popper.js"></script>
    <script src="./assets/css/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="./assets/css/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="./assets/css/main.js"></script>

    <!-- Page JS -->
    <script src="./assets/css/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
