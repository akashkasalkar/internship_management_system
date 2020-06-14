<!DOCTYPE html>
<html lang="en">



<body class="grey lighten-3">

 <?php include "left_nav.php"; ?>
 <main class="pt-5 mx-lg-5">

 	 <div class="container-fluid mt-5 col-lg-6">
          	
            <h1 class="text-danger text-center  ">Change Password</h1>
        </div>
            </div>
           
			<form method="post" class="col-lg-6 offset-3">

			<div class="form-group">
			<label class="h6">Old Password:</label>
			<input type="password"  name="old_pass" required="" class="form-control">
		</div>
		<div class="form-group">
			<label class="h6">Change Password:</label>
			<input type="password"  name="new_pass" required="" class="form-control">
		</div>
		<div class="form-group">
			<label class="h6">Confirm Password:</label>
			<input type="password"  name="confirm_pass" required="" class="form-control">
		</div>	
		<div class="card-footer text-muted">
			<button  class="btn btn-info black-text" name="change_pwd">Change Password</button>
		</div>
	</form>
</div>



					<?php 
						  if (isset($_POST['change_pwd'])) {
						  	$oldpassword=$_POST['old_pass'];
						  	$newpassword=$_POST['new_pass'];
						  	$confirm_pass=$_POST['confirm_pass'];

						  	$dept_username=$_SESSION['dept_username'];
						  	$qry="select * from dept where email='$dept_username'";
						  	$exe=mysqli_query($conn,$qry);
						  	
						  	while ($row=mysqli_fetch_array($exe)) {
						  		$password=$row['password'];
						  		if ($oldpassword!=$password) {
						  		echo "<script>alert('old password is wrong')</script>";
						  		}
						  		elseif ($newpassword!=$confirm_pass) {
						  			echo "<script>alert('new password is wrong')</script>";
						  		}
						  		else
						  		{

						  			$qry1="update `dept` set `password`='$newpassword' where `email`='$dept_username'";
						  			$exc2=mysqli_query($conn,$qry1);
						  			if ($exc2) {
						  				echo "<script>alert(' password changed...Login again with new Password');
						  				window.location='logout.php';</script>";
						  			}

						  		}
						  	}

						  }
					?>
</div>


</div>
</div>
</body>
</html>