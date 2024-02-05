<?php 
require_once '../contoller/DBController.php';
require_once '../contoller/db_conn.php';
require_once '../model/restaurant.php';

  
 if (isset($_GET['restaurantid'])) {  
      $id = $_GET['restaurantid'];  
      $query = "DELETE FROM `restaurant` WHERE restaurantid = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:adminMrest.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
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

    <title>Admin Profile </title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <h5 class="card-header">All Restaurants
                <a href="addrestaurant.php" target="_blank" class=" col-md-3 btn btn-primary float-end">
                  <span class="tf-icons bx bx-add-to-queue"></span> Add New Restaurant
                </a>
               </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Restaurant Name</th>
                        <th>Categories</th>
                        <th>Menu</th>
                        <th>Address</th>
                        <th>Rating</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
                          // fetch data from the database and loop through the results
                          include_once '../contoller/DBController.php';
                          include_once '../contoller/db.php';
                          $db = new DBController();
                          $sql = "SELECT * FROM restaurant";
                          $result = $db->read($sql);

                          foreach ($result as $row) {
                            ?>
                      <tr>
                       
                        <td><strong> <?= $row['restaurantname'] ?></strong></td>
                        <td> <?= $row['categories'] ?></td>
                        <td> <a href="<?= $row['menu'] ?>" target="_blank">View Menu</a>
                        <td>
                        <?= $row['address'] ?>
                        </td>
                        <td> <?= $row['rating'] ?>
                        <td>
                              <a href='deleterest.php?restaurantid=<?= $row['restaurantid'] ?>' id='btn' 
                              class='fa-solid fa-trash fs-5'></a>
                         </td>
                         </tr>
                         <?php } ?>
                      
                        
                  </table>
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
