<?php
$conn= mysqli_connect("localhost", "root", "");
if(!$conn){
	die("kntb" . mysqli_connect_error());
	}
	 mysqli_query($conn, "SET NAMES UTF8");
	 mysqli_select_db($conn, "dienhoa");
	 $mdh= $_REQUEST['id'];
	 $query = "SELECT * FROM donhang where madh=" . "'$mdh'";
	 $result= mysqli_query($conn, $query);
	if(mysqli_num_rows($result)){
		$row= mysqli_fetch_assoc($result);	
		$madh=$row["madh"];	
		$masp=$row['masp'];
		$nguoidat=$row['nguoidat'];
		$sdtnguoidat=$row['sdtnguoidat'] ;
		$nguoinhan=$row['nguoinhan'];
		$sdtnguoinhan= $row['sdtnguoinhan'];
		$diachi=$row['diachinhan'];
		$thoigian=$row['thoigian'];
		$dongia=$row['dongia'] ;
	}
?>
	 	<form name="formcapnhat" method="post" action="xulycapnhat.php" class="col-sm-4 col-sm-offset-4">
        	<h3>Chi tiết đơn hàng</h3>
            <hr>
            <div class="order-info">

              <span class="chitiet" >Mã đơn hàng: <input class="input-chitiet" type="text" name="madh" value='<?php  echo "$madh"; ?>' readonly > </span><br>
              <span class="chitiet" >Mã sản phẩm: <input class="input-chitiet" type="text" name="masp" value='<?php  echo "$masp"; ?>'> </span><br>
              <span class="chitiet" >Người đặt: <input class="input-chitiet" type="text" name="nguoidat" value='<?php  echo "$nguoidat"; ?>'></span><br>
              <span class="chitiet" >SĐt người đặt: <input class="input-chitiet" type="text" name="sdtdat" value='<?php  echo "$sdtnguoidat"; ?>'></span> <br>
              <span class="chitiet" >Người nhận: <input class="input-chitiet" type="text" name="nguoinhan" value='<?php  echo "$nguoinhan"; ?>'></span> <br>
              <span class="chitiet" >SĐT người nhận: <input class="input-chitiet" type="text" name="sdtnhan" value='<?php  echo "$sdtnguoinhan"; ?>'></span> <br>
              <span class="chitiet" >Địa chỉ nhận: <input class="input-chitiet" type="text" name="diachi" value='<?php  echo "$diachi"; ?>'></span> <br>
              <span class="chitiet" >Thời gian: <input class="input-chitiet" type="text" name="thoigian" value='<?php  echo "$thoigian"; ?>'></span> <br>
              <span class="chitiet" >Đơn giá (vnđ): <input class="input-chitiet" type="text" name="dongia" value='<?php  echo "$dongia"; ?>'></span> <br>
            </div>
            <div>
              <center>
                <button id="btnChange" class="btn" type="submit" >Cập nhật</button>
                <button id="btnDelete" class="btn" onclick="xoa()">Xóa</button>
                <button id="btnCancel" class="btn" onclick="back()">Trở về</button>
              <center/>
            </div>
       </form>
