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
					<label>Staff Id</label>
					<input type="text" class="form-control" name="staff_id" required="">
				</div>
				<div class="form-group">
					<label>Staff name</label>
					<input type="text" class="form-control" name="staff_name" required="">
				</div>
				<div class="form-group">
					<label>Department</label>
					<select name="department_name" class="form-control">
								
									<?php
									include("include/dbconn.php");
									$qry="select * from dept";
									$exc=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_array($exc))
									 {
									 ?>
									 	<option><?php echo $row['department_name'];?></option>
									 
								 	<?php
								 }

						?>		
					</select>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" required="">
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" class="form-control" name="password" required="">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" name="submit">INSERT</button>
				
				</div>


			</form>

		</div>
	</div>
</div>

<?php 
include("include/dbconn.php");

if(isset($_POST['submit']))
{


		$staff_id=$_POST['staff_id'];
		$staff_name=$_POST['staff_name'];
		$department=$_POST['department_name'];
		$email=$_POST['email'];
		$password=$_POST['password'];


		$qry1="select * from staff where staff_id='$staff_id'";
		$exc1=mysqli_query($conn,$qry1);
		$result=mysqli_affected_rows($conn);
		if($result)
		 {
				echo "ID already existed";
				
		}
		else
		{
							
			$qry="INSERT INTO `staff`(`staff_id`, `staff_name`, `department`, `email`,`password`) VALUES('$staff_id','$staff_name','$department','$email','$password')";
				$exe=mysqli_query($conn,$qry);
				if($exe==true)
				{
					
					echo " <script> alert('data inserted');
			window.location='view_staff.php';
		</script>";
				}
				else
				{
					echo "<script> alert('error');
			window.location='view_staff.php';
		</script>";
				}
	}				
}


?>
	<?php include('footer.php') ?>
	
</body>
</html>
				

	