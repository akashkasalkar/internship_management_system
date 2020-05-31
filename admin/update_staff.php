<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
</head>
<body>
	<?php
			include("top_nav.php");
		
		?>

		<div class="container">
		<center><h1>UPDATE STAFF</h1></center>
  
      
    
      	
     	<?php
     	include("include/dbconn.php");
     	 	$staff_id=$_GET['staff_id'];
			$qry="select * from staff where staff_id='$staff_id'";
			$exc=mysqli_query($conn,$qry);
			while ($row=mysqli_fetch_array($exc)) {
		?>
			<form method="post" action="">
				<div class="form-group">
					<label>Staff Id</label>
					<input type="text" class="form-control" name="staff_id" value="<?php echo $row['staff_id'];?>" required="">
				</div>
				<div class="form-group">
					<label>Staff name</label>
					<input type="text" class="form-control" name="staff_name" value="<?php echo $row['staff_name'];?>"  required="">
				</div>
				<div class="form-group">
					<label>Department</label>
					<input type="text" class="form-control" name="department"  value="<?php echo $row['department'];?>" required="">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"  required="">
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" class="form-control" name="password" value="<?php echo $row['password'];?>" required="">
				</div>
				<div class="form-group">
					<button class="btn btn-dark" name="update">Update</button>
				</div>
		</form>
			<?php } 
			?>
			<?php 

			if (isset($_POST['update']))
			 {
				$staff_id=$_GET['staff_id'];

				$staff_name=$_POST['staff_name'];

				$department=$_POST['department'];

				$email=$_POST['email'];

				
				$sql="UPDATE `staff` SET `staff_name`='$staff_name',`department`='$department',`email`='$email' WHERE staff_id='$staff_id'";
				$exc=mysqli_query($conn,$sql);
				if($exc==true){
						echo "<script>alert('data updated successfully');
							window.location='view_staff.php';
						</script>";
					}
					else {
							echo "<script>alert('error');
							window.location='view_staff.php';
						</script>"; # code...
						}	
				
				}
			?>
		</div>
	</body>
</html>