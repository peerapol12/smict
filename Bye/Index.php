<!DOCTYPE html><head>	<meta charset="utf-8">	<title>Index</title>	<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />	<link rel="stylesheet" href="css/bootstrap.css"/>	<link rel="stylesheet" href="css/bootstrap-theme.css"/>	<link rel="stylesheet" href="css/jquery.dataTables.css"/>	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>	<script>$(document).ready( function () {$('#table_id').DataTable();} );</script>	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.7.2.min.js"><\/script>');</script>	<script type="text/javascript" src="js/jquery.main.js"></script>	<script type="text/javascript" src="js/jquery.dataTables.js"></script>	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]--></head>	<?php	mysql_connect("localhost","root","") or die(mysql_error());	mysql_select_db("test");	mysql_query("SET NAMES UTF8");		?><body>	<?php			session_start();			if(!empty($_SESSION["Name"]))	{?>	<div id="wrapper">		<div id="content">			<div class="c1">				<div class="controls">					<nav class="links">
						<!--<ul>							<li><a href="#" class="ico1">แจ้งเตือน<span class="num">3</span></a></li>  							<li><a href="#" class="ico2">ข้อความ<span class="num">3</span></a></li> 							 						</ul>-->
					</nav>					<div class="profile-box">						<span class="profile">							<a href="#" class="section">								<img class="image" src="images/img1.png" alt="image description" width="26" height="26" />								<span class="text-box">									Welcome									<strong class="name"><?php echo $_SESSION["Name"]; ?></strong>								</span>							</a>							<!--<a href="#" class="opener">opener</a>-->						</span>						<a href="JavaScript:if(confirm('Confirm Logout?')==true){window.location='Logout_Pro.php';}" class="btn-on">On</a>											</div>				</div>				<?php	}					else {						header('location: Fail_Pro.php');				}?>								<div class="tabs">					<div id="tab-1" class="tab">						<article class="form-group container-fluid">							<div class="text-section">								<h1>Dashboard</h1>								<p>ภาพรวม แสดงสินค้า เพิ่ม/ลบ สินค้า</p>							</div>							<br /><div class="table-responsive">								<?php									$strSQL = "SELECT * FROM View_Product";									$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");								?>  								<table id="table_id" class="table table-bordered table-striped display">									<thead>										<tr>											<th><div class="container-fluid"><center>รหัสผลิตภัณฑ์</center></div></th>											<th><div class="container-fluid"><center>รูปภาพ</center></div></th>											<th><div class="container-fluid"><center>ชื่อสินค้า</center></div></th>											<th><div class="container-fluid"><center>ประเภทสินค้า</center></div></th>																						<th><div class="container-fluid"><center>Edit</center></div></th>											<th><div class="container-fluid"><center>Delete</center></div></th>																				</tr>									</thead>																		<tbody>										<?php											while($objResult = mysql_fetch_array($objQuery))										{										?>										<tr>											<th><div class="container-fluid"><center><br /><br /><?php echo $objResult["pro_id"];?></center></div></th>											<td><center>												<div style="width: 140px; height: 140px; overflow: hidden;">												<img src="<?php echo $objResult["picture"];?>" class="img-thumbnail" alt="ไม่มีรูป">    											</div>    										</center></td>											<td><div class="container-fluid"><center><br /><br /><?php echo $objResult["pro_name"];?></center></div></td>											<td><div class="container-fluid"><center><br /><br /><?php echo $objResult["type_name"];?></center></div></td>																						<td><div class="container-fluid"><center><br /><br /><a href="Edit_Form.php?proID=<?php echo $objResult["pro_id"];?>">Edit</a></center></div></td>											<td><div class="container-fluid"><center><br /><br /><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Delete.php?proid=<?php echo $objResult["pro_id"];?>&delPic=<?php echo $objResult["picture"] ; ?>'}">Delete</a></center></div></td>																					</tr>										<?php										}										?>																										</tbody> 								</table> 															</div>													</article>					</div>										<div id="tab-3" class="tab">						<article class="form-group container-fluid">							<div class="text-section">								<h1>Product Add</h1>								<p>เพิ่มสินค้า ใส่รายละเอียด</p>							</div>														<div class="panel panel-primary">								<div class="panel-heading">    								<h3 class="panel-title">เพิ่มสินค้า</h3>    							</div>    							    							<br />    							<form action="addpro.php" name="frmAdd" method="post" enctype="multipart/form-data">    							<div class="form-group container-fluid">    								<div class="row">  										<div class="col-md-4">    										<label for="exampleInputEmail1">รหัสผลิตภัณฑ์</label>    										<input type="text" class="form-control" name="txtid" id="txtid" placeholder="Product ID :">  										</div>    								</div>  								</div>  								    							<div class="form-group container-fluid">    								<div class="row">  										<div class="col-md-4">    										<label for="exampleInputEmail1">ชื่อสินค้า</label>    										<input type="text" class="form-control" name="txtproname" id="txtproname" placeholder="Product Name :">  										</div>    								</div>  								</div>  								  								<div class="form-group container-fluid">    								<div class="row">  										<div class="col-md-4">    										<label for="exampleInput">ประเภทสินค้า</label>    																					    											<select name="droptype">													<option value=""><-- Please Select Item --></option>													
													 <?php														$strSQL = "SELECT * FROM product_type";														$objQuery = mysql_query($strSQL);														while($objResuut = mysql_fetch_array($objQuery))													{													?>													<option value="<?php echo $objResuut["pro_type_id"];?>"><?php echo $objResuut["pro_type_id"]." - ".$objResuut["type_name"];?></option>													<?php													}													?>		  										</select>	  											  											</div>  										</div>  									</div>  								  								<div class="form-group">  									  									<div class="container-fluid">    									<label for="exampleInputFile">File input</label>    									<input type="file" name="pic" id="pic">    									<br />    									ขนาดไม่เกิน  1 MB    									    								</div>    								  								</div>  								</div>  								  								<div class="panel panel-primary">								<div class="panel-heading">    								<h3 class="panel-title">รายละเอียด</h3>    							</div>    							    							<div class="form-group">  									<div class="container-fluid">   										<br />   										<label for="exampleInput">รายละเอียดสินค้า</label>   										<input type="text" class="form-control" name="txtdetail" id="txtdetail" placeholder="Description :">    									  									</div>  									<br />  								</div>  																					<div class="row">  								<div class="col-md-6 col-md-offset-5">								<p>  									<button type="submit" name="accept" value="submit" class="btn btn-primary btn-lg">ตกลง</button>  									<a class="btn btn-default btn-lg" href="Index.php" role="button">ยกเลิก</a>								</p>								</div>							</div>								</form>							<br />						</article>					</div>										<div id="tab-4" class="tab">						<article class="form-group container-fluid">							<div class="text-section">								<h1>Activity</h1>								<p>จัดการกิจกรรม แฟ้มภาพกิจกรรม</p>							</div>								<div class="row">  								<div class="col-md-6 col-md-offset-10">  								  								<br />								<p>  									<a class="btn btn-link" href="Add_Act.php" role="button">Add New Activity</a>								</p>									</div>								</div>								<br /><div class="table-responsive">								<?php									$strSQL = "SELECT * FROM act_type";									$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");								?>  								<table id="table_id" class="table table-bordered table-striped display">									<thead>										<tr>											<th><div class="container-fluid"><center>ลำดับกิจกรรม</center></div></th>											<th><div class="container-fluid"><center>กิจกรรม</center></div></th>											<th><div class="container-fluid"><center>รายละเอียด</center></div></th>																						<th><div class="container-fluid"><center>Edit</center></div></th>											<th><div class="container-fluid"><center>Gallery</center></div></th>											<th><div class="container-fluid"><center>Delete</center></div></th>																				</tr>									</thead>																		<tbody>										<?php											while($objResult = mysql_fetch_array($objQuery))										{										?>										<tr>											<th><div class="container-fluid"><center><?php echo $objResult["act_id"];?></center></div></th>											<th><div class="container-fluid"><center><?php echo $objResult["activity"];?></center></div></th>											<td><div class="container-fluid"><center><?php echo $objResult["detail"];?></center></div></td>																						<td><div class="container-fluid"><center><a href="Edit_Act_form.php?acte=<?php echo $objResult["act_id"];?>">Edit</a></center></div></td>											<td><div class="container-fluid"><center><a href="Gallery_Form.php?actg=<?php echo $objResult["act_id"];?>">Upload</a></center></div></td>											<td><div class="container-fluid"><center><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Del_Act.php?Actt=<?php echo $objResult["act_id"];?>';}">Delete</a></center></div></td>																					</tr>										<?php										}										?>																										</tbody> 								</table>																								</article>					</div>										<div id="tab-8" class="tab">						<article class="form-group container-fluid">							<div class="text-section">								<h1>Admin Set</h1>								<p>จัดการ Admin/เพิ่ม Accout</p>							</div>								<div class="row">  								<div class="col-md-6 col-md-offset-10">  								  								<br />								<p>  									<a class="btn btn-link" href="Register_Pro.php" role="button">Register New Admin</a>								</p>									</div>								</div>								<br /><div class="table-responsive">								<?php									mysql_connect("localhost","root","") or die(mysql_error());									mysql_select_db("login");																		$strSQL = "SELECT * FROM admin";									$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");								?>  								<table id="table_id" class="table table-bordered table-striped display">									<thead>										<tr>											<th><div class="container-fluid"><center>Username</center></div></th>											<th><div class="container-fluid"><center>Name</center></div></th>											<th><div class="container-fluid"><center>Edit</center></div></th>											<th><div class="container-fluid"><center>Delete</center></div></th>																				</tr>									</thead>																		<tbody>										<?php											while($objResult = mysql_fetch_array($objQuery))										{										?>										<tr>											<th><div class="container-fluid"><center><br /><?php echo $objResult["Username"];?></center></div></th>											<th><div class="container-fluid"><center><br /><?php echo $objResult["Name"];?></center></div></th>																						<td><div class="container-fluid"><center><br /><a href="Update_Admin_Form.php?UName=<?php echo $objResult["Username"];?>">Edit</a></center></div></td>											<td><div class="container-fluid"><center><br /><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='Del_Admin.php?Uname=<?php echo $objResult["Username"];?>';}">Delete</a></center></div></td>																					</tr>										<?php										}										?>																										</tbody> 								</table>								<!--<form action="Setting_Process.php" name="frmEdit" method="post">-->															<br />						</article>					</div>				</div>			</div>		</div>		<aside id="sidebar">			<strong class="logo"><a href="#">lg</a></strong>			<ul class="tabset buttons">				<li class="active">					<a href="#tab-1" class="ico1"><span>Dashboard</span><em></em></a>					<span class="tooltip"><span>ภาพรวม</span></span>				</li>								<li>					<a href="#tab-3" class="ico3"><span>Pages</span><em></em></a>					<span class="tooltip"><span>จ้ดการสินค้า</span></span>				</li>								<li>					<a href="#tab-4" class="ico2"><span>Pages</span><em></em></a>					<span class="tooltip"><span>กิจกรรม</span></span>				</li>								<li>					<a href="#tab-8" class="ico8"><span>Settings</span><em></em></a>					<span class="tooltip"><span>Settings</span></span>				</li>			</ul>			<span class="shadow"></span>		</aside>	</div>	</div></body></html>