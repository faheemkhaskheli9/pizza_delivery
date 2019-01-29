<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pakistani Pizza Delivery</title>

<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../script.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="../style.css" rel="stylesheet" type="text/css">
<style>
a
{
text-decoration:none;
color:#000000;
padding:20px;
}
a:hover
{
color:#FF0000;
}
</style>
</head>

<body>
<div id="page">

<?php
require_once('../include/header.html');
?>

<?php require_once('../include/menubar.html');?>
<content>
<form action="placeorder.php" method = "POST">
<table>
<tr>
	<td>First name : </td>
	<td><input type="text" name="name" ></td>
</tr>
<tr>
	<td>Phone Number : </td>
	<td><input type="text" name="phonenumber" ></td>
</tr>
<tr>
	<td>Email : </td>
	<td><input type="email" name="email" ></td>
</tr>

<tr>
	<td>Address : </td>
	<td><input type="test" name="address" ></td>
</tr>

<?php
require_once('../include/connect.php');
$result = mysqli_query($con, 'SELECT * FROM pizzas');
while($row = mysqli_fetch_array($result))
{
?>
<tr>
	<td><input type="checkbox" name="pizza[]" value="<?php echo $row['id'];?>"></td>
	<td> <?php echo $row['name'];?> </td>
</tr>	
<?php
}
?>
<tr>
	<td colspan="2"><center>	<input type="submit" value="Submit"></center></td>
</tr>
</table>
</form>
</content>

<?php
require_once('../include/sidebar.html');
require_once('../include/footer.html');
?>

</div>
</body>
</html>