<?php
	include("include/dbconn.php");

	$dept_id=$_GET['department_id'];
			
	$qry="DELETE FROM `dept` WHERE `department_id`='$dept_id'";
	$exe=mysqli_query($conn,$qry);
	if ($exe) {
		echo "<script> alert('data deleted');
			window.location='view_department.php';
		</script>";
		
	}
	

?>