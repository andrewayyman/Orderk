



<?php

// Define the database credentials
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "orderk";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the FeedbackForm class
class FeedbackForm {
    private $name;
    private $email;
    private $message;

    // Constructor to set the form data
    public function __construct($name, $email, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    // Method to validate the form data
    public function validate() {
        // Perform any validation checks here
        if (empty($this->name) || empty($this->email) || empty($this->message)) {
            throw new Exception("All fields are required.");
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email address.");
        }
    }

    // Method to save the form data to the database
    public function save($conn) {
        $name = $conn->real_escape_string($this->name);
        $email = $conn->real_escape_string($this->email);
        $message = $conn->real_escape_string($this->message);

        $sql = "INSERT INTO feedback_form (`id`,`name`, `email`, `message`) 
        VALUES ('' ,'$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Thank you for your feedback!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// If the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create a new FeedbackForm object
    $feedback_form = new FeedbackForm($name, $email, $message);

    try {
        // Validate the form data
        $feedback_form->validate();

        // Save the form data to the database
        $feedback_form->save($conn);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>feedback from shop</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/feedback.css">
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <a class="log" href="../contoller/logout.php" target="_blank">log out</a>
                </div>
            </nav>
            <!-- End of navbar -->
        </div>
    </div>
    <!-- End of header -->
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <h1>give your feedback</h1>
            <div class="id">
                <input type="text" placeholder="Full name" name="name">
                <i class="fa fa-user"></i>
            </div>
            <div class="id">
                <input type="email" placeholder="email address" name="email">
                <i class="fa fa-envelope"></i>
            </div>
            <textarea cols="15" rows="5" placeholder="enter your opinion here" name="message"></textarea>
            <button type="submit">send</button>
        </form>
    </div>

    <footer>
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
    </footer>
</body>
</html>