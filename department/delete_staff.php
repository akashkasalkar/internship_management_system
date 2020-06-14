<?php 
	include "include/dbconn.php";
	$id=$_GET['staff_id'];

	$qry="delete from staff where staff_id='$id'";
	$exc=mysqli_query($conn,$qry);
	if ($exc) {
		# code...
		echo "<script>alert('data deleted..');
						window.location='view_staff.php';
		</script>";
	}
	
?>