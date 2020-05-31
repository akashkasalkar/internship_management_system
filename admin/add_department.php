<!DOCTYPE html>
<html>
<head>
	<title>Add Department</title>
</head>
<body>
<?php include "top_nav.php" ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!--Welcome page for admin-->
			<h3> Welcome <a href="welcomeadmin">Admin</a></h3>
			<form method="post" action="">
				<div class="form-group">
					<label>Department Id</label>
					<input type="text" class="form-control" name="department_id" required="">
				</div>
				<div class="form-group">
							<label>Department Name</label>
							<input type="text" name="department_name" class="form-control">
						</div>
						

						
				<div class="form-group">
					<label>HOD Email</label>
					<input type="text" class="form-control" name="email" required="">
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" class="form-control" name="password" required="">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" name="submit">Save</button>
				
				</div>


			</form>


		</div>
	</div>
</div>



<?php
if(isset($_POST['submit']))
{
		$dept_id=$_POST['department_id'];
		$dept_name=$_POST['department_name'];
		$email=$_POST['email'];

		$password=$_POST['password'];


		$qry1="select * from dept where department_id='$dept_id'";
		$exc1=mysqli_query($conn,$qry1);
		$result=mysqli_affected_rows($conn);
		if($result)
		 {
				echo "ID already existed";
				
		}
		else
		{
							
			$qry="INSERT INTO `dept`(`department_id`, `depaartment_name`, `email`, `password`) VALUES('$dept_id','$dept_name','$email','$password')";
				$exe=mysqli_query($conn,$qry);
				if($exe==true)
				{
					echo " <script> alert('data inserted');
			window.location='view.php';
		</script>";
				}
				else
				{
					echo "<script> alert('error');
			window.location='view.php';
		</script>";
				}
	}				
}

?>


					

	<?php include('footer.php'); ?>
</form>
</body>
	</html>	