
<?php
    $conn= mysqli_connect("localhost", "root", "");
    if(!$conn){
        die("kntb" . mysqli_connect_error());
    }
    mysqli_query($conn, "SET NAMES UTF8");
        mysqli_select_db($conn, "dienhoa");
        $text= $_REQUEST['id'];
       
        $dkArr= array("madh", "nguoidat", "nguoinhan", "diachinhan");
        echo "<table class='table table-bordered' style='padding-top:200px'>";
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

  if ($text <> ""){
    foreach($dkArr as $dk){
         $query = "SELECT * FROM donhang where ". $dk ." like '%" . "$text" . "%'";
         $result= mysqli_query($conn, $query);
         // $a=empty($result);
         if(mysqli_num_rows($result)>0){
              $i=1;
              while ($row= mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                   echo '<td id="js-madh-'.$i . '">' . $row["madh"] . "</td>";
                   echo "<td>" . $row["nguoidat"] . "</td>";
                   echo "<td>" . $row["nguoinhan"] . "</td>";
                   echo "<td>" . $row["diachinhan"] . "</td>";
                   echo "<td>" . $row["thoigian"] . "</td>";
                   echo "<td>" . $row["dongia"] . "</td>";
                   echo "<td><button onclick='chiTiet($i)'>******</button></td>";   
                  echo "</tr>";
                $i++;
               }
                   
          }

        }

          echo "</table>";
    }

?>