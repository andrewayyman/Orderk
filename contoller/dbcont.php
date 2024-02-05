<?php
$servername="localhost";
$username="root";
$password="";
$dbname="orderk";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn) {
    die("Connection faild".mysqli_connect_error());
}

?>