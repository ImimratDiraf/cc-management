<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "<script>alert('Something went wrong! please reload!');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"3; url='../index.php'\" />";
  }
  //echo "Connected successfully";
  //do nothing
?>