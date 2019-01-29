<?php
require_once('../include/connect.php');

$name	= $_POST['name'];
$pnum = $_POST['phonenumber'];
$email	= $_POST['email'];
$pizza	= $_POST['pizza'];
$address	= $_POST['address'];

echo $name;
echo $pnum;
echo $email;
print_r($pizza);
echo $address;

if ($email != '')
    {
    $result = mysqli_query($con, 'SELECT * FROM users WHERE email = "'.$email.'"');
    $c = 0 ;
    while($row = mysqli_fetch_array($result))
        $c++;
    echo $c;
    if ($c == 0)
        mysqli_query($con,"INSERT INTO users(name,email,address) VALUES('".$name."','".$email."','".$address."')");
        
    #p#rint_r($cons);
    $result = mysqli_query($con, 'SELECT id FROM users WHERE email = "'.$email.'"');
    $id = 0;
    while($row = mysqli_fetch_array($result))
        $id = $row['id'];
    $od = '';
    echo $id;
    foreach ($pizza as $value)
        {
        if ($od == '')
            $od = $value;
        else    
            $od = $od . ',' . $value;
        }
        print_r($od);
        print_r($id);
        print_r($address);
    mysqli_query($con,"INSERT INTO orders(userid,order_detail,delivery_adderss) VALUES(".$id.",'".$od."','".$address."')");
    //print_r($con);
    }

header('Location: ./');
?>