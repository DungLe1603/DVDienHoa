	<div class="header-main row">
				<h2>Quản lý đơn hàng</h2>
		        <div class="col-sm-6 col-sm-offset-2">
				<!-- <form action="" methord="post"> -->
		            <div id="imaginary_container"> 
		                <div class="input-group stylish-input-group">
		                    <input type="text" class="form-control"  placeholder="Tìm kiếm đơn hàng" id="search-text" value="">

		                    <span class="input-group-addon">
		                        <button type="submit" id="search-submit">
		                            <span class="glyphicon glyphicon-search"></span>
									
		                        </button>  
		                    </span>
		                </div>
		            </div>
				<!-- </form>	 -->
		        </div>
		        <div class="col-sm-4">
		        	<button class="add" onclick="add_order()">Thêm đơn hàng</button>
		        </div>
			</div>
		<div class="table-content" id="part-content" >
		<?php
			$conn= mysqli_connect("localhost", "root", "");
			 	if(!$conn){
			 		die("kntb" . mysqli_connect_error());
			 	}

				mysqli_query($conn, "SET NAMES UTF8");
			 	mysqli_select_db($conn, "dienhoa");


				$query="SELECT * from donhang";
			 	$result= mysqli_query($conn, $query);
			 	if(mysqli_num_rows($result)>0){
					  echo "<table class='table table-bordered'>";
					    echo "<thead>";
					      echo "<tr>";
					 		echo "<th>Mã ĐH</th>";
					 		echo "<th>Người đặt</th>";
					 		echo "<th>Người nhận</th>";
					 		echo "<th>Địa chỉ</th>";
					 		echo "<th>Thời gian</th>";
					 		echo "<th>Đơn giá</th>";
					 		echo "<th>Chi tiết</th>";
					 		echo "</tr>";
					    echo "</thead>";
					   echo "<tbody>";
					    $i=1;
					    while ($row= mysqli_fetch_assoc($result)) {
					 		# code...
							echo "<tr>";
				 			echo '<td id="js-madh-'.$i . '">' . $row["madh"] . "</td>";
				 			echo "<td>" . $row["nguoidat"] . "</td>";
				 			echo "<td>" . $row["nguoinhan"] . "</td>";
				 			echo "<td>" . $row["diachinhan"] . "</td>";
				 			echo "<td>" . $row["thoigian"] . "</td>";
				 			echo "<td>" . $row["dongia"] . "</td>";
				 			echo "<td><button onclick='chiTiet($i)'>******</button></td>";
				 			// echo "<td><input type='button' onclick='chiTiet($i)' value='***'></td>";
				 			echo "</tr>";
				 			$i++;
				 		}
					    echo "</tbody>";
					  echo "</table>";
					}else{
						echo "NO";
					}
			 ?>
		</div>

