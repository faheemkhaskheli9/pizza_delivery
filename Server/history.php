<?php
require_once('connect.php');
$result = mysqli_query($con, 'SELECT * FROM orders');
echo json_encode($result);
?>