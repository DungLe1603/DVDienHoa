<?php 
    $madh= $_POST["madh"];
    var_dump("$madh");

	 	$conn= mysqli_connect("localhost", "root", "");
	 	if(!$conn){
	 		die("kntb" . mysqli_connect_error());
     }     
	 	mysqli_query($conn, "SET NAMES UTF8");
     mysqli_select_db($conn, "dienhoa");

      $query="DELETE FROM donhang where madh='$madh'";
      if (mysqli_query($conn, $query)) {
          echo "Record deleted successfully";
          header("Location: home.php");
      } else {
          echo "Error deleting record: " . mysqli_error($conn);
      }
    
?>