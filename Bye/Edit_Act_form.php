<!DOCTYPE html>
<head>
	<title>Edit-Act-form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>
</head>
<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("smartict");
	mysql_query("SET NAMES UTF8");
	
	$strSQL = "SELECT * FROM act_type WHERE act_id = '".$_GET["acte"]."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	
	if(!$objResult){
		echo "Not found act_id=".$_GET["acte"];
		echo "<a href=\"Index.php\" class=\"btn btn-info\"><<กลับ</a>";
	}
	
	else{
	?>
<body>
<form name="form1" method="post" action="Edit_Act_pro.php?acte=<?php echo $_GET["acte"];?>"><br />
  <div class="container">
			<div class="col-md-4 col-md-offset-4"> 
				<div class="panel panel-primary ">
								<div class="panel-heading">
    								<h3 class="panel-title">Edit Album</h3>
    							</div>
    							
    							<br />
    							<div class="form-group container-fluid">								
    								<label for="exampleInputname">ชื่ออัลบั้มกิจกรรม</label>
    								<input id="txtname" name="txtname" type="text" class="form-control" value="<?php echo $objResult["activity"];?>">
    							</div>
  								
  								<div class="form-group container-fluid">
    								<label for="exampleInputdetail">รายละเอียดกิจกรรม</label>
    								<textarea id="txtdetail" name="txtdetail" type="text" class="form-control" rows="3"><?php echo $objResult["detail"];?></textarea>
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