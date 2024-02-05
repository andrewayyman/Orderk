<?php
require_once '../contoller/Authcontroller.php';
require_once '../model/fav.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orderk </title>
    <link rel="stylesheet" href="./assets/css/style_home.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>

    <!-- Header  -->
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
                    <a class="log" href="../contoller/logout.php" target="_blank">Log Out</a>
                </div>
            </nav>
            <!-- End of navbar -->
        </div>
    </div>
    <!-- End of header -->
    <!-- start landing -->

    <div class="landing">
        <div class="overlay"></div>
        <div class="text">
            <div class="content">
                <h2>
                Bringing the restaurant experience to your home

                </h2>
                <p>Your everyday, right away
Order food and grocery delivery online from hundreds of restaurants and shops nearby..</p>
            </div>
        </div>
    </div>



    <!-- end of landing -->
    <!-- Start our Restaurants -->
    <br><br><br>
    <div class="products" id="products">
    <h2 class="maintitle">All Restaurants <span></span></h2>
        <div class="container">
    <?php

                        include_once '../contoller/DBController.php';
                          include_once '../contoller/db.php';
                          $db = new DBController();
                          $sql = "SELECT * FROM restaurant";
                          $result = $db->read($sql);

                          foreach ($result as $row) {
                            ?>
        <div class="products" id="products">

            <div class="box">
                <img src="./assets/images/Orderk-1.png" alt="" />
                <div class="content">
                    <h3><?= $row['restaurantname'] ?> </h3>
                    <p><?php echo $row['categories'] ?></p>
                </div>
                <div class="info">
                    <a href=<?php echo $row['menu'] ?> target="_blank">View Menu</a>
                    <a href ="favlist.php?restaurantid=<?= $row['restaurantid'] ?>">
                    <i class="fa fa-heart fa-lg" name= "fav" ></i>
                   </a>
                </div>
            </div>

        </div>
                         <?php } ?>


    </div>

    <!-- End of our products -->
    <!-- Start of services -->

    <div class="services" id="services">
        <h2 class="maintitle2">Services <span></span></h2>
        <div class="container">
            <div class="box">
                <i class="fa-solid fa-truck-fast fa-4x"></i>
                <h3>Free & Fast Shipping</h3>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-truck-fast fa-4x"></i>
                <h3>Realtime delivery</h3>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-ribbon fa-4x"></i>
                <h3>Select from Best Restaurants</h3>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-ribbon fa-4x"></i>
                <h3>Bringing the restaurant experience to your home</h3>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-screwdriver-wrench fa-4x"></i>
                <h3>Fatest ordering experience</h3>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-dollar-sign fa-4x"></i>
                <h3>Track order status</h3>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- End of services -->

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

</body>

</html>