<?php


	$madh= $_POST["madh"];
	$masp = $_POST["masp"];
	$nguoidat = $_POST["nguoidat"];
	$sdtdat = $_POST["sdtdat"];
	$nguoinhan = $_POST["nguoinhan"];
	$sdtnhan = $_POST["sdtnhan"];
	$diachi= $_POST["diachi"];
	$tgian= $_POST["tgian"];
	$gia = $_POST["gia"];

	$conn =  mysqli_connect("localhost", "root","") or die("Khong the ket noi csdl");
	mysqli_query($conn, "SET NAMES UTF8");
	mysqli_select_db($conn,"dienhoa");

	$query1 = "SELECT 'madh' FROM donhang  WHERE madh='$madh'" ;
	$result1= mysqli_query($conn, $query1);

	if(mysqli_num_rows($result1)>0){
		echo "Đơn hàng đã tồn tại. Thử lại với mã đơn hàng khác";
		// header("Location: home.php");

	} 
	else {

		$query2 = "SELECT 'masp' FROM sanpham  WHERE masp='$masp'" ;
		$result2= mysqli_query($conn, $query2);
		if( !$result2 || mysqli_num_rows($result2)==0){
				echo "Mã sản phẩm không tồn tại. Thử lại với mã sản phẩm khác";
		} else{
			$sql = "INSERT INTO donhang (madh, masp, nguoidat, sdtnguoidat, nguoinhan, sdtnguoinhan, diachinhan, thoigian, dongia) VALUES ('$madh', '$masp', '$nguoidat', '$sdtdat', '$nguoinhan', '$sdtnhan', '$diachi', '$tgian', '$gia')";
 
			if (mysqli_multi_query($conn, $sql)) {
			    header("Location: home.php");
			} else {
			    echo "co loi xay ra: ".mysqli_error($conn);
			}
			mysqli_close($conn);
		} 

	}	

?>