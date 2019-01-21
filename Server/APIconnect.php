<?php

$server = "192.168.10.87";
$con = mysqli_connect($server,"root","vagrant","pizza");
if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }


function register()
{
    if ($email != '' && $pass != '')
    {
    $result = mysqli_query($con, 'SELECT * FROM users WHERE email = "'.$email.'"');
    $c = 0 
    while($row = mysqli_fetch_array($result))
        $c++;
    if ($c == 0)
        {
        mysqli_query($con,"INSERT INTO users(email,password) VALUES('".$email."',"'.$pass.'")")
        echo 'Done';
        }
    }
}

function history()
{
    $result = mysqli_query($con, 'SELECT * FROM orders');
    return $result;
}

function login($email,$pass)
{
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
}
function order($email,$pnum,$pizza,$address)
{
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
        echo 'Done';
        }    
}
function pizza()
{
    $result = mysqli_query($con, 'SELECT * FROM pizzas');
    return $result;
}
?>