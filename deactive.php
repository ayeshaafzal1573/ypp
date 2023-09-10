<?php
include("header.php");
$con=mysqli_connect("localhost","root","","ypp");

  mysqli_query($con,"UPDATE signup SET status= 0 WHERE id='$_GET[id]'");

  header("location:sign-data.php");
?>