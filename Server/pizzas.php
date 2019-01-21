<?php
require_once('connect.php');
$result = mysqli_query($con, 'SELECT * FROM pizzas');
echo json_encode($result);
?>