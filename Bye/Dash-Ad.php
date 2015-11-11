</a><!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Activity-Preview</title>
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
	
	<article class="form-group container"><br /><br />
		<br /><div class="table-responsive">
								<?php
									mysql_connect("localhost","root","") or die(mysql_error());
									mysql_select_db("login");
									
									$strSQL = "SELECT * FROM admin";
									$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

								?>
  								<table id="table_id" class="table table-striped display">
									<thead>
										<tr>
											<th><div class="container-fluid"><center>Username</center></div></th>
											<th><div class="container-fluid"><center>Name</center></div></th>

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
											<th><div class="container-fluid"><center><br /><?php echo $objResult["Username"];?></center></div></th>
											<th><div class="container-fluid"><center><br /><?php echo $objResult["Name"];?></center></div></th>
											
											<td><div class="container-fluid"><center><br /><a href="Update_Admin_Form.php?UName=<?php echo $objResult["Username"];?>">Edit</a></center></div></td>
											<td><div class="container-fluid"><center><br /><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Del_Admin.php?Uname=<?php echo $objResult["Username"];?>';}">Delete</a></center></div></td>
											
										</tr>
										<?php
										}
										?>
							
										
									</tbody>
 								</table>
 		</div>
 					
		<div class="col-md-6">
		<br /><p>
  			<a class="btn btn-link" href="Register_Pro.php" role="button">+ Add New Admin</a>
  			<a class="btn btn-link" href="Index.php" role="button">- Back to Index</a>
		</p>
		</div>
	</article>
</body>
</html>