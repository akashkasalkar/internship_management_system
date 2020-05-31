<?php
	include("include/dbconn.php");

	$staff_id=$_GET['staff_id'];
			
	$qry="DELETE FROM `staff` WHERE `staff_id`='$staff_id'";
	$exe=mysqli_query($conn,$qry);
	if ($exe)
	 {
		echo "<script> alert('data deleted');
			window.location='view_staff.php';
		</script>";
		
	}
	

?>