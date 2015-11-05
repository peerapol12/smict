<?php

	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db("login");
	
	$user = $_POST["UN"];
	$pass = $_POST["PW"];
	
	$sql = "SELECT * FROM admin where username ='".$user."' AND `password`='".$pass."'";
	$query = mysql_query($sql);
	
	$result = mysql_fetch_array($query);
	
	if(!empty($result))
	{
		session_start();
		$_SESSION["Name"]=$result["Name"];
		
		header('location: Index.php');
	}
	
	else{
		header('location: Fail_Pro.php');
	}
	
?>
