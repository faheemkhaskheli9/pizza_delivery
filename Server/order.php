<?php
require_once('connect.php');

$email      = $_POST['email'];
$pnum       = $_POST['pnum'];
$pizza      = $_POST['pizza'];
$address    = $_POST['address'];

if ($email != '')
    {
    $result = mysqli_query($con, 'SELECT * FROM users WHERE email = "'.$email.'"');
    $c = 0 
    while($row = mysqli_fetch_array($result))
        $c++;
    if ($c == 0)
        mysqli_query($con,"INSERT INTO users(name,phonenumber,email,address) VALUES('".$name."','".$pnum."','".$email."','".$address."')")
    $result = mysqli_query($con, 'SELECT id FROM users WHERE email = "'.$email.'"');
    $id = 0;
    while($row = mysqli_fetch_array($result))
        $id = $row['id'];
    $od = '';
    foreach ($pizza as $value)
        {
        if $od == '')
            $od = $value;
        else    
            $od = $od . ',' . $value;
        }
    mysqli_query($con,"INSERT INTO orders(userid,order_detail,delivery_address) VALUES(".$id.",'".$od."','".$address."')");
    }
?>