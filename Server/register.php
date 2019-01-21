<?php
require_once('connect.php');

$email      = $_POST['email'];
$pass       = $_POST['password'];

if ($email != '' && $pass != '')
    {
    $result = mysqli_query($con, 'SELECT * FROM users WHERE email = "'.$email.'"');
    $c = 0 
    while($row = mysqli_fetch_array($result))
        $c++;
    if ($c == 0)
        mysqli_query($con,"INSERT INTO users(email,password) VALUES('".$email."',"'.$pass.'")")
    $result = mysqli_query($con, 'SELECT id FROM users WHERE email = "'.$email.'"');
    }
?>