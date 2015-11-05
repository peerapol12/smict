<!DOCTYPE html>
<head>
	<title>Register</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>
</head>
<body>
<form name="form1" method="post" action="Register_Process.php"><br />
  <div class="container">
			<div class="col-md-4 col-md-offset-4"> 
				<div class="panel panel-primary ">
								<div class="panel-heading">
    								<h3 class="panel-title">Register Form</h3>
    							</div>
    							
    							<br />
    							<div class="form-group container-fluid">								
    								<label for="exampleInputEmail1">Username</label>
    								<input id="txtUsername" name="txtUsername" type="text" class="form-control" placeholder="กรอก Username :">
    							</div>
  								
  								<div class="form-group container-fluid">
    								<label for="exampleInputPassword1">Password</label>
    								<input id="txtPassword" name="txtPassword" type="password" class="form-control" placeholder="กรอก Password :">
  								</div>
  								<div class="form-group container-fluid">
    								<label for="exampleInputPassword1">Confirm Password</label>
    								<input id="txtConPassword" name="txtConPassword" type="password" class="form-control" placeholder="ยืนยัน Password :">
  								</div>
  								<div class="form-group container-fluid">								
    								<label for="exampleInputEmail1">Name</label>
    								<input id="txtName" name="txtName" type="text" class="form-control" placeholder="ชื่อผู้ใช้ :">
    							</div>
    							<br />
  								<div class="form-group container-fluid">
    								<center><input type="submit" value="Submit"/></center><br />
    								<center><a href="Index.php">Back</a></center>
  								</div>

</form>
</body>
</html>