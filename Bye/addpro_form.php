</a><!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>addpro-form</title>
	<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" href="css/jquery.dataTables.css"/>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>$(document).ready( function () {$('#table_id').DataTable();} );</script>
	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.7.2.min.js"><\/script>');</script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.js"></script>
</head>
<body>
	<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("test");
	mysql_query("SET NAMES UTF8");
	
	?>						
							<article class="form-group container">	
								<br /><div class="panel panel-primary">
								<div class="panel-heading">
    								<h3 class="panel-title"><center>เพิ่มสินค้า</center></h3>
    							</div>
    							
    							<br />
    							<form action="addpro.php" name="frmAdd" method="post" enctype="multipart/form-data">
    							<div class="form-group container-fluid">
    								<div class="row">
  										<div class="col-md-4">
    										<label for="exampleInputID">รหัสผลิตภัณฑ์</label>
    										<input type="text" class="form-control" name="txtid" id="txtid" placeholder="Product ID :">
  										</div>
    								</div>
  								</div>
  								
    							<div class="form-group container-fluid">
    								<div class="row">
  										<div class="col-md-4">
    										<label for="exampleInputName">ชื่อสินค้า</label>
    										<input type="text" class="form-control" name="txtproname" id="txtproname" placeholder="Product Name :">
  										</div>
    								</div>
  								</div>
  								
  								<div class="form-group container-fluid">
    								<div class="row">
  										<div class="col-md-4">
    										<label for="exampleInputDetail">ประเภทสินค้า</label>
    										
											
    											<select name="droptype">
													<option value=""><-- Please Select Item --></option>
													
													 <?php
														$strSQL = "SELECT * FROM product_type";
														$objQuery = mysql_query($strSQL);
														while($objResuut = mysql_fetch_array($objQuery))
													{
													?>
													<option value="<?php echo $objResuut["pro_type_id"];?>"><?php echo $objResuut["pro_type_id"]." - ".$objResuut["type_name"];?></option>
													<?php
													}
													?>
		  										</select>
	
  											
  											</div>
  										</div>
  									</div>
  								
  								<div class="form-group">
  									
  									<div class="container-fluid">
    									<label for="exampleInputFile">File input</label>
    									<input type="file" name="pic" id="pic">
    									<br />
    									ขนาดไม่เกิน  1 MB
    									
    								</div>
    								
  								</div>
  								</div>
  								
  								<div class="panel panel-primary">
								<div class="panel-heading">
    								<h3 class="panel-title"><center>รายละเอียด</center></h3>
    							</div>
    							
    							<div class="form-group">
  									<div class="container-fluid">
   										<br />
   										<label for="exampleInput">รายละเอียดสินค้า</label>
   										<input type="text" class="form-control" name="txtdetail" id="txtdetail" placeholder="Description :">
    									
  									</div>
  									<br />
  								</div>
  							
							
							<div class="row">
  								<div class="col-md-6 col-md-offset-5">

								<p>
  									<button type="submit" name="accept" value="submit" class="btn btn-primary btn-lg">ตกลง</button>
  									<a class="btn btn-default btn-lg" href="Index.php" role="button">ยกเลิก</a>
								</p>
								</div>
							</div>	
							</form>
							<br />
						</article>
</body>
</html>