<?php



session_unset();
session_destroy();
header('location:../views/index.php');
?>