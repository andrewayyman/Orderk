<?php
include "../contoller/db_conn.php";
$id = $_GET["customerid"];
$query = "DELETE FROM customer WHERE `customer`.`customerid` = '$id'";
$result = mysqli_query($conn, $query);
if ($result) {
  header("Location: adminMcustomers.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>

