<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("smartict");
mysql_query("SET NAMES UTF8");

$strSQL1 = "SELECT * FROM product_type where pro_type_id ='".$_POST["droptype"]."'";
$objQuery1 = mysql_query($strSQL1);
$result = mysql_fetch_array($objQuery1);

$strSQL = "SELECT * FROM product WHERE pro_id = '".$_POST["txtid"]."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

if(trim($_POST["txtid"]) == "")
	{
		echo "Please input Product ID!";
		echo "<a href=\"Index.php\" class=\"btn btn-info\"><<กลับ</a>";
		exit();	
	}
else if($objResult)
{
		echo "Please Change your ID!";
		echo "<a href=\"Index.php\" class=\"btn btn-info\"><<กลับ</a>";
		exit();
}	
else if(trim($_POST["droptype"]) == "")
{
		echo "Please Choose Type!";
		echo "<a href=\"Index.php\" class=\"btn btn-info\"><<กลับ</a>";
		exit();
}	

$sub_dir="images/".$result["type_name"]."/";

$target_dir = $sub_dir;
$Str_new_file = explode(".",$_FILES['pic']['name']);

$dirtrue=$sub_dir.Date("dmy_His").".".$Str_new_file['1'];

$target_file = $target_dir .Date("dmy_His").".".$Str_new_file['1'];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Pls Change your img name!!";
	echo "<a href=\"product.php\" class=\"btn btn-info\"><<กลับ</a>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["pic"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
	echo "<a href=\"product.php\" class=\"btn btn-info\"><<กลับ</a>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG"&& $imageFileType != "JPEG" && $imageFileType != "GIF") {
    echo "<br>สามารถอัพไฟล์  JPG, JPEG, PNG & GIF เท่านั้น!.<br>";
	echo "<a href=\"product.php\" class=\"btn btn-info\"><<กลับ</a>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   echo "<br><h1 class=\"text-center\"><font color=red>Fail</font></h1><br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
    	
		$strSQL = "INSERT INTO product (pro_id,pro_name,picture,pro_type_id) VALUES('$_POST[txtid]','$_POST[txtproname]','".$dirtrue."','".$_POST["droptype"]."') ";
		$strSQL2 = "INSERT INTO detail_pro (detail,pro_id) VALUES('$_POST[txtdetail]','$_POST[txtid]')";

		$objQuery = mysql_query($strSQL);
		$objQuery2 = mysql_query($strSQL2);
		
		header('location: Setting_Success.php');

    } else {
        header('location: Setting_Error.php');
    }
}
?>
