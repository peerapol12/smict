<html>
<head>
<title>Edit</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("smartict");
mysql_query("SET NAMES UTF8");


$sub_dir="product_test/";
$target_dir = $sub_dir;
$Str_new_file = explode(".",$_FILES['pic']['name']);

$dirtrue=$sub_dir.Date("dmy_His").".".$Str_new_file['1'];

$target_file = $target_dir .Date("dmy_His").".".$Str_new_file['1'];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {

$strSQL = "UPDATE product SET ";
$strSQL .="pro_id = '".$_POST["txtproid"]."' ";
$strSQL .=",pro_name = '".$_POST["txtname"]."' ";
$strSQL .=",picture = '".$dirtrue."' ";
$strSQL .="WHERE pro_id = '".$_GET["proID"]."' ";

$strSQL2 = "UPDATE detail_pro SET ";
$strSQL2 .="detail = '".$_POST["txtdetail"]."' ";
$strSQL2 .=",pro_id = '".$_POST["txtproid"]."' ";
$strSQL2 .="WHERE pro_id = '".$_GET["proID"]."' ";

	$objQuery = mysql_query($strSQL);
	
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