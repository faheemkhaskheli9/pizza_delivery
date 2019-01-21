<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pakistani Pizza Delivery</title>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../script.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="page">

<?php require_once('../include/header.html');?>

<?php require_once('../include/menubar.html');?>
<content>

<?php
require_once('http://192.168.10.86/APIconnect.php');
$result = pizza();
?>
<table cellpadding="10" cellspacing="10">
<tr><th width="200"><h2>ID</h2></th> <th width="400"><h2>Name</h2></th> <th width="200"><h2>Price</h2></th> <th></th></tr>
<?php
while($row = mysqli_fetch_array($result))
	{
?>
	<tr>
	<td width="200">
    <div><h2><?php 
    echo $row['id']
    ?></h2></div>
    </td>
    <td  width="400">
    <div><?php 
    echo $row['name'];
    ?>
    </div>
    </td>
	<td width="200">
    <div><b><?php 
    echo $row['price'];
    ?></b></div>
    </td>    
    </tr>
<?php
	}
echo '</table>';
?>

</content>

<?php
require_once('../include/sidebar.html');
require_once('../include/footer.html');
?>

</div>
</body>
</html>