<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("smartict");

$strSQL = "DELETE FROM act_type ";
$strSQL .="WHERE act_id = ".$_GET["Actt"];

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
