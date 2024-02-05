<?php
include('config.php');

if (isset($_POST['update'])) {
    $ID = $_POST['customerid'];
    $fname = $_POST['firstname'];
    // $lname = $_POST['lastname'];
    $useremail = $_POST['email'];
    $userpassword = $_POST['password'];
    $useraddress = $_POST['address'];
    $usercity = $_POST['city'];
    $userbalance = $_POST['accountbalance'];
    $update = "UPDATE customer SET 
    firstname='$fname',
    email='$useremail',
    password='$userpassword',address='$useraddress',
    city='$usercity',accountbalance='$userbalance' WHERE customerid=$ID ";
    mysqli_query($con, $update);
}

if (isset($_GET['customerid'])) {
    $ID = $_GET['customerid'];
    $up = mysqli_query($con, "SELECT * FROM customer WHERE customerid='$ID'");
    $data = mysqli_fetch_array($up);
} 
