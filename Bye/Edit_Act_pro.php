<html>
<head>
<title>Edit-Act-Pro</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("test");
mysql_query("SET NAMES UTF8");

$strSQL = "UPDATE act_type SET ";
$strSQL .="activity = '".$_POST["txtname"]."' ";
$strSQL .=",detail = '".$_POST["txtdetail"]."' ";
$strSQL .="WHERE act_id = '".$_GET["acte"]."' ";

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