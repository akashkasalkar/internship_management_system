<?php
	include("include/dbconn.php");

	$usn=$_GET['usn'];
			
	$qry="DELETE FROM `student` WHERE `usn`='$usn'";
	$exe=mysqli_query($conn,$qry);
	if ($exe)
	 {
		echo "<script> alert('data deleted');
			window.location='view_student.php';
		</script>";
		
	}
	

?>