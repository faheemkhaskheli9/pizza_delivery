<?php
require_once('connect.php');

$email      = $_POST['email'];
$pass       = $_POST['password'];

if ($email != '' && $pass != '')
    {
    $result = mysqli_query($con, 'SELECT * FROM users WHERE email = "'.$email.'" AND password = "'.$pass.'"');
    $c = 0 
    while($row = mysqli_fetch_array($result))
        $c++;
    if ($c == 0)
        echo 'Wrong Email or Password';
    else if ($c == 1)
        echo 'Done';
    }
?>