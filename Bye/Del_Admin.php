<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("login");

$strSQL = "DELETE FROM admin ";
$strSQL .="WHERE Username = '".$_GET["Uname"]."' ";

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
