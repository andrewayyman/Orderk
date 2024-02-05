<?php
include "../contoller/db_conn.php";

$id = $_GET["restaurantid"];
$query = "INSERT INTO favlist WHERE `restaurantid` = '$id'";
$result = mysqli_query($conn, $query);
if ($result) {
  header("Location: favlist.php?msg=Data added successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>

    