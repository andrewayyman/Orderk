<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF_8"/>
        <title>Cart page</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="./assets/css/cart.css" media="all"/>
         <link rel="stylesheet" href="./assets/css/normalize.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="cart.js"></script>
        
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
   <!--startttttt carttttt codddddeeeeee-->
   <div class="cart">
      <h1>Shopping Cart</h1>
      <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <td scope="col">id</td>
      <td scope="col">product</td>
      <td scope="col">price</td>
      <td scope="col">quantity</td>
      <td scope="col">total</td>
      <td scope="col">Remove</td>
    </tr>
  </thead>
  <tbody>
    <?php
    include "../contoller/db_conn.php";
    $query = "SELECT * FROM cart";
    $result = mysqli_query($conn, $query);
    $total = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $total = $total + $row['price'];
    ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['product'] ?></td>
        <td><input type="hidden" class="iprice" value="<?php echo $row['price'] ?>"><?php echo $row['price'] ?></td>
        <td><input class="text-center iquantity" onclick='subtotal()' type="number" name="quantity" min="1" value="<?php echo $row['quantity'] ?>"></td>
        <td class="itotal"><?php echo $total ?></td>
        <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td>
      </tr>
    <?php } ?>
    <tr>
      <td>TOTAL AMOUNT</td>
      <td></td>
      <td></td>
      <td></td>
      <td><strong id="gtotal"></strong></td>
      <td></td>
    </tr>
  </tbody>
</table>
<br><br><br>
<a href="kfc.php" style="font-size: 20px; color: #FFFFFF; background-color:  #4d50c2; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Continue Shopping</a>
<a href="payment.php" style="font-size: 20px; color: #FFFFFF; background-color:  #4d50c2; padding: 10px 20px; border-radius: 5px; text-decoration: none;">CHECKOUT</a>

<script>
  var gt = 0;
  var iprice = document.getElementsByClassName('iprice');
  var iquantity = document.getElementsByClassName('iquantity');
  var itotal = document.getElementsByClassName('itotal');
  var gtotal = document.getElementById('gtotal');

  function subtotal() {
    gt = 0;
    for (var i = 0; i < iprice.length; i++) {
      itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
      gt = gt + (iprice[i].value) * (iquantity[i].value);
    }
    gtotal.innerText = gt;
  }

  subtotal();
</script>
</div>
  <!--end of codeee-->
     <!-- Start Footer -->

  <br><br><br><br>
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

    <!-- End Footer -->
    <!-- End Footer -->
    </php>