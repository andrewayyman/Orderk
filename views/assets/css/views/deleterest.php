<?php
include "../contoller/db_conn.php";
$id = $_GET["restaurantid"];
$query = "DELETE FROM restaurant WHERE `restaurant`.`restaurantid` = '$id'";
$result = mysqli_query($conn, $query);
if ($result) {
  header("Location: adminMrest.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>

