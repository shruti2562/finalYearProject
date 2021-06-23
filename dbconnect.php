<?php
$connect = mysqli_connect("localhost","root","","final_year_project");

// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";
echo 'PHP version: '.phpversion();

?>