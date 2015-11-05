<!DOCTYPE html>
<head>
<title>Update-Admin-Pro</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("login");

$strSQL = "UPDATE admin SET ";
$strSQL .="Username = '".$_POST["UID"]."' ";

if(trim($_POST["UID"]) == "")
	{
		echo "Please input Username!";
		echo "<a href=\"Index.php\" class=\"btn btn-info\"><<กลับ</a>";
		exit();	
	}
	
$strSQL .=",Password = '".$_POST["PW"]."' ";
$strSQL .=",Name = '".$_POST["txtName"]."' ";

if($_POST["CP"] != $_POST["PW"])
	{
		echo "Password not Match!";
		echo "<a href=\"Index.php\" class=\"btn btn-info\"><<กลับ</a>";
		exit();
	}

$strSQL .="WHERE Username = '".$_GET["UName"]."' ";									
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