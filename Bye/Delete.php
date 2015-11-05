<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("test");

$strSQL = "DELETE FROM product ";
$strSQL .="WHERE pro_id = '".$_GET["proid"]."' ";
$strSQL2 = "DELETE FROM detail_pro ";
$strSQL2 .="WHERE pro_id = '".$_GET["proid"]."' ";

$objQuery = mysql_query($strSQL);

if($objQuery)
{
	unlink("".$_GET["delPic"]."");
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
