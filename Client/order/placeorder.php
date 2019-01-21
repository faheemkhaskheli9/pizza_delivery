<?php
require_once('http://192.168.10.86/APIconnect.php');

$name	= $_POST['name'];
$pnum = $_POST['phonenumber'];
$email	= $_POST['email'];
$pizza	= $_POST['pizza'];
$address	= $_POST['address'];

order($email,$pnum,$pizza,$address);
header('Location: ./');
?>