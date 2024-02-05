<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF_8"/>
        <title>trackorder</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="./assets/css/trackorder.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="./assets/css/normalize.css">
        <link rel="stylesheet" href="./assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="./assets/css/style_home.css"> -->
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
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="shopping">
                    <a href="cart.php"> <i class="fa-solid fa-cart-shopping"></i> </a>
                </div>
                <div class="user">
                    <a href="adminMrest.php"> <i class="fa-solid fa-user"></i> </a>
                </div>
                <div class="sign">
                    <a class="log" href="../contoller/logout.php" target="_blank">log out</a>
                </div>
            </nav>
            <!-- End of navbar -->
        </div>
    </div>
    <!-- End of header -->
    <p class="title">Your Orders</p>
 
        <table calss = "table table-hover text-center" >

						  <thead calss ="table-dark">
							<tr class="hd">
							  <th scope ="col">item</th>
							  <th scope ="col" >price</th>
							  <th scope ="col" >status</th>
							 
							</tr>
                            </thead>
                            <tbody>
                              
                                <?php
                                  require_once "../contoller/dbcont.php";
                              
                                $sql="select * from cart";
                                $result=mysqli_query($conn,$sql);
                                while($row =mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                    <th> <?php echo $row['product'] ?> </th>
                                    <th> <?php echo $row['price'] ?> </th>
                                   <th>  <button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin"  aria-hidden="true" ></span>On a Way!</button> </th> 
                                
                                </tr>
                                <?php
                                 }
                                ?>                    
        <tr>	

 </td>     
</tr>
    </tbody>
</table>
  <?php  
 ?>
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
