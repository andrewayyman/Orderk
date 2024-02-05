
<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF_8"/>
        <title>payment</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="./assets/css/payment.css" media="all"/>
        <link rel="stylesheet" href="./assets/css/style.home.css" media="all"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
         <link rel="stylesheet" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    </head>
    <body>
          <!-- Header  -->
    <div class="header">
        <div class="container">
            <a href="home.php" class="logo"><img src="./assets/images/Orderk-1.png" alt=""></a>
            <!-- start of navbar -->
            <nav>
                <ul>
                    <li> <a href="home.php">Home</a> </li>
                    <li> <a href="contact.php" target="_blank">Contact us</a> </li>
                   <li> <a href="favlist.php" target="_blank">Favourite List</a> </li>
                    <li> <a href="about.php" target="_blank">About Us</a> </li>
                    <li> <a href="trackorder.php" >Your Submissions</a> </li>
                </ul>
               
                <div class="user">
                    <a href="personal info.php"> <i class="fa-solid fa-user"></i> </a>
                </div>
                <div class="sign">
                     <a class="log" href="../contoller/logout.php">log out</a>
                </div>
            </nav>
            <!-- End of navbar -->
        </div>
    </div>
    <!-- End of header -->
 
   

    <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formPayment"></span>
                    <hr class="my-5">

                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">Credit Card Payment</h3>
                            
                            <form class="form" role="form" action="trackorder.php" autocomplete="off" method="post">
                                <div class="form-group">
                                    <label for="cc_name">Card Holder's Name</label>
                                    <input type="text" class="form-control" name="cardname" title="First and last name" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control" name="cardnumber" maxlength="20" title="Credit card number" required="required">
                                </div>

                                <div class="row">
                                    <label class="col-md-12">Amount</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                        <input type="text" class="form-control text-right" name="amount" placeholder="enter amount of the order">
                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-default btn-lg btn-block">Reset</button>
                                    </div>
                                    <div class="col-md-6">
                                    
                                    <button type="submit" name="pay" class="btn btn-success btn-lg btn-block">Pay</button>
                                    </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
       
       <!-- Start Footer -->
       </div>
       <br><br><br><br>
      
     <!-- Start Footer -->

     <div class="footer">
        <div class="container">
            <div class="box">
                <a href="home.php">
                    <img src="./assets/images/Orderk-1.png" alt="">
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
                "Drive Your Dreams Home: Your Journey Begins Here!"
                </p>


            </div>
            <div class="box">
                <h3>Account Info</h3>
                <ul class="ficons">
                    <li><a href="#"> Your account </a></li>
                    <li><a href="#"> Your wishlist </a></li>
                    <li><a href="#"> Your Submissions </a></li>
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
            Orderk &copy;All rights Reserved. Designed by our team &lt;3
        </p>
    </div>

    <!-- End Footer -->

    </php>