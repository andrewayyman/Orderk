<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="orderk";
$connection=mysqli_connect($servername,$username,$password,$dbname);
if(!$connection) {
    die("Connection faild".mysqli_connect_error());
}


?>