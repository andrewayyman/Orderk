<?php
include "../contoller/db_conn.php";
$id = $_GET["id"];
$query = "DELETE FROM `cart` WHERE id = $id";
$result = mysqli_query($conn, $query);
if ($result) {
  header("Location: cart.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>