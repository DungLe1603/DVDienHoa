<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="handle/css/bootstrap.min.css">
  

	<style>
  .form-group{
   margin: 30px;
  }
	.form-input{
		width: 250px;
		position: relative;
		left: 120px;
    top: -25px;
	}
  .add-form{ 
    width: 500px;
    margin: 0 auto;
  }
  .block-center{
    margin: 0 120px;

  }
</style>

</head>
<body>
<div class="block-center"> 
  <form  name="addform" method="post" action="xulythem.php" class="add-form">
    <h2 class="text-center">Thêm đơn hàng</h2>
    <div class="form-group">
        <label for="madh">Mã đơn hàng:</label>
        <input type="text" class="form-control form-input" required="true" name="madh">
        <label for="masp">Mã sản phẩm:</label>
        <input type="text" class="form-control form-input" required="true" name="masp">
        <label>Người đặt:</label>
        <input type="text" class="form-control form-input" required="true" name="nguoidat">
        <label>SĐT người đặt:</label>
        <input type="text" class="form-control form-input" required="true" name="sdtdat">
        <label>Người nhận:</label>
        <input type="text" class="form-control form-input" required="true" name="nguoinhan">
        <label>SĐT người nhận:</label>
        <input type="text" class="form-control form-input" required="true" name="sdtnhan">
        <label>Địa chỉ nhận:</label>
        <input type="text" class="form-control form-input" required="true" name="diachi">
        <label>Thời gian:</label>
        <input type="datetime-local" class="form-control form-input" required="true" name="tgian">
        <label>Đơn giá:</label>
        <input type="text" class="form-control form-input" required="true" name="gia">
        <div class="block-center">
          <button type="submit" class="btn btn-primary">Thêm</button>
          <button type="reset" class="btn btn-secondary" onclick="back()">Reset</button>
        </div>
    </div>
   
  </form>
</div>
    <script src="handle/js/jquery-3.2.1.min.js"></script>
    <script src="handle/js/bootstrap.min.js"></script>
    <script src="handle/js/func.js"></script></body>
</html>
