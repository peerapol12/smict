<!DOCTYPE html>
<head>
	<title>Add-Act</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>
</head>
<body>
<form name="form1" method="post" action="Add_Act_Pro.php"><br />
  <div class="container">
			<div class="col-md-4 col-md-offset-4"> 
				<div class="panel panel-primary ">
								<div class="panel-heading">
    								<h3 class="panel-title">เพิ่มกิจกรรม</h3>
    							</div>
    							
    							<br />
    							<div class="form-group container-fluid">								
    								<label for="exampleInputAct">ชื่อแฟ้มกิจกรรม</label>
    								<input id="txtAct" name="txtAct" type="text" class="form-control" placeholder="ใส่ชื่อกิจกรรม :">
    							</div>
  								
  								<div class="form-group container-fluid">
    								<label for="exampleInputPassword1">รายละเอียด</label>
    								<textarea id="txtdetail" name="txtdetail" type="text" class="form-control" rows="3" placeholder="เพิ่มรายละเอียด :"></textarea>
  								</div>
  								
    							<br />
  								<div class="form-group container-fluid">
    								<center><input type="submit" value="Submit"/></center><br />
    								<center><a href="Index.php">Back</a></center>
  								</div>

</form>
</body>
</html>