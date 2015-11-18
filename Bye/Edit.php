<html>
<head>
<title>Edit</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("smartict");
mysql_query("SET NAMES UTF8");

$strSQL = "UPDATE product SET ";
$strSQL .="pro_id = '".$_POST["txtproid"]."' ";
$strSQL .=",pro_name = '".$_POST["txtname"]."' ";
$strSQL .="WHERE pro_id = '".$_GET["proID"]."' ";

$strSQL2 = "UPDATE detail_pro SET ";
$strSQL2 .="detail = '".$_POST["txtdetail"]."' ";
$strSQL2 .=",pro_id = '".$_POST["txtproid"]."' ";
$strSQL2 .="WHERE pro_id = '".$_GET["proID"]."' ";

	$objQuery = mysql_query($strSQL);
	
if($objQuery)
{
	header('location: Setting_Success.php');
}
else
{
	header('location: Setting_Error.php');
}

	$objQuery2 = mysql_query($strSQL2);
	
if($objQuery2)
{
	header('location: Setting_Success.php');
}
else
{
	header('location: Setting_Error.php');
}

mysql_close($objConnect);
?>
</body>
</html>