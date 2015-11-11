</a><!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Product-Preview</title>
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
	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db("test");
	mysql_query("SET NAMES UTF8");

	?>
	<article class="form-group container"><br /><br />
	<div class="table-responsive">
								<?php
									$strSQL = "SELECT * FROM View_Product";
									$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

								?>
  								<table id="table_id" class="table table-striped display">
									<thead>
										<tr>
											<th><div class="container-fluid"><center>รหัสผลิตภัณฑ์</center></div></th>
											<th><div class="container-fluid"><center>รูปภาพ</center></div></th>
											<th><div class="container-fluid"><center>ชื่อสินค้า</center></div></th>
											<th><div class="container-fluid"><center>ประเภทสินค้า</center></div></th>
											
											<th><div class="container-fluid"><center>Edit</center></div></th>
											<th><div class="container-fluid"><center>Delete</center></div></th>
										</tr>
									</thead>
									
									<tbody>
										<?php
											while($objResult = mysql_fetch_array($objQuery))
										{
										?>
										<tr>
											<th><div class="container-fluid"><center><br /><br /><?php echo $objResult["pro_id"];?></center></div></th>
											<td><center>
												<div style="width: 140px; height: 140px; overflow: hidden;">
												<img src="<?php echo $objResult["picture"];?>" class="img-thumbnail" alt="ไม่มีรูป">
    											</div>
    										</center></td>
											<td><div class="container-fluid"><center><br /><br /><?php echo $objResult["pro_name"];?></center></div></td>
											<td><div class="container-fluid"><center><br /><br /><?php echo $objResult["type_name"];?></center></div></td>
									
											<td><div class="container-fluid"><center><br /><br /><a href="Edit_Form.php?proID=<?php echo $objResult["pro_id"];?>">Edit</a></center></div></td>
											<td><div class="container-fluid"><center><br /><br /><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Delete.php?proid=<?php echo $objResult["pro_id"];?>&delPic=<?php echo $objResult["picture"] ; ?>'}">Delete</a></center></div></td>
										</tr>
										<?php
										}
										?>
							
										
									</tbody>
 								</table><br />
 								</div>
 								
 							<div class="col-md-6">
							<p>
  								<a class="btn btn-link" href="addpro_form.php" role="button">+ Add New Product</a>
  								<a class="btn btn-link" href="Index.php" role="button">- Back to Index</a>
							</p>
							</div>	
							
							
 					
	</article>
</body>
</html>