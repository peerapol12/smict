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
	<?php
	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db("smartict");
	mysql_query("SET NAMES UTF8");

	?>
	<article class="form-group container"><br /><br />
		<div class="table-responsive">
		<?php
			$strSQL = "SELECT * FROM act_type";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

		?>
  			<table id="table_id" class="table table-striped display">
			<thead>
				<tr>
					<th><div class="container-fluid"><center>ลำดับกิจกรรม</center></div></th>
					<th><div class="container-fluid"><center>กิจกรรม</center></div></th>
					<th><div class="container-fluid"><center>รายละเอียด</center></div></th>
					
					<th><div class="container-fluid"><center>Edit</center></div></th>
					<th><div class="container-fluid"><center>Gallery</center></div></th>
					<th><div class="container-fluid"><center>Delete</center></div></th>		
											
				</tr>
			</thead>
									
			<tbody>
			<?php
				while($objResult = mysql_fetch_array($objQuery))
										{
			?>
				<tr>
					<th><div class="container-fluid"><center><?php echo $objResult["act_id"];?></center></div></th>
					<th><div class="container-fluid"><center><?php echo $objResult["activity"];?></center></div></th>
					<td><div class="container-fluid"><center><?php echo $objResult["detail"];?></center></div></td>
					
					<td><div class="container-fluid"><center><a href="Edit_Act_form.php?acte=<?php echo $objResult["act_id"];?>">Edit</a></center></div></td>
					<td><div class="container-fluid"><center><a href="Gallery_Form.php?actg=<?php echo $objResult["act_id"];?>">Upload</a></center></div></td>
					<td><div class="container-fluid"><center><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Del_Act.php?Actt=<?php echo $objResult["act_id"];?>';}">Delete</a></center></div></td>			
				</tr>
			<?php
			}
			?>
			
			</tbody>
 			</table>
 		</div>
 					
		<div class="col-md-6">
		<br /><p>
  			<a class="btn btn-link" href="Add_Act.php" role="button">+ Add New Activity</a>
  			<a class="btn btn-link" href="Index.php" role="button">- Back to Index</a>
		</p>
		</div>
	</article>
</body>
</html>