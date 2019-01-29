<?php
$server = "localhost";
$server = "192.168.10.87";
$server = "10.0.0.49";
$con = mysqli_connect($server,"root","vagrant","pizza");
if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
?>