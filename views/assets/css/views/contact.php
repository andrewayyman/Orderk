

<?php 









 

// Define the database credentials
$serverfullname = "localhost";
$userfullname ="root";
$password = "";
$dbfullname = "orderk";

// Create a connection to the database
$conn = new mysqli($serverfullname, $userfullname, $password, $dbfullname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the ContactForm class
class ContactForm {
    private $fullname;
    private $email;
    private $Address;
    private $Phone;
    private $carname;

    // Constructor to set the form data
    public function __construct($fullname, $email, $Address, $Phone, $carname) {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->Address = $Address;
        $this->Phone = $Phone;
        $this->carname = $carname;
    }

    // Method to validate the form data
    public function validate() {
        // Perform any validation checks here
        if (empty($this->fullname) || empty($this->email) ) {
            throw new Exception("All fields are required.");
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email address.");
        }
    }

    // Method to save the form data to the database
    public function save($conn) {
        $fullname = $conn->real_escape_string($this->fullname);
        $email = $conn->real_escape_string($this->email);
        $Address = $conn->real_escape_string($this->Address);
        $Phone = $conn->real_escape_string($this->Phone);
        $carname = $conn->real_escape_string($this->carname);
        

       
        $sql = "INSERT INTO contact_us (`id`, `fullname`, `email`, `Address`, `Phone`, `carname`) 
        VALUES ('', '$fullname', '$email', '$Address', '$Phone', '$carname')";


        if ($conn->query($sql) === TRUE) {
            echo "Thank you for contacting us!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// If the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $Address = $_POST["Address"];
    $Phone = $_POST["Phone"];
    $carname = $_POST["carname"];

    // Create a new ContactForm object
    $contact_form = new ContactForm($fullname, $email, $Address, $Phone, $carname);

    try {
        // Validate the form data
        $contact_form->validate();

        // Save the form data to the database
        $contact_form->save($conn);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn->close();
}







?> 


























<!doctype html>
<html>
    <head>
        <meta fullname="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/contact.css"> 
        <link rel="stylesheet" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <body>
        <header>
        <!-- Header  -->
        <div class="header">
        <div class="container">
            <a href="#" class="logo"><img src="./assets/images/Orderk-1.png" alt=""></a>
            <!-- start of navbar -->
            <nav>
                <ul>
                    <li> <a href="home.php">Home</a> </li>
                    <li> <a href="contact.php" target="_blank">Contact us</a> </li>
                   <li> <a href="favlist.php" target="_blank">Favourite List</a> </li>
                    <li> <a href="about.php" target="_blank">About Us</a> </li>
                    <li> <a href="trackorder.php" >Your Submissions</a> </li>
                </ul>
                <div class="search">
                    <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                </div>
               
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
    <br><br><br>
        </header>
        <section class="contact">
            <div class="content">
                <h2 style="color: #4d50c2;">Contact Us</h2>
            </div>
            <div class="container">
                <div class="contactinfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Cairo</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>01206741192</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>orderk@gmail.com</p>
                        </div>
                    </div>
                </div>    
                <div class="contactfrom">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h2>Send Message</h2>
        <div class="inputbox">
            <input type="text" name="fullname" required="required">
            <span>FullName</span>
        </div>
        <div class="inputbox">
            <input type="text" name="email" required="required">
            <span>email</span>
        </div>
        <div class="inputbox">
            <input type="text" name="Address" required="required">
            <span>Address</span>
        </div>
        <div class="inputbox">
            <input type="text" name="Phone" required="required">
            <span>Phone</span>
        </div>
        <br>
        
      
        <br>
        <a href="payment.php"> <div class="inputbox">
            
            <input type="submit" name="send" value="send">
            
        </div></a>
    </form>
</div>
            </div>
        </section>
        <footer>
             <!-- Start Footer -->

    <div class="footer">
        <div class="container">
            <div class="box">
                <a href="home.php">
                    <img src="./assets/images/Orderk-1.png" alt=""></a>
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
        3rbetk &copy;All rights Reserved. Designed by our team &lt;3
        </p>
    </div>

    <!-- End Footer -->

        </footer>
    </body>
</html>