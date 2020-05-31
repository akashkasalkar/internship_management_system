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
		<center><h1>UPDATE DEPARTMENT</h1></center>
  
      
    
      	
     	<?php
     	include("include/dbconn.php");
     	 	$dept_id=$_GET['department_id'];
			$qry="select * from dept where department_id='$dept_id'";
			$exc=mysqli_query($conn,$qry);
			while ($row=mysqli_fetch_array($exc)) {
		?>
			<form method="post" action="">
				<div class="form-group">
					<label>Department Id</label>
					<input type="text" class="form-control" name="department_id" value="<?php echo $row['department_id'];?>" required="">
				</div>
				<div class="form-group">
					<label>Department name</label>
					<input type="text" class="form-control" name="department_name" value="<?php echo $row['department_name'];?>"  required="">
				</div>
				<div class="form-group">
					<label>HOD email</label>
					<input type="text" class="form-control" name="email"  value="<?php echo $row['email'];?>" required="">
				</div>
				<div class="form-group">
					<label>username</label>
					<input type="text" class="form-control" name="username"value="<?php echo $row['username'];?>"  required="">
				</div>
								<div class="form-group">
					<button class="btn btn-primary" name="update">Update</button>
				</div>
		</form>
			<?php } 
			?>
			<?php 

			if (isset($_POST['update']))
			 {
				$dept_id=$_GET['department_id'];

				//$dept_name=$_POST['department_name'];

				$email=$_POST['email'];

				$username=$_POST['username'];

				


				$sql="UPDATE `dept` SET ,`email`='$email' WHERE department_id='$dept_id'";
				$exc=mysqli_query($conn,$sql);
				if($exc==true){
						echo "<script>alert('data updated successfully');
							window.location='view.php';
						</script>";
					}
					else {
							echo "<script>alert('error');
							window.location='view.php';
						</script>"; # code...
						}	
				
				}
			?>
		</div>
	</body>
</html>