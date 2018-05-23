<?php 
	$link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den csdl");
	mysqli_query($link,"SET NAMES UTF8");
	mysqli_select_db($link,"dienhoa");
	
	$sql = "SELECT * FROM user where username = '".$_REQUEST["username"]."' and password = '".$_REQUEST["password"]."'";
	$result = mysqli_query($link,$sql);
	if(mysqli_num_rows($result) > 0) {
		header("Location: home.php");

	} else {
		header("Location: login.php");
	}
	mysqli_free_result($result);
	mysqli_close($link);
?>
