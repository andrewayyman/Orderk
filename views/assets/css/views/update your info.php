<?
session_start();
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

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

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->


            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
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
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login-basic.html">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link" href="personal info.php" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Personal
                                            info</a>
                                    </li>
                                    <li class="nav-item">

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active"href="update your info.php" href="update your info.php"><i class="bx bx-link-alt me-1"></i>Update profile</a>
                                    </li>
                                </ul>
                                <div class="card mb-4">
                                    <h5 class="card-header">Update Profile</h5>

                    <div class="container-xxl flex-grow-1 container-p-y">


                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">

                                    <li class="nav-item">


                                </ul>
                                <div class="card mb-4">
                                    
                                    <!-- Account -->
                                    
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <?php
                                        include('config.php');
                                        include('up.php');

                                        $up = mysqli_query($con, "select * from customer WHERE customerid ");
                                        $data = mysqli_fetch_array($up);

                                        ?>
                                        <form id="formAccountSettings" action="personal info.php" method="POST">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="firstName" class="form-label">id</label>
                                                    <input class="form-control" type="text" id="firstName" name="customerid" value='<?php echo $data['customerid'] ?>' autofocus />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input class="form-control" type="text" id="firstName" name="firstname" value='<?php echo $data['firstname'] ?>' autofocus />
                                                </div>

                                                <!-- <div class="mb-3 col-md-6">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input class="form-control" type="text" name="lastname" id="lastname" value='<?php echo $data['lastname'] ?>' />
                                                </div> -->
                                                <div class="mb-3 col-md-6">
                                                    <label for="email" class="form-label">E-mail</label>
                                                    <input class="form-control" type="text" id="email" name="email" value='<?php echo $data['email'] ?>' placeholder="john.doe@example.com" />
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="phoneNumber">Password</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="phoneNumber" name="password" class="form-control" value='<?php echo $data['password'] ?>' placeholder="*******" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="address" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="address" name="city" value='<?php echo $data['city'] ?>' placeholder="cairo" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" value='<?php echo $data['address'] ?>' placeholder="Address" />
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="zipCode" class="form-label">account balance</label>
                                                    <input type="text" class="form-control" id="zipCode" name="accountbalance" value='<?php echo $data['accountbalance'] ?>' maxlength="10" />
                                                </div>


                                                <div class="mt-2">
                                                    <button type="submit" name="update" class="btn btn-primary me-2" href="personal info.php">Save changes</button>
                                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                                </div>
                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>

                                <!-- / Content -->

                                <!-- Footer -->

                                <!-- / Footer -->

                                <div class="content-backdrop fade"></div>
                            </div>
                            <!-- Content wrapper -->
                        </div>
                        <!-- / Layout page -->
                    </div>

                    <!-- Overlay -->
                    <div class="layout-overlay layout-menu-toggle"></div>
                </div>
                <!-- / Layout wrapper -->



                <!-- Core JS -->
                <!-- build:js assets/vendor/js/core.js -->
                <script src="../assets/vendor/libs/jquery/jquery.js"></script>
                <script src="../assets/vendor/libs/popper/popper.js"></script>
                <script src="../assets/vendor/js/bootstrap.js"></script>
                <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

                <script src="../assets/vendor/js/menu.js"></script>
                <!-- endbuild -->

                <!-- Vendors JS -->

                <!-- Main JS -->
                <script src="../assets/js/main.js"></script>

                <!-- Page JS -->
                <script src="../assets/js/pages-account-settings-account.js"></script>

                <!-- Place this tag in your head or just before your close body tag. -->
                <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>