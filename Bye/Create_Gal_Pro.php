
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("smartict");
mysql_query("SET NAMES UTF8");

$strSQL = "SELECT * FROM activity WHERE pic_id = '".$_POST["txtgal"]."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

if(trim($_POST["txtgal"]) == "")
	{
		header('location: Setting_Error.php');	
	}
else if($objResult)
	{
		header('location: Setting_Error.php');
	}	
$sub_dir="Act_test/";
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

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   echo "<br><h1 class=\"text-center\"><font color=red>Fail</font></h1><br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
    	
		$strSQL = "INSERT INTO activity (pic_id,picname,act_id) VALUES('$_POST[txtgal]','".$dirtrue."','".$_GET["actg"]."') ";
		$objQuery = mysql_query($strSQL);

		header('location: Setting_Success.php');

    } else {
        header('location: Setting_Error.php');
    }
}
?>
