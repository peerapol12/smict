<!DOCTYPE html>
<head>
	<title>Edit-form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>
</head>
<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("smartict");
	mysql_query("SET NAMES UTF8");
	
	$strSQL = "SELECT * FROM product WHERE pro_id = '".$_GET["proID"]."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	
	$strSQL2 = "SELECT * FROM detail_pro WHERE pro_id = '".$_GET["proID"]."' ";
	$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
	$objResult2 = mysql_fetch_array($objQuery2);
	
	if(!$objResult){
		echo "Not found pro_id=".$_GET["proID"];
		echo "<a href=\"Index.php\" class=\"btn btn-info\"><<กลับ</a>";
	}
	
	else{
	?>
<body>
<form name="form1" method="post" action="Edit.php?proID=<?php echo $_GET["proID"];?>"><br />
  <div class="container">
			<div class="col-md-4 col-md-offset-4"> 
				<div class="panel panel-primary ">
								<div class="panel-heading">
    								<h3 class="panel-title">Edit Form</h3>
    							</div>
    							
    							<br />
    							<div class="form-group container-fluid">								
    								<label for="exampleInputID">Edit Product ID</label>
    								<input id="txtproid" name="txtproid" type="text" class="form-control" value="<?php echo $objResult["pro_id"];?>">
    							</div>
  								
  								<div class="form-group container-fluid">
    								<label for="exampleInputName">Edit Name</label>
    								<input id="txtname" name="txtname" type="text" class="form-control" value="<?php echo $objResult["pro_name"];?>">
  								</div>
  								<div class="form-group container-fluid">								
    								<label for="exampleInputDetail">Edit Detail</label>
    								<textarea id="txtdetail" name="txtdetail" type="text" class="form-control" rows="3"><?php echo $objResult2["detail"];?></textarea>
    								
    							</div>
    							<br />
  								<div class="form-group container-fluid">
    								<center><input type="submit" value="Submit"/></center><br />
    								<center><a href="Index.php">Back</a></center>
  								</div>
	<?php
	}
	?>
</form>
</body>
</html>