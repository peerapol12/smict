<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Gal-Form</title>
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

	$strSQL = "SELECT * FROM act_type WHERE act_id = '".$_GET["actg"]."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	?>
	
	<br /><article class="form-group container">
	<div class="text-section">
		<div class="panel panel-primary">
			<div class="panel-heading">
    			<center><h3 class="panel-title">Album : <?php echo $objResult["act_id"];?></h3></center>	
    		</div>
    							
    	<div class="form-group">
  			<div class="container-fluid">
   				<br />
   				<center><label for="exampleInput">Activity : <?php echo $objResult["activity"];?></label></center>				
  			</div>
    	</div>					
   		</div>
   	</div>
   	</article>
   	
   	<div class="table-responsive container">
		<?php
		
		$strSQL2 = "SELECT * FROM activity WHERE act_id = '".$_GET["actg"]."' ";
		$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
	
		?>
		
  		<table id="table_id" class="table table-bordered table-striped display">
			<thead>
				<tr>
					<th><div class="container-fluid"><center>ชื่อรูปภาพ</center></div></th>
					<th><div class="container-fluid"><center>รูปภาพ</center></div></th>
											
					<th><div class="container-fluid"><center>Edit</center></div></th>
					<th><div class="container-fluid"><center>Delete</center></div></th>
										
				</tr>
		</thead>
			<tbody>
				<?php
					while($objResult2 = mysql_fetch_array($objQuery2))
					{
				?>
				<tr>
					<th><div class="container-fluid"><center><br /><br /><?php echo $objResult2["pic_id"];?></center></div></th>
					<td><center>
						<div style="width: 140px; height: 140px; overflow: hidden;">
							<img src="<?php echo $objResult2["picname"];?>" class="img-thumbnail" alt="ไม่มีรูป">
    					</div>
    				</center></td>
											
					<td><div class="container-fluid"><center><br /><br /><a href="Edit_Gal_Form.php?picid=<?php echo $objResult2["pic_id"];?>">Edit</a></center></div></td>
					<td><div class="container-fluid"><center><br /><br /><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Del_Gal.php?picid=<?php echo $objResult2["pic_id"];?>&delPic=<?php echo $objResult2["picname"] ; ?>'}">Delete</a></center></div></td>
											
				</tr>
				<?php
					}
				?>
					
			</tbody>
 		</table>
 					
		<div class="row">
  			<br /><p>
  				<a class="btn btn-link" href="Create_Gal.php?actg=<?php echo $_GET["actg"];?>" role="button">+ Add New Gallery</a>
  				<a class="btn btn-link" href="Index.php" role="button">- Back to Index</a>
			</p>				
		</div>
	
</body>
</html>