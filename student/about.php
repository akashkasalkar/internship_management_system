<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<style type="text/css">
		.avatar-pic {
width: 150px;
}
	</style>
	<?php 
		include "dbconn.php";
	?>
</head>
<body>
<section class="fnavbar">
	 <?php include "navbar.php"; ?>
</section>
	<h2 class="center-align" style="text-shadow: 2px 2px yellow">My Profile</h2>
	<section id="myform">
		<div class="container">
			<?php
				$usn=$_SESSION['usn'];
				$qry="select * from student where usn='$usn'";
				$exc=mysqli_query($conn,$qry);
				while ($row=mysqli_fetch_array($exc)) {
					?>
				
			<form class="md-form" method="post">
			<div class="row">
				<div class="col s12 l6 m6">
					
  							<table class="table">
  								<tr>
  									<th>USN:</th>
  									<td><?php echo $row['usn']; ?>
  										<input type="text" name="usn" value="<?php echo $row['usn']; ?>" hidden>
  									</td>
  								</tr>
  								<tr>
									<th>Department:</th>
									<td><?php echo $row['department']; ?></td>
								</tr>
  								<tr>
  									<th>Name:</th>
  									<td><input type="text" name="name" value="<?php echo $row['name']; ?>" required></td>
  								</tr>
  								<tr>
  									<th>Email:</th>
  									<td><input type="email" name="email" value="<?php echo $row['email']; ?>" required></td>
  								</tr>
  								
  								

  							</table>	
					
				</div>
				<div class="col s12 l6 m6">
						<table class="table">
							<tr>
  									<th>Phone:</th>
  									<td><input type="text" name="phone" value="<?php echo $row['phone']; ?>" required></td>
  								</tr>
							<tr>
  									<th>DOB:</th>
  									<td><input type="text" name="dob" value="<?php echo $row['dob']; ?>" required></td>
  								</tr>
  								<!--tr>
  									<th>Gender:</th>
  									<td><input type="radio" name="sex" value="male" checked=""><span>Male</span>
  									<input type="radio" name="sex" value="female" ><span>Female</span>

  									</td>
  								</tr-->
							
							
						</table>
						<div class="input-field">
        				<button class="btn waves-effect waves-light green" type="submit" name="update">Update</button>
        				<!--button class="btn waves-effect waves-light blue" type="submit" name="update">Change Password</button-->
        			</div>
					
					
				</div>
				
				
			</div>
			</form>
			<?php 
			}

			 ?>
		</div>
	</section>
	</section>
	<?php
		if (isset($_POST['update'])) {
			$usn=$_POST['usn'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$dob=$_POST['dob'];
			$gender=$_POST['sex'];
			$phone=$_POST['phone'];
			$qry="update student set name='$name',email='$email',gender='$gender',phone='$phone' where usn='$usn'";
			$exc=mysqli_query($conn,$qry);
			if ($exc) {
				echo "<script>alert('Data Updated');
							window.location='about.php'
				</script>";
			}
			else
			{
				echo "<script>alert('Data not Updated');
							window.location='about.php'
				</script>";

			}
		}
	 ?>
</body>

</html>