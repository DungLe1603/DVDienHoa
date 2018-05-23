<?php


	$madh= $_POST["madh"];
	$masp = $_POST["masp"];
	$nguoidat = $_POST["nguoidat"];
	$sdtdat = $_POST["sdtdat"];
	$nguoinhan = $_POST["nguoinhan"];
	$sdtnhan = $_POST["sdtnhan"];
	$diachi= $_POST["diachi"];
	$thoigian= $_POST["thoigian"];
	$dongia = $_POST["dongia"];
	var_dump("$madh");

	$conn =  mysqli_connect("localhost", "root","") or die("Khong the ket noi csdl");
	mysqli_query($conn, "SET NAMES UTF8");
	mysqli_select_db($conn,"dienhoa");
	
	 $sql= "UPDATE donhang SET  masp='$masp', nguoidat='$nguoidat', sdtnguoidat='$sdtdat', nguoinhan='$nguoinhan', sdtnguoinhan='$sdtnhan', diachinhan='$diachi', thoigian='$thoigian', dongia='$dongia' WHERE madh='$madh'";
	
	if (mysqli_query($conn, $sql)) {
	    echo "Cập nhật thành công";
	    header("Location: home.php");
	} else {
	    echo "Có lỗi xảy ra " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>
