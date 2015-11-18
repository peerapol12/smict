<html>
<head>
<title>Edit-Gal-Pro</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("smartict");
mysql_query("SET NAMES UTF8");

$strSQL = "UPDATE activity SET ";
$strSQL .="pic_id = '".$_POST["txtname"]."' ";

$strSQL .="WHERE pic_id = '".$_GET["picid"]."' ";

	$objQuery = mysql_query($strSQL);
	
if($objQuery)
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