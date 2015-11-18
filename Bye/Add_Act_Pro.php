<?php
	mysql_connect("localhost","root","");
	mysql_select_db("smartict");
	mysql_query("SET NAMES UTF8");
	
	if(trim($_POST["txtAct"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}
	
	$strSQL = "SELECT * FROM act_type WHERE activity = '".trim($_POST['txtAct'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
			echo "This name has already been used!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO act_type (activity,detail) VALUES ('".$_POST["txtAct"]."','".$_POST["txtdetail"]."')";
		$objQuery = mysql_query($strSQL);
		
		header('location: Setting_Success.php');
		
	}

?>