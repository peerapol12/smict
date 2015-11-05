<!DOCTYPE html>
<head>
	<title>Edit-Admin-form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>
</head>
<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("login");
	
	$strSQL = "SELECT * FROM admin WHERE Username = '".$_GET["UName"]."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	
	if(!$objResult){
		echo "Not found Username=".$_GET["UName"];
		echo "<a href=\"Index.php\" class=\"btn btn-info\"><<กลับ</a>";
	}
	
	else{
	?>
<body>
<form name="form1" method="post" action="Update_Admin_Pro.php?UName=<?php echo $_GET["UName"];?>"><br />
  <div class="container">
			<div class="col-md-4 col-md-offset-4"> 
				<div class="panel panel-primary ">
								<div class="panel-heading">
    								<h3 class="panel-title">Edit Admin Form</h3>
    							</div>
    							
    							<br />
    							<div class="form-group container-fluid">								
    								<label for="exampleInputUN">Change Username</label>
    								<input id="UID" name="UID" type="text" class="form-control" value="<?php echo $objResult["Username"];?>">
    							</div>
  								
  								<div class="form-group container-fluid">
    								<label for="exampleInputPassword">Change Password<</label>
    								<input id="PW" name="PW" type="password" class="form-control" value="<?php echo $objResult["Password"];?>">
  								</div>
  								<div class="form-group container-fluid">								
    								<label for="exampleInputName">Change Name</label>
    								<input id="txtName" name="txtName" type="text" class="form-control" value="<?php echo $objResult["Name"];?>">
    							</div>	
    							<div class="form-group container-fluid">
    								<label for="exampleInputPassword1">Confirm Password</label>
    								<input id="CP" name="CP" type="password" class="form-control" placeholder="ยืนยัน Password :">
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