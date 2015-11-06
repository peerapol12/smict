<!DOCTYPE html>
<head>
	<title>Add-Gallery</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>
</head>
<body>
	
<form name="formadd" method="post" action="Create_Gal_Pro.php?actg=<?php echo $_GET["actg"];?>" enctype="multipart/form-data"><br />
  <div class="container">
	<div class="col-md-4 col-md-offset-4"> 
	<div class="panel panel-primary ">
		<div class="panel-heading">
    		<h3 class="panel-title">Add Gallery : <?php echo $_GET["actg"];?></h3>
    	</div>
    							
    	<br /><div class="form-group container-fluid">								
    		<label for="exampleInputAct">ชื่อรูปภาพ</label>
    		<input id="txtgal" name="txtgal" type="text" class="form-control" placeholder="ตั้งชื่อรูป :">
    	</div>
    	
    	<div class="form-group">
  			<div class="container-fluid">
    		<label for="exampleInputFile">Gallery Upload</label>
    		<input type="file" name="pic" id="pic">
    		<br />
    			ขนาดไม่เกิน  1 MB
    		</div>
    	</div>
    	
    	<br />
  		<div class="form-group">
    		<center><input type="submit" value="Submit"/> or <a href="Index.php">Back</a></center>
  		</div>
	</div>
	</div>
	</div>
</form>

</body>
</html>