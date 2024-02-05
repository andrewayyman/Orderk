<?php
// retrieve form data
$id = $_POST['id'];
$product = $_POST['product'];
$price = $_POST['price'];

// connect to database
$conn = new mysqli('localhost', 'root', '', 'orderk');

// insert data into database
$sql = "INSERT INTO cart (id,product,price) VALUES ('$id', '$product', '$price')";
$result = $conn->query($sql);


if ($result) {
    header("Location: cart.php?msg=Data deleted successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
  ?>
?>