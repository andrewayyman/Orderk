<?php 
require_once '../contoller/DBController.php';
require_once '../contoller/db_conn.php';
require_once '../model/restaurant.php';

  


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

    <title>favorite list </title>

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
    <link rel="stylesheet" href="../" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/css/style_home.css">
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="./assets/css/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/css/config.js"></script>
  </head>

  <body>
  <div class="header">
        <div class="container">
            <a href="#" class="logo"><img src="./assets/images/Orderk-1.png" alt=""></a>
            <!-- start of navbar -->
            <nav>
                <ul>
                    <li> <a href="home.php">Home</a> </li>
                    <li> <a href="contact.php" target="_blank">Contact us</a> </li>
                    <li> <a href="feedback.php" target="_blank">Feedback</a> </li>
                    <li> <a href="about.php" target="_blank">About Us</a> </li>
                    <li> <a href="trackorder.php" >your orders</a> </li>
                </ul>
                <div class="search">
                    <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                </div>
                <div class="shopping">
                    <a href="cart.php"> <i class="fa-solid fa-cart-shopping"></i> </a>
                </div>
                <div class="user">
                    <a href="personal info.php"> <i class="fa-solid fa-user"></i> </a>
                </div>
                <div class="sign">
                    <a class="log" href="../contoller/logout.php" target="_blank">log out</a>
                </div>
            </nav>
            <!-- End of navbar -->
        </div>
    </div>
    <!-- End of header -->
    <!--
        <div class="layout-page">
          <!-- Navbar -->

          

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          <br><br><br><br><br><br>
            <div class="container-xxl flex-grow-1 container-p-y">
              <h3 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> </span> Favorite List</h4>



                  </ul>
                  <div class="card mb-4">
                   
                    <!-- Account -->
                    
                   
              <div class="card">
                <h5 class="card-header">All Favorites

               </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Restaurant ID</th>
                        <th>Restaurant Name</th>
                        <th>Rating</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
                          // fetch data from the database and loop through the results
                          include_once '../contoller/DBController.php';
                          include_once '../contoller/db.php';
                          $db = new DBController();
                          $sql = "SELECT * FROM favlist";
                          $result = $db->read($sql);

                          foreach ($result as $row) {
                            ?>
                      <tr>
                       
                        <td><strong> <?= $row['restaurantid'] ?></strong></td>
                        <td> <?= $row['restaurantname'] ?>
                        <td> <?= $row['rating'] ?>
                       
                         </tr>
                         <?php } ?>
                      
                        
                  </table>
                </div>
              </div>
              <br>
              </div>

              <br><br><br><br>
              <br><br><br><br>
            <!-- / Content -->

          <!-- Start Footer -->

    <div class="footer">
        <div class="container">
            <div class="box">
                <a href="home.php">
                    <img src="./assets/images/orderk-logos.jpeg" alt="">
                </a>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <p class="text">
                Your everyday, right away
Order food and grocery delivery online from hundreds of restaurants and shops nearby.
                </p>


            </div>
            <div class="box">
                <h3>Account Info</h3>
                <ul class="ficons">
                    <li><a href="#"> Your account </a></li>
                    <li><a href="#"> Your wishlist </a></li>
                    <li><a href="#"> Your orders </a></li>
                    <li><a href="#"> Your address </a></li>

                </ul>
            </div>
            <div class="box">
                <h3>Policies & FAQ </h3>
                <ul class="ficons">
                    <li><a href="#"> Shipping Policy </a></li>
                    <li><a href="#"> Return Policy </a></li>
                </ul>
            </div>
        </div>
        <p class="copyright">
            ORDERK &copy;All rights Reserved. Designed by our team &lt;3
        </p>
    </div>
    

    <!-- End Footer -->
           
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
