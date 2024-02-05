
 <!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF_8"/>
        <title>KFC</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="./assets/css/kfc.css" media="all"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="./assets/css/all.min4.css">
        <link rel="stylesheet" href="./assets/css/style4.css">
       
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
    <div>   
    <div class="mcontainer">
            <h1>KFC menu</h1>
            <hr>
            <br>
             <div class="row"> 
             <div class="container">
        <div class="box">
          <form action="add.php" method="post">
        <img src="./assets/images/kfcmenu2.webp">
        <h2>Super Dinner Meal - Large</h2>
        <p>4 Pieces of chicken, large French fries, small coleslaw salad, bread and soft drink.</p>
        <span>EGP 215.00</span>
        <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
           <div class="options">
           <input type="hidden" name="id" value="1"> 
           <input type="hidden" name="product" value="Super Dinner Meal - Large">
            <input type="hidden" name="price" value="215.00">
            <button type="submit" name="add">Add to Cart</button>
          </div>
         </form>
         </div> 
        <div class="box">
          <form action="add.php" method="post">
        <img src="./assets/images/kfcmenu3.webp">
        <h2>Zinger sandwitch</h2>
        <p>Spicy crispy fried chicken, lettuce and mayonnaise sauce.</p>
        <span>EGP 75.00</span>
        <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
           <div class="options">
           <input type="hidden" name="id" value="2"> 
           <input type="hidden" name="product" value="Zinger sandwitch">
            <input type="hidden" name="price" value="75.00">
            <button type="submit" name="add">Add to Cart</button>
          </div>
         </form>
         </div> 
        <div class="box">
          <form action="add.php" method="post">
        <img src="./assets/images/kfcmenu4.webp">
        <h2>Rizzo with shrimp</h2>
        <p>4 Pieces of chicken, large French fries, small coleslaw salad, bread and soft drink.</p>
        <span>EGP 82.00</span>
        <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
           <div class="options">
           <input type="hidden" name="id" value="3"> 
           <input type="hidden" name="product" value="Rizzo with shrimp">
            <input type="hidden" name="price" value="82.00">
            <button type="submit" name="add">Add to Cart</button>
          </div>
         </form>
         </div> 
        <div class="box">
          <form action="add.php" method="post">
        <img src="./assets/images/kfcmenu5.webp">
        <h2>Super Dinner plus</h2>
        <p>4 pieces chicken + rice + 1 fries + 1 small coleslaw + bread .</p>
        <span>EGP 202.00</span>
        <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
           <div class="options">
           <input type="hidden" name="id" value="4"> 
           <input type="hidden" name="product" value="Super Dinner plus">
            <input type="hidden" name="price" value="202.00">
            <button type="submit" name="add">Add to Cart</button>
          </div>
         </form>
         </div> 
        <div class="box">
          <form action="add.php" method="post">
        <img src="./assets/images/kfcmenu6.webp">
        <h2>9 pieces chicken fiesta</h2>
        <p>9 pieces chicken + 2 riso + family fries + large coleslaw + 2 bread + 1 liter drink.</p>
        <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
           <div class="options">
           <input type="hidden" name="id" value="5"> 
           <input type="hidden" name="product" value="9 pieces chicken fiesta">
            <input type="hidden" name="price" value="442.00">
            <button type="submit" name="add">Add to Cart</button>
          </div>
         </form>
         </div> 
        <div class="box">
          <form action="add.php" method="post">
        <img src="./assets/images/kfcmenu7.webp">
        <h2>Mozzarella Burger Box</h2>
        <p>mozzarella burger sandwich + chicken piece + rice + coleslaw + drink.</p>
        <span>EGP 201.00</span>
        <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
           <div class="options">
           <input type="hidden" name="id" value="6"> 
           <input type="hidden" name="product" value="Mozzarella Burger Box">
            <input type="hidden" name="price" value="201.00">
            <button type="submit" name="add">Add to Cart</button>
          </div>
         </form>
         </div> 
        <div class="box">
          <form action="add.php" method="post">
        <img src="./assets/images/kfcmenu8.webp">
        <h2>Mighty Love</h2>
        <p>Mighty Zinger Sandwich + 2 Coleslaw + 1 Liter Drink 2.</p>
        <span>EGP 255.00</span>
        <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
           <div class="options">
           <input type="hidden" name="id" value="7"> 
           <input type="hidden" name="product" value="Mighty Love">
            <input type="hidden" name="price" value="255.00">
            <button type="submit" name="add">Add to Cart</button>
          </div>
         </form>
         </div> 
        <div class="box">
          <form action="add.php" method="post">
        <img src="./assets/images/kfcmenu9.webp">
        <h2>Encouragement box</h2>
        <p>43 twister sandwiches, 6 pieces of chicken, family French fries and Pepsi liter.</p>
        <span>EGP 460.00</span>
        <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
           <div class="options">
           <input type="hidden" name="id" value="8"> 
           <input type="hidden" name="product" value="Encouragement box">
            <input type="hidden" name="price" value="460.00">
            <button type="submit" name="add">Add to Cart</button>
          </div>
         </form>
         </div> 
         </div> 
         </div>
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
</php>