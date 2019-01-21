<?php
$server = "localhost";
//$server = "192.168.10.87";
$con = mysqli_connect($server,"root","vagrant","pizza");
if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
?>