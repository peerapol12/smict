<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("smartict");

$strSQL = " DELETE FROM activity ";
$strSQL .=" WHERE pic_id = '".$_GET["picid"]."' ";
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

mysql_close($objConnect);

?>
